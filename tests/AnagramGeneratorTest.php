<?php
    require_once "src/AnagramGenerator.php";
    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_testAnagram_rejectNonAlpha()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "2@ra w3rd";
            //Act
            $result = $test_AnagramGenerator->testAnagram($input);
            //Assert
            $this->assertEquals("Please enter a word.", $result);
        }

        // function test_testAnagram_lowercase()
        // {
        //     //Arrange
        //     $test_AnagramGenerator = new AnagramGenerator;
        //     $input = "BrEaD";
        //     //Act
        //     $result = $test_AnagramGenerator->testAnagram($input);
        //     //Assert
        //     $this->assertEquals("bread", $result);
        // }

        // function test_testAnagram_stringLength()
        // {
        //     //Arrange
        //     $test_AnagramGenerator = new AnagramGenerator;
        //     $input = "BrEaD";
        //     //Act
        //     $result = $test_AnagramGenerator->testAnagram($input);
        //     //Assert
        //     $this->assertEquals(5, $result);
        // }

        function test_testAnagram_lowercaseAndStringLength()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "BrEaD";
            //Act
            $result = $test_AnagramGenerator->testAnagram($input);
            //Assert
            $this->assertEquals(["bread", 5], $result);
        }


    }
?>
