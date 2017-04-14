<?php

namespace App\Core\Users\Validator;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoleValidator extends FormRequest {
    private $rules = [
	  'name' => 'required|min:6|string',
	  'display_name' => 'required|min:3|string',
	  'description' => 'string'
	];

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
	return $this->rules;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function getRules() {
	return $this->rules;
  }


}
