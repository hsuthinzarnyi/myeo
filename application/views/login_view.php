<!DOCTYPE html>
<html>
<head>
	<title>
		Application Login Page
	</title>
</head>
<body>
<h1>Application Login Page</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('index.php/verifylogin'); ?>
<label for="username">Usrname:</label>
<input type="text" size="20" id="username" name="username"/>
<br/>
<label for="username">Password:</label>
<input type="password" size="20" id="password" name="password"/>
<br/>
<input type="submit" value="Login">
</form>
</body>
</html>