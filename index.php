<?php

// Sn0wlink IT
// David Collins-Cubitt
// Hex Translation Library
// 2019 GPL v3 Licence

// Sets example string
$examplestr = "NERD";
texttohex($examplestr);
echo '<br />';
hextotext($examplestr);

// hex to text function name
function hextotext ($input) {

// Translation Lookup Table Numerical
$input = str_replace("30", "0 ", "$input");
$input = str_replace("31", "1 ", "$input");
$input = str_replace("32", "2 ", "$input");
$input = str_replace("33", "3 ", "$input");
$input = str_replace("34", "4 ", "$input");
$input = str_replace("35", "5 ", "$input");
$input = str_replace("36", "6 ", "$input");
$input = str_replace("37", "7 ", "$input");
$input = str_replace("38", "8 ", "$input");
$input = str_replace("39", "9 ", "$input");

// Translation Lookup Table Alphabet
$input = str_replace("61", "a ", "$input");
$input = str_replace("62", "b ", "$input");
$input = str_replace("63", "c ", "$input");
$input = str_replace("64", "d ", "$input");
$input = str_replace("65", "e ", "$input");
$input = str_replace("66", "f ", "$input");
$input = str_replace("67", "g ", "$input");
$input = str_replace("68", "h ", "$input");
$input = str_replace("69", "I ", "$input");
$input = str_replace("6A", "j ", "$input");
$input = str_replace("6B", "k ", "$input");
$input = str_replace("6C", "l ", "$input");
$input = str_replace("6D", "m ", "$input");
$input = str_replace("6E", "n ", "$input");
$input = str_replace("6F", "o ", "$input");
$input = str_replace("70", "p ", "$input");
$input = str_replace("71", "q ", "$input");
$input = str_replace("72", "r ", "$input");
$input = str_replace("73", "s ", "$input");
$input = str_replace("74", "t ", "$input");
$input = str_replace("75", "u ", "$input");
$input = str_replace("76", "v ", "$input");
$input = str_replace("77", "w ", "$input");
$input = str_replace("78", "x ", "$input");
$input = str_replace("79", "y ", "$input");
$input = str_replace("7A", "z ", "$input");

$input = str_replace("41", "A", "$input");
$input = str_replace("42", "B", "$input");
$input = str_replace("43", "C", "$input");
$input = str_replace("44", "D", "$input");
$input = str_replace("45", "E", "$input");
$input = str_replace("46", "F", "$input");
$input = str_replace("47", "G", "$input");
$input = str_replace("48", "H", "$input");
$input = str_replace("49", "I", "$input");
$input = str_replace("4A", "J", "$input");
$input = str_replace("4B", "K", "$input");
$input = str_replace("4C", "L", "$input");
$input = str_replace("4D", "M", "$input");
$input = str_replace("4E", "N", "$input");
$input = str_replace("4F", "O", "$input");
$input = str_replace("50", "P", "$input");
$input = str_replace("51", "Q", "$input");
$input = str_replace("52", "R", "$input");
$input = str_replace("53", "S", "$input");
$input = str_replace("54", "T", "$input");
$input = str_replace("55", "U", "$input");
$input = str_replace("56", "V", "$input");
$input = str_replace("57", "W", "$input");
$input = str_replace("58", "X", "$input");
$input = str_replace("59", "Y", "$input");
$input = str_replace("5A", "Z", "$input");

echo $input;

}

// hex to text function name
function texttohex ($input) {

// Translation Lookup Table Numerical
$input = str_replace("0", "30 ", "$input");
$input = str_replace("1", "31 ", "$input");
$input = str_replace("2", "32 ", "$input");
$input = str_replace("3", "33 ", "$input");
$input = str_replace("4", "34 ", "$input");
$input = str_replace("5", "35 ", "$input");
$input = str_replace("6", "36 ", "$input");
$input = str_replace("7", "37 ", "$input");
$input = str_replace("8", "38 ", "$input");
$input = str_replace("9", "39 ", "$input");


// Translation Lookup Table Alphabet
$input = str_replace("a", "61 ", "$input");
$input = str_replace("b", "62 ", "$input");
$input = str_replace("c", "63 ", "$input");
$input = str_replace("d", "64 ", "$input");
$input = str_replace("e", "65 ", "$input");
$input = str_replace("f", "66 ", "$input");
$input = str_replace("g", "67 ", "$input");
$input = str_replace("h", "68 ", "$input");
$input = str_replace("I", "69 ", "$input");
$input = str_replace("j", "6A ", "$input");
$input = str_replace("k", "6B ", "$input");
$input = str_replace("l", "6C ", "$input");
$input = str_replace("m", "6D ", "$input");
$input = str_replace("n", "6E ", "$input");
$input = str_replace("o", "6F ", "$input");
$input = str_replace("p", "70 ", "$input");
$input = str_replace("q", "71 ", "$input");
$input = str_replace("r", "72 ", "$input");
$input = str_replace("s", "73 ", "$input");
$input = str_replace("t", "74 ", "$input");
$input = str_replace("u", "75 ", "$input");
$input = str_replace("v", "76 ", "$input");
$input = str_replace("w", "77 ", "$input");
$input = str_replace("x", "78 ", "$input");
$input = str_replace("y", "79 ", "$input");
$input = str_replace("z", "7A ", "$input");

$input = str_replace("A", "41 ", "$input");
$input = str_replace("B", "42 ", "$input");
$input = str_replace("C", "43 ", "$input");
$input = str_replace("D", "44 ", "$input");
$input = str_replace("E", "45 ", "$input");
$input = str_replace("F", "46 ", "$input");
$input = str_replace("G", "47 ", "$input");
$input = str_replace("H", "48 ", "$input");
$input = str_replace("I", "49 ", "$input");
$input = str_replace("J", "4A ", "$input");
$input = str_replace("K", "4B ", "$input");
$input = str_replace("L", "4C ", "$input");
$input = str_replace("M", "4D ", "$input");
$input = str_replace("N", "4E ", "$input");
$input = str_replace("O", "4F ", "$input");
$input = str_replace("P", "50 ", "$input");
$input = str_replace("Q", "51 ", "$input");
$input = str_replace("R", "52 ", "$input");
$input = str_replace("S", "53 ", "$input");
$input = str_replace("T", "54 ", "$input");
$input = str_replace("U", "55 ", "$input");
$input = str_replace("V", "56 ", "$input");
$input = str_replace("W", "57 ", "$input");
$input = str_replace("X", "58 ", "$input");
$input = str_replace("Y", "59 ", "$input");
$input = str_replace("Z", "5A ", "$input");

echo $input;

}



?>
