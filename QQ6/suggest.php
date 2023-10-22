<?php
//people array @TODO - GET from DB
$people[]="Francis";
$people[]="Kosi";
$people[]="Lillain";
$people[]="Gabby";
$people[]="Amad";
$people[]="Diallo";
$people[]="Sancho";
$people[]="Amrabat";
$people[]="Rachael";
$people[]="Tosin";
$people[]="Tomiwa";
$people[]="Tife";
$people[]="Taye";
$people[]="Tayo";
$people[]="Tochi";
$people[]="Tamuno";
$people[]="Tejire";
$people[]="Taylor";


//GET query string

$q = $_REQUEST['q'];

$suggestion = "";

//Get Suggestions
if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
    }

}
}
echo $suggestion === "" ? "No Suggestion" : $suggestion;