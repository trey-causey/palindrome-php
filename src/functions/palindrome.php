<?php
require __DIR__ . '/../../vendor/autoload.php';

class WordAlgs
{

    function palindromeFinderWeb($input)
    {
        $text = $input;
        $members = array();
        $chars = array();

        $sentences[] = ($text);

        foreach ($sentences as $sentence) {

            $words = explode(" ", strtolower($text));

            foreach($words as $word) {
                $temp = preg_replace("#[[:punct:]]#", "", $word);

                if(strlen($temp) > 1) {
                    $revTemp = strrev($temp);
                    if (strcmp($temp, $revTemp) == 0) {
                        echo "found a match for: " . $temp . "<br>";
                    }
                }
            }


        }

    }

    function palindromeFinderFile($input)
    {
        $file = fopen($input, "r");
        $members = array();
        $chars = array();

        while(!feof($file)) {

            $sentences[] = fgets($file);

        }

        fclose($file);
        foreach ($sentences as $sentence) {

            $words = explode(" ", strtolower($sentence));

            foreach($words as $word) {
                $temp = preg_replace("#[[:punct:]]#", "", $word);

                if(strlen($temp) > 1) {
                    $revTemp = strrev($temp);
                    if (strcmp($temp, $revTemp) == 0) {
                        echo "found a match for: " . $temp . "<br>";
                    }
                }
            }


        }

    }
}