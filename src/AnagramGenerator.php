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
        function isAnagram($inputOne, $inputTwo)
        {
            if ($inputOne == $inputTwo)
                return true;
        }



        // function isAlpha($val)
        // {
        //     if (!(ctype_alpha($val))) {
        //         return "Please enter a word.";
        // }
        //
        // function testAnagram($word, $test_case)
        // {
        //     if (!(isAlpha($word))) && (!(isAlpha($test_case))) {
        //         return "Please enter a word.";
        //
        // function testAnagram($word, $test_case)
        // {
        //     if (!(ctype_alpha($word))) {
        //         return "Please enter a word.";
        //     } else {
        //         $lowercase_word = strtolower($word);
        //         $word_length = strlen($word);
        //         $result_array = [$lowercase_word, $word_length];
        //         return $result_array;
        //     }
        // }
    }
?>
