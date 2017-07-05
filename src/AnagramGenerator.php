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
        function testAnagram($word)
        {
            if (!(ctype_alpha($word))) {
                return "Please enter a word.";
            } else {
                return strtolower($word);
            }
        }
    }
?>
