<?php

namespace App\Core\Users\Classes;

use App\Permission;
use App\PermissionRole;
use Illuminate\Support\Collection;
use App\Role;

class RolesManagement {

  private $permissionTree;

  /**
   * Get permission in tree including packages,modulename,and permission
   * @return \Illuminate\Support\Collection
   */
  public function getPermissionTree() {
	$permissions = Permission::all();
	$roles = Role::orderBy('id', 'ASC')->get(['id', 'name']);

	$packageTree = new Collection();
	$tree = array();
	foreach ($permissions as $permission) {
	  $permissionModule = array_first(explode(".", $permission->name));
	  $structure = $this->searchModulesInPackage($permissionModule);
	  if ($structure) {
		$rolesCheckbox = null;
		//Fill which role has access in which permission
		foreach ($roles as $role) {
		  $permissionRole = PermissionRole::where('permission_id', $permission->id)
			->where('role_id', $role->id)
			->first();
		  $granted = (bool) FALSE;
		  if ($permissionRole) {
			$granted = (bool) TRUE;
		  }
		  $rolesCheckbox[$role->name]['id'] = $role->id;
		  $rolesCheckbox[$role->name]['name'] = $role->name;
		  $rolesCheckbox[$role->name]['status'] = $granted;
		}

		$permissionTree = new Collection();
		$permissionTree->prepend($rolesCheckbox, 'roles');
		$permissionTree->prepend($permission);

		$tree[strtolower($structure['package'])]['package_name'] = $structure['package_display_name'];
		$tree[strtolower($structure['package'])][$structure['permissionModule']]['permissions'][] = $permissionTree;
	  }
	}
	$packageTree->prepend($tree);
	return $packageTree;
  }

  /**
   * Search Module in packages just by sending permission module prefix
   * @param type $permissionModule
   * @return array
   */
  public function searchModulesInPackage($permissionModule) {

	$packages = config('core.packages');
	foreach ($packages as $package) {
	  $modules = config(strtolower($package) . ".modules");
	  foreach ($modules as $moduleName => $module) {
		//Check if module for this permission exist on that module
		if (array_key_exists(ucfirst($permissionModule), config(strtolower($package) . '.modules'))) {
		  return array(
			'package' => $package,
			'package_display_name' => config(strtolower($package) . ".package_display_name"),
			'permissionModule' => $permissionModule,
		  );
		}
	  }
	}
	return false;
  }

}
