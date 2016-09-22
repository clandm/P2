<?php

//need function to pick random words - done
//need function to pick random numbers
//need function to add camelcase
//need txt file for words - done
//need numbers to choose from
//need to accept settings from index file
//need to return password to be displayed - done


$words = file('wordlist.txt', FILE_IGNORE_NEW_LINES );

//random word selection function with number of words
function new_word($newword, $number){
	$newarray = [];
	$newstring = "";	
	$dash = "-";
	foreach (range(0,$number) as $i){
		$index = array_rand($newword);	
		$newstring .=  $newword[$index] . $dash;
	}	
	return rtrim($newstring, "-");
}


$length = $_POST['quantity']-1;
$password = new_word($words, $length);


//function to add numbers in place of dash, probably if then with number line to choose from. 

?>



