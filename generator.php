<?php

//need function to pick random words
//need function to pick random numbers
//need function to add camelcase
//need txt file for words
//need numbers to choose from
//need to accept settings from index file
//need to return password to be displayed

//accept setting from index file

$word_file = 'wordlist.txt';
$words = file($word_file, FILE_IGNORE_NEW_LINES );

//random word selection function
function new_word($newword){
	$index = array_rand($newword);	
	return $newword[$index];
}
$password = new_word($words) ."-". new_word($words);

?>



