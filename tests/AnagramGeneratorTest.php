<?php
    require_once "src/AnagramGenerator.php";
    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_isAnagram_singleLetter()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $inputOne = "a";
            $inputTwo = "b";
            //Act
            $result = $test_AnagramGenerator->isAnagram($inputOne, $inputTwo);
            //Assert
            $this->assertEquals(false, $result);
        }
        function test_isAnagram_sameMultipleLetter()
        {
            $test_AnagramGenerator = new AnagramGenerator;
            $inputOne = "aa";
            $inputTwo = "aa";
            $result = $test_AnagramGenerator->isAnagram($inputOne, $inputTwo);
            $this->assertEquals(true, $result);
        }
        function test_isAnagram_multiLetterSort()
        {
            $test_AnagramGenerator = new AnagramGenerator;
            $inputOne = "aba";
            $inputTwo = "abb";
            $result = $test_AnagramGenerator->isAnagram($inputOne, $inputTwo);
            $this->assertEquals(false, $result);
        }




        // function test_testAnagram_rejectNonAlpha()
        // {
        //     //Arrange
        //     $test_AnagramGenerator = new AnagramGenerator;
        //     $input = "2@ra w3rd";
        //     //Act
        //     $result = $test_AnagramGenerator->testAnagram($input);
        //     //Assert
        //     $this->assertEquals("Please enter a word.", $result);
        // }

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

        // function test_testAnagram_lowercaseAndStringLength()
        // {
        //     //Arrange
        //     $test_AnagramGenerator = new AnagramGenerator;
        //     $input = "BrEaD";
        //     $second_input = "bread"
        //     //Act
        //     $result = $test_AnagramGenerator->testAnagram($input);
        //     //Assert
        //     $this->assertEquals(["bread", 5], $result);
        // }
        //
        // function test_testAnagram_compareLength()
        // {
        //     //Arrange
        //     $test_AnagramGenerator = new AnagramGenerator;
        //     $input = ["bread", "board"];
        //     //Act
        //     $result = $test_AnagramGenerator->testAnagram($input);
        //     //Assert
        //     $this->assertEquals(["bread", 5, true], $result);
        // }


    }
?>
