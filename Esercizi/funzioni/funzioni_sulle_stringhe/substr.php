<?php


// substr(string $string, int $offset, ?int $length = null): string
// //offset è lo scostamento di quanto si deve spostare nella stringa
// //se offset dice 1 allora partirù da 1 
// //la stringa pippo che ha come sottostinga offset diveta ippo

// $rest = substr("abcdef", 0, -1);  // returns "abcde"
// $rest = substr("abcdef", 2, -1);  // returns "cde"
// $rest = substr("abcdef", 4, -4);  // returns ""; prior to PHP 8.0.0, false was returned
// $rest = substr("abcdef", -3, -1); // returns "de"
// //length invece 

// $rest = substr("abcdef", -1);    // returns "f"
// $rest = substr("abcdef", -2);    // returns "ef"
// $rest = substr("abcdef", -3, 1); // returns "d"
// //ofsett negativo invece parte dal fondo -1 parte dalla penultima letttera 
?>