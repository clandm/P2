
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset='utf8'>
			<title>P2</title>
		
		
				
			<?php  require 'generator.php'; ?>
			<link rel='stylesheet' href='styles.css'' type='text/css'>
		
		</head>
		<body>
		<div>
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
		Check this box if you want to include numbers:  <input type='checkbox' name='numbers' value='1'>  <br />
		Check this box if you want to include symbols:  <input type='checkbox' name='symbols' value='1'>  <br />
		Check this box if you want words with capital letters:<input type='checkbox' name='camelcase' value='1'>  <br /><br />
		<input type='submit' value='Press to enter!'>
		</form>
	</div>
		
	
	</body>
	</html>

