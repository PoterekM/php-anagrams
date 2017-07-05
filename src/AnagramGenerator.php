<!-- reject non-alpha -->
<!-- lowercase uppercase letters -->
<!-- recognize length -->
<!-- compare length -->
<!-- compare letters (no repeats)-->
<!-- compare letters (with repeats) -->
<!-- recognize single-letter anagram -->
<!-- recognize multi-letter anagram -->

<?php
    class AnagramGenerator
    {
        function wordLength($word)
        {
            return strlen($word);
        }

        function testAnagram($word)
        {
            if (!(ctype_alpha($word))) {
                return "Please enter a word.";
            } else {
                $lowercase_word = strtolower($word);
                $word_length = strlen($word);
                $result_array = [$lowercase_word, $word_length];
                return $result_array;
            }
        }
    }
?>
