<?php include "insertdata.php" ?>



<!doctype>
<html>
<head><title>successfull</title>
<style>
	body{background: linear-gradient(white,yellow,orange);
		font-size: 30px;
		font-family: sans-serif;}

</style>




</head>
<body>

<?php 
	$query="UPDATE project SET leaves = '".($_POST["lev"]+1)."' WHERE project.EmailID = '".$_POST["username"]."'";
	
	$result=mysql_query($query);
 ?>

Your leave application letter is successfully submitted!
</body>
</html>