<?php

namespace App\Core\Users\Validator;

use Illuminate\Foundation\Http\FormRequest;

class SelfProfileUpdateValidator extends FormRequest {
    private $rules = [
	  'username' => 'required|min:3|string',
	  'first_name' => 'required|min:3|string',
	  'last_name' => 'required|min:3|string',
	  'title' => 'min:3|string|nullable',
	  'company' => 'min:3|string|nullable',
	  'email' => 'required|email|max:255',
	  'language_code' => 'required|string',
	  'birthdate' => 'required|date',
	  'address' => 'string|nullable',
	  'address_2' => 'string|nullable',
	  'address_3' => 'string|nullable',
	  'state' => 'min:3|string|nullable',
	  'zipcode' => 'min:3|numeric|nullable',
	  'website' => 'url|nullable',
	  'facebook_uri' => 'url|nullable',
	  'twitter_uri' => 'url|nullable'
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
