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
<img src="gdmanagerLogo2.png" alt="GD Manager Logo" /></br><form action="./resendActivation.php" method="post" enctype="multipart/form-data>
	<fieldset><legend>Activate account</legend>
   <dl>
	<dt><label for="email">Email:</label></dt>
	<dd><input name="email" type="text" id="email" maxlength="75">
	</dd>
  </dl>
   <dl>
	<div class="g-recaptcha" data-sitekey="6LeLCGcUAAAAACTr37ion5rWw-yDlAuFxDJgRz6w" data-callback="enableBtn"></div>
		</br>
		<button type="submit" id="button1" name="resend" value="resend" style="height:50px; width:100px; font-size:1rem;">Submit</button>
  </dl>
  </fieldset>
</form>
<form action="./accountManagement.php" method="post">
<input name="back" type="submit" value="Back">
</form>
<hr>
</body>

<script> document.getElementById("button1").disabled = true; </script>

</html>

