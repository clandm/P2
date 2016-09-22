
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
		<h1>Password Generator</h1>
		<h1>Here is Your Password: <?php echo $password; ?></h1>
		<h3><?php if ($_POST['quantity'] == 1){
			echo 'Your password is 1 word long.';
			}
			else {
				echo 'Your password is ' . $_POST['quantity'] . ' words long.';
			}
		?></h3>
		
		
		<div>
		<br />
		<form action='index.php' method='POST'>
			Select the number of words in your password, up to 25:
		<input type='number' name='quantity' min='1' max='25'><br />
		Check this box if you want to include numbers:  <input type='checkbox' name='symbols' value='1'>  <br />
		Check this box if you want to include symbols:  <input type='checkbox' name='symbols' value='1'>  <br />
		Check this box if you want words in camelCase:<input type='checkbox' name='camelCase' value='1'>  <br />
		<input type='submit' value='Press to enter!'>
		</form>
	</div>
		
	
	</body>
	</html>

