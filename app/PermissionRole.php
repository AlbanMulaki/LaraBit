<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model {

  protected $table = 'permission_role';

  public function permission() {
	return $this->hasMany('App\Permission', 'id', 'permission_id');
  }

  public function deletePermissionRole($roleId, $permissionId) {
	$this->where('role_id', $roleId)->where('permission_id', $permissionId)->forceDelete();
	return true;
  }

}
