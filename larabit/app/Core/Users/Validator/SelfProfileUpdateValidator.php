<?php

namespace App\Core\Users\Validator;

use Illuminate\Foundation\Http\FormRequest;

class SelfProfileUpdateValidator extends FormRequest {
    private $rules = [
	  'username' => 'required|min:3|string'
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
