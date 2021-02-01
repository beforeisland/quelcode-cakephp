<?php

namespace App\Model\Validation;

use Cake\Validation\Validation;

class CustomValidation extends Validation
{

    public static function imgExtension($value)
    {
        $imgInfomation = pathinfo($value);
        $imgExtension = mb_strtolower($imgInfomation['extension']);
        if ($imgExtension === "jpg" || $imgExtension === "png") {
            return true;
        } else {
            return false;
        }
    }
}
