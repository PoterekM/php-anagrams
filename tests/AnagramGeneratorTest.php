<?php
    require_once "src/AnagramGenerator.php";
    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_isAnagram_split()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_word = "kumbaya";
            //Act
            $result = $test_AnagramGenerator->isAnagram($input_word);
            //Assert
            $this->assertEquals(["k", "u", "m", "b", "a", "y", "a"], $result);
        }

    }
?>
