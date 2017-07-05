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

        function test_testAnagram_lowercase()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "Bread";
            //Act
            $result = $test_AnagramGenerator->testAnagram($input);
            //Assert
            $this->assertEquals("bread", $result);
        }
    }
?>
