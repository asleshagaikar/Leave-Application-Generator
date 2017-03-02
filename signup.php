<!doctype>
<html>
<head><title>signup</title>
<style>
  body{font-family: sans-serif;
    font-size: 30px;}
a{font-family: sans-serif;
}
</style>
</head>
<body>
<?php
            $name = $_POST['Name'];
         $surname = $_POST['Surname'];
          $email = $_POST['EmailID'];
           $password = $_POST['Password'];
	$con = mysql_connect('localhost','root',''); 
	mysql_select_db("ashu",$con); 
    $query="SELECT * from project";
    $result=mysql_query($query);

    	
         
          $query = "INSERT INTO `project`( `Name`, `Surname`, `EmailID`, `Password`) VALUES ('$name','$surname','$email','$password')";
    	    
          $result = mysql_query($query);
    	    
    	    	 echo "Your registration is successfully completed";
                
    	        	  
 ?>
<br><br><a href="index.php">    Back to login page     </a>
</body>
</html>