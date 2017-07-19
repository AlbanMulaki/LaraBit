<?php

namespace App\Core\Dashboard\Validator;

use Illuminate\Foundation\Http\FormRequest;
use App\Settings;

class SettingsUpdateValidator extends FormRequest {

    private $rules;

    public function __construct() {
        parent::__construct();
        $settings = Settings::all();
        foreach($settings as $setting) {
            $this->rules[$setting->code] = $setting->type."|".$setting->validation_rules;
        }
        info($this->rules);
    }

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
