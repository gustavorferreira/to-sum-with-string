<?php

function StringChallenge($str) {
    $patternToEquation = array(
        "/zero/i",
        "/one/i",
        "/two/i",
        "/three/i",
        "/four/i",
        "/five/i",
        "/six/i",
        "/seven/i",
        "/eight/i",
        "/nine/i",
        "/minus/i",
        "/plus/i",
    );
    $replacementToEquation = array(0,1,2,3,4,5,6,7,8,9,"-","+");

    $patternToText = array(
        "/[0]+/",
        "/[1]+/",
        "/[2]+/",
        "/[3]+/",
        "/[4]+/",
        "/[5]+/",
        "/[6]+/",
        "/[7]+/",
        "/[8]+/",
        "/[9]+/",
    );
    $replacementToText = array("zero","one","two","three","four","five","six","seven","eight","nine");

    $turnIntoEquation  = preg_replace($patternToEquation,$replacementToEquation,$str);
    $totalEquation  = eval('return '.$turnIntoEquation.';');
    $numberInText = preg_replace($patternToText, $replacementToText, $totalEquation);

    if ($totalEquation < 0) {
        $numberInText = "negative";
    }

    return $numberInText;
}

// keep this function call here
//echo StringChallenge(fgets(fopen('php://stdin', 'r')));

echo StringChallenge("foursixminustwotwoplusonezero")
//fiveminusthreenine
//foursixminustwotwoplusonezero

?>