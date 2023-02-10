<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}

//==verifica i lcontenuto
//===verifica il contenuto ed il tipo di dato siano uguali


//strpos(string $haystack, string $needle, int $offset = 0): int|false
//cerca l'ago nel pagliaio
?>