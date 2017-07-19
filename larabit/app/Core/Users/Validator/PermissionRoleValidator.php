<?php

namespace App\Core\Users\Validator;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRoleValidator extends FormRequest {

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
	return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
	return [
	  'roleId' => 'required|numeric|min:0',
	  'permissionId' => 'required|numeric|min:0',
	  'status' => 'required|alpha'
	];
  }

  /**
   * Validate Get Request
   * @return type
   */
  public function all() {
	return array_replace_recursive(
	  parent::all(), $this->route()->parameters()
	);
  }

}
