<?php
/**
 * The supported validation 
 */
$replaceValue = "####";

return array(
    'required' => 'required=""',
    'email' => 'type="email"',
    'number' => 'type=number',
    'url' => 'type="url"',
    'string' => 'type="text"',
    'alpha_num' => 'data-parsley-type="alphanum"',
    'min' => 'minlength="' . $replaceValue . '"',
    'max' => 'maxlength="' . $replaceValue . '"',
);
