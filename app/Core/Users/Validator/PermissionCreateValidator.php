<?php

namespace App\Core\Users\Validator;

use Illuminate\Foundation\Http\FormRequest;

class PermissionCreateValidator extends FormRequest {

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
	  'name' => 'required|string|unique:permissions',
	  'display_name' => 'required',
	  'description' => 'required'
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
