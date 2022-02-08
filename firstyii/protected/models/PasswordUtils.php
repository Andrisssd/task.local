<?php

class PasswordUtils
{
    public static function GetGeneratedPasswordStringFrom($numberArray, $passwordLength)
    {
        $passwordStr = "";
        while (strlen($passwordStr) < $passwordLength) {
            $index = rand(0, count($numberArray) - 1);
            $numberStr = strval($numberArray[$index]);
            if (strlen($numberStr) + strlen($passwordStr) <= $passwordLength) {
                $passwordStr .= $numberStr;
            }
        }

        return $passwordStr;
    }

    public static function GetPasswordLength($passwordMaxLength)
    {
        $passwordMinLength = 3;
        $passwordLength = rand($passwordMinLength, $passwordMaxLength);
        return $passwordLength;
    }
}