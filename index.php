<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
body{background-image: url("back.jpg");
color: white;
font-family: sans-serif;
text-align: center;}
h1{text-align: center;
	color: white;
font-size: 30px;
font-family: algerian;}
div{width: 100%;
	border: 2px solid yellow;
text-align: center;}
form{color: white;
     font-family: sans-serif;
      text-align: center;}
 a{color: yellow;
 	font-family: sans-serif;} 
</style>
</head>
<body>
<h1>Leave Application Generator</h1>
<div>
	<form name="f1" method="post" action="leaveletter.php">
		Enter Email-ID: <input type="text" name="EmailID">


		<br><br><br>
		Enter password: <input type="password" name="Password">
		<br><br><br>
		<input type="submit" name="submit" value="Login"><br><br><br>		


	</form>
</div><br><br>
No account?<a href="register.php">  REGISTER HERE!  </a>
</body>
</html>