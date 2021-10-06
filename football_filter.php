<?php

$bigsky_schools = [
    'Eastern Washington University',
    'University of California, Davis',
    'University of Montana',
    'Montana State University',
    'Weber State University',
    'University of Idaho',
    'Portland State University',
    'Southern Utah University',
    'Sacramento State University',
    'University of Northern Colorado',
    'California Polytechnic State University',
    'Northern Arizon University',
    'Idaho State University'
];

$str = $_REQUEST["q"];
echo "<h2>Searching for '$str'...</h2>";

$schoolList = "";

if ($str !== "") {
    $str = strtolower($str);
    $len = strlen($str);
    foreach ($bigsky_schools as $school) {
        if (stristr($school, $str)) {
            if ($schoolList === "") {
                $schoolList = "<p>$school,</p>\n";
            } else {
                $schoolList .= "<p>$school</p>\n";
            }
        }
    }
}

echo $schoolList === "" ? "None found." : $schoolList;