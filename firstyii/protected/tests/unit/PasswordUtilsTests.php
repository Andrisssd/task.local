<?php
namespace firstyii\tests\unit;
require_once('/var/www/task.local/firstyii/protected/models/PasswordUtils.php');
require_once('/var/www/task.local/firstyii/protected/models/ArrayUtils.php');
use PHPUnit\Framework\TestCase;
use PasswordUtils;
use ArrayUtils;

class ArrayUtilsTests extends TestCase
{
    public function testGetPasswordLengthShouldReturnNumberInRightRange()
    {
        for($i = 0; $i < 20; $i++)
        {
        //Arrange
        $passwordMaxLength = rand(4,30);
        $passwordMinLength = 3;
        $passwordLength = PasswordUtils::GetPasswordLength($passwordMaxLength);
        //Act
        $passwordLengthIsBiggerOrEquals3 = $passwordLength >= $passwordMinLength;
        $passwordLengthIsSmallerOrEqualsPasswordMaxLength = $passwordLength <= $passwordMaxLength;
        //Assert
        $this->assertTrue($passwordLengthIsBiggerOrEquals3);
        $this->assertTrue( $passwordLengthIsSmallerOrEqualsPasswordMaxLength);
        }
    }

    public function testGetGeneratedPasswordStringFromPrimeNumberArrayShouldReturnPassword()
    {
        for($i = 0; $i < 20; $i++)
        {
        //Arrange
        $passwordMaxLength = rand(4,30);
        $passwordMinLength = 3;
        $array = ArrayUtils::GetNumberArrayFrom1To($passwordMaxLength);
        $primeNumberArray = ArrayUtils::GetPrimeNumberArrayFrom($array);
        $passwordLength = PasswordUtils::GetPasswordLength($passwordMaxLength);
        $actualPassword = PasswordUtils::GetGeneratedPasswordStringFrom($primeNumberArray, $passwordLength);
        //Act
        $passwordLengthIsBiggerOrEquals3 = strlen($actualPassword) >= $passwordMinLength;
        $passwordLengthIsSmallerOrEqualsPasswordMaxLength = strlen($actualPassword) <= $passwordMaxLength;
        //Assert
        $this->assertTrue($passwordLengthIsBiggerOrEquals3);
        $this->assertTrue( $passwordLengthIsSmallerOrEqualsPasswordMaxLength);
        }
    }
}