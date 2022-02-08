<?php
namespace firstyii\tests\unit;
require_once('/var/www/task.local/firstyii/protected/models/ArrayUtils.php');
use PHPUnit\Framework\TestCase;
use ArrayUtils;

class ArrayUtilsTests extends TestCase
{
    public function testGetNumberArrayFrom1To5ReturnArrayWithLength5()
    {
        //Arrange
        $expectedArrayLength = 5;
        //Act
        $array = ArrayUtils::GetNumberArrayFrom1To($expectedArrayLength);
        //Assert
        $this->assertEquals($expectedArrayLength, count($array));
    }

    public function testGetPrimeNumberArrayFromArrayAndReturnPrimeNumberArray()
    {
       //Arrange
       $expectedArray = [1,2,3,5,7];
       $array = ArrayUtils::GetNumberArrayFrom1To(10);
       //Act
       $actualArray = ArrayUtils::GetPrimeNumberArrayFrom($array);
       //Assert
       for($i = 0; $i < count($actualArray); $i++)
       {
           $this->assertEquals($expectedArray[$i], $actualArray[$i]);
       }
    }

    public function testGetPalindromeNumberArrayFromArrayReturnPalindromeNumberArray()
    {
        //Arrange
        $expectedArray = [1,2,3,4,5,6,7,8,9,11,22,33,44];
        $array = ArrayUtils::GetNumberArrayFrom1To(44);
        //Act
        $actualArray = ArrayUtils::GetPalindromeNumberArrayFrom($array);
        //Assert
        for($i = 0; $i < count($actualArray); $i++)
        {
            $this->assertEquals($expectedArray[$i], $actualArray[$i]);
        }
    }
}