<?php

namespace App\Core\Clients\Validator;

use Illuminate\Foundation\Http\FormRequest;

class PlanValidator extends FormRequest {

    private $rules = [
        'gid' => 'required|numeric'
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
