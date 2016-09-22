
	<!DOCTYPE html>
	<html>
	<head>
	
		<title>P2</title>
		<meta charset='utf8'>
		
				
		<?php  require 'generator.php'; ?>
		

		<link rel='stylesheet' href='' type='text/css'>
		
	</head>
	<body>
	
	<!-- input, ask user how many words should be in password--
		Text input drop down or slider, need to capture
		how many words, need checkboxes or radio buttons to indicate--
		if passwords should include symbols and what symbols
		Get is good for retrieving data, Post is good for security
		Forms need to submit to generator pages.-->
		<form action='index.php' method='GET'>
			Select  a number from 1 to 5:
		<input type='number' name='quantity' min='1' max='5'>
		<input type='checkbox' name='symbols' value='1'>
		Do you want to include symbols?
		<input type='submit' value='Press to enter!'>
		</form>
		
		
	
	</body>
	</html>

