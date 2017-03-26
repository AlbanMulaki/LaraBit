<?php

namespace App\Core\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Core\Users\Classes\RolesManagement;
use App\Role;
use App\Permission;
use App\PermissionRole;
use App\Core\Users\Validator\PermissionRoleValidator;
use App\Core\Users\Validator\CreateRoleValidator;

class UsersController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->setPageName(trans('users::general.users_title'));
    }

    /**
     * Define what to show first
     * Redirect to their path as first show
     * @return type
     */
    public function redirect() {
        return redirect()->action("\\" . (self::class) . "@index");
    }

    /**
     * List all users
     * @return type
     */
    public function listsUser() {
        return view('users::listUser');
    }

    /*
     * Manage Roles page
     * @return view
     */

    public function roles() {
        $rolesManagement = new RolesManagement();
        $permissionsTree = $rolesManagement->getPermissionTree();
        $roles = Role::orderBy('id', 'ASC')->pluck('display_name');
        return view('users::roles', [
            'permissionsTree' => $permissionsTree,
            'roles' => $roles]);
    }

    /**
     * Create Role
     * @param CreateRoleValidator $request
     * @return type
     */
    public function createRole(CreateRoleValidator $request) {
        $role = new Role();
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();

        if ((request()->ajax() && !request()->pjax()) || request()->wantsJson()) {
            $message['message'][] = trans('users::validation.success_created_role', ['role' => $role->name]);
            $message['code'] = 200;
            $message['status'] = 'success';
            $message['action'] = 'create';
            return response($message, 200);
        }

        return redirect()->back();
    }

    /**
     * Update Permission of roles
     */
    public function updatePermissionRole(PermissionRoleValidator $request) {

        $role = Role::find($request->roleId);
        $permission = Permission::find($request->permissionId);

        if ($role == NULL || $permission == NULL) {
            $message['message'][] = trans('common::validation.generic_error');
            $message['code'] = 500;
            $message['status'] = 'error';
            return response($message, 500);
        }

        if ($request->status == "delete") {
            $permissionRole = new PermissionRole();
            $permissionRole->deletePermissionRole($request->roleId, $request->permissionId);
            $message['message'][] = trans('users::validation.success_deleted');
            $message['code'] = 200;
            $message['status'] = 'success';
            $message['action'] = 'delete';
            return response($message, 200);
        } else if ($request->status == "create") {
            $role->attachPermission($permission);
            $message['message'][] = trans('users::validation.success_change_role_permission', ['role' => $role->name]);
            $message['code'] = 200;
            $message['status'] = 'success';
            $message['action'] = 'create';
            return response($message, 200);
        }
        abort(500);
    }

}
