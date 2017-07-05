<?php
    require_once "src/AnagramGenerator.php";
    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_rejectNonAlpha()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "2@ra w3rd";
            //Act
            $result = $test_AnagramGenerator->rejectNonAlpha($input);
            //Assert
            $this->assertEquals("Please enter a word.", $result);
        }
    }
?>
