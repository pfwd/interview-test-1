<?php
// Q1: if $string = "floccinaucinihilipilification";
// write some code that will output how many occurrences of each character this string contains.

$str = 'floccinaucinihilipilification';

foreach (count_chars($str, 1) as $i => $count) {
    echo 'There were '.$count.' occurrences of '.chr($i).' in the given string. </br>';
}

/**
 * There were 2 occurrences of a in the given string.
 * There were 4 occurrences of c in the given string.
 * There were 2 occurrences of f in the given string.
 * There were 1 occurrences of h in the given string.
 * There were 9 occurrences of i in the given string.
 * There were 3 occurrences of l in the given string.
 * There were 3 occurrences of n in the given string.
 * There were 2 occurrences of o in the given string.
 * There were 1 occurrences of p in the given string.
 * There were 1 occurrences of t in the given string.
 * There were 1 occurrences of u in the given string.
 */