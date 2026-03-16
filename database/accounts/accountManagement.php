<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="#">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Account Management</title>

	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script>
	function enableBtn(){
		document.getElementById("button1").disabled = false;
	}
	</script></head>
<body bgcolor="#999999">
<img src="gdmanagerLogo2.png" alt="GD Manager Logo" /></br><form name="login-form" id="login-form" method="post" action="./accountManagement.php">
  <fieldset>
  <legend>Please login</legend>
  <dl>
	<dt><label title="Username">Username: </label></dt>
	<dd><input tabindex="1" accesskey="u" name="username" type="text" maxlength="30" id="username" /></dd>
  </dl>
  <dl>
	<dt><label title="Password">Password: </label></dt>
	<dd><input tabindex="2" accesskey="p" name="password" type="password" maxlength="20" id="password" /></dd> 
  </dl>

  <dl>
	<div class="g-recaptcha" data-sitekey="6LeLCGcUAAAAACTr37ion5rWw-yDlAuFxDJgRz6w" data-callback="enableBtn"></div>
		</br>
		<button type="submit" id="button1" name="cmdlogin" value="Login" style="height:50px; width:100px; font-size:1rem;">Login</button>
  </dl>
	  <ul>
    <li><a href="./register.php" title="Register">Register</a></li>
	<li><a href="./lostpassword.php" title="Lost Password">Forgot Password?</a></li>
	<li><a href="./lostusername.php" title="Lost Username">Forgot Username?</a></li>
	<li><a href="./resendActivation.php" title="Resend">Resend Activation</a></li>
	<li><a href="./invalidEmail.php" title="InvalidEmail">Invalid Email?</a></li>
  </ul>
  
  </fieldset></form><hr>
</body>

<script> document.getElementById("button1").disabled = true; </script>

</html>

