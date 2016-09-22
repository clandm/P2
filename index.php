
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset='utf8'>
			<title>P2</title>
		
		
				
			<?php  require 'generator.php'; ?>
			<link rel='stylesheet' href='' type='text/css'>
		
		</head>
		<body>
	
	<!-- input, ask user how many words should be in password--
		Text input drop down or slider, need to capture
		how many words, need checkboxes or radio buttons to indicate--
		if passwords should include symbols and what symbols
		Get is good for retrieving data, Post is good for security
		Forms need to submit to generator pages.use push to push-->
		<h1>Here is Your Password: <?php echo $password; ?></h1>
		
		<form action='index.php' method='POST'>
			Select the number of words in your password:
		<input type='number' name='quantity' min='1' max='25'><br />
		<input type='checkbox' name='symbols' value='1'> Do you want to include numbers? <br />
		<input type='checkbox' name='symbols' value='1'> Do you want to include symbols? <br />
		<input type='checkbox' name='camelCase' value='1'> Do you want the words to be camelCase? <br />
		<input type='submit' value='Press to enter!'>
		</form>
		
		
	
	</body>
	</html>

