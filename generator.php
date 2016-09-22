<?php

$words = file('wordlist.txt', FILE_IGNORE_NEW_LINES );

//function to put capital letters on words
function camelCase($string, $delimiter){
	$exstring = explode($delimiter, $string);
	$exstringcam = array_map('ucwords', $exstring);
	return implode($delimiter, $exstringcam);
}
//random word selection function with number of words
function new_word($newword, $number){
	
	$symbols = '!@#$%^&*?';
	$newstring = "";	
	$char = "";
	$use_numbers = isset($_POST['numbers']);
	$use_characters = isset($_POST['symbols']);
	
	
	if($use_numbers == 1 && $use_characters != 1) { // functoin for this
		foreach (range(0,$number) as $i){
		$char = rand(0,9);
		}
	}
	elseif($use_numbers == 1 && $use_characters == 1) {
		$char = $symbols[rand(0, strlen($symbols)-1)] . rand(0,9);
	}
	elseif($use_numbers != 1 && $use_characters == 1) {
		$char = $symbols[rand(0, strlen($symbols)-1)];
	}
	else {
		$char = "";
	}
	
	
	foreach (range(0,$number) as $i){
		$index = array_rand($newword);	
		$newstring .=  $newword[$index] . "-";
		
	}
	
	return rtrim($newstring,'-') . $char;
	
}

$use_camelCase = isset($_POST['camelcase']);
if($use_camelCase == 1){
		$password = camelCase(new_word($words,$_POST['quantity']-1), '-');
	}	
else {
	$password = new_word($words,$_POST['quantity']-1 );
}
$length = $_POST['quantity']-1;

?>



