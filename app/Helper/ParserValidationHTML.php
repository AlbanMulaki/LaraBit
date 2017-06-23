<?php

namespace App\Helper;

use \Illuminate\Foundation\Http\FormRequest;

class ParserValidationHTML {

    private $htmlContext;
    /**
     * Parse validation rules in any input,select,radiobox etc...
     * Based on validation laravel rule we convert them into html context
     * @param FormRequest $validator
     * @param type $fieldName
     * @return string
     */

    public function parseValidation(FormRequest $validator, $fieldName) {
        $this->htmlContext = include base_path('app/Helper/HTMLContextRule.php');
        $fieldRules = $validator->getRules();
        $validationRuleHtml = "";
        foreach ($fieldRules as $keyFieldrule => $fieldRule) {
            if ($keyFieldrule === $fieldName) {
                $basicRule = explode("|", $fieldRule);
                foreach ($basicRule as $advancedRule) {
                    $advancedR = explode(":", $advancedRule);
                    if (count($advancedR) == 2) {
                        $value = last($advancedR);
                        $advancedR = array_flip($advancedR);
                        $rl = array_intersect_key($this->htmlContext, $advancedR);
                        $rl = str_replace("####", $value, $rl);
                        $validationRuleHtml .= current($rl);
                    }
                }
                $basicRule = array_flip($basicRule);
                $toString = implode(" ", array_intersect_key($this->htmlContext, $basicRule));
                $validationRuleHtml .= $toString;
            }
        }
        $validationRuleHtml .= " name='" . $fieldName . "' id='" . $fieldName . "'";
        return $validationRuleHtml;
    }

}
