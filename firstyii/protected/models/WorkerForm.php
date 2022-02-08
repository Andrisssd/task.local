<?php

use ArrayUtils;
use PasswordUtils;

class WorkerForm extends CFormModel
{
    public $numberTotalCount;
    public $passwordMaxLength;
    public $primeNumbers;
    public $palindromeNumbers;
    public $password;

    public function rules()
    {
        return array(
            array('numberTotalCount, passwordMaxLength', 'required')
        );
    }

    public function AreInputsValid()
    {
        if(is_numeric($this->numberTotalCount) && is_numeric($this->passwordMaxLength))
        {
            return $this->passwordMaxLength >= 3;
        }

        return false;
    }

    public function SetErrorProperties()
    {
        $this->numberTotalCount = "Only numbers allowed!";
        $this->passwordMaxLength = "Password maximum length cant be less than 3!";
    }

    public function GetResultStrings()
    {
        $passwordLength = PasswordUtils::GetPasswordLength($this->passwordMaxLength);
        $numberArray = ArrayUtils::GetNumberArrayFrom1To($this->numberTotalCount);
        $primeNumberArray = ArrayUtils::GetPrimeNumberArrayFrom($numberArray);
        $this->primeNumbers = "Prime numbers : " . join(" ", ArrayUtils::GetPrimeNumberArrayFrom($numberArray));
        $this->palindromeNumbers = "Palindrome numbers : " . join(" ", ArrayUtils::GetPalindromeNumberArrayFrom($numberArray));
        $this->password = "Password : " . PasswordUtils::GetGeneratedPasswordStringFrom($primeNumberArray, $passwordLength);
    }
}
