
<?php include "insertdata.php" ?>

<?php 
	
	$un=$_POST["EmailID"]; 
	$pass=$_POST["Password"];

	for ($i=0; $i<count($id); $i++) 
	{ 
		if ($un==$EmailID[$i] && $pass==$Password[$i]) 
		{
			$flag++;
			$flagname=$Name[$i];
			$flagsurname=$Surname[$i];
			$flagleaves=$leave[$i];
   			// $l=$l+1;
		}
	}
	if ($flag==0) 
	{
		echo "Enter Correct EmailID and password";
		
	}
	else 
	{
		if ($flagleaves==5) 
		{

		 	 		
				echo "You have exceed ur limit of 5 for leave application. ";

		  } 
		  else
		  {
				
		  		
		  		echo "welcome".$flagname." ".$flagsurname."<br>";
         	
         	


?>



			<h1><b><center>Leave Application</b></h1>
			Dear Principal,<br>
			Dr.Ramesh Wasappanavaraasappanavara,<br>
			Ramrao Adik Institue Of Technology,<br>
			Nerul.<br><br>
			<form action="successfull.php" method="post">
			Subject:
			<input type="text" name="subject">
			<br>

			<p>I am <input type="text" value="<?php echo $flagname." ".$flagsurname ?>" name="name"> writing this letter to apply for the <input type="text" name="reason"> leave of <input type="text" name="weeks"> weeks. I have not availed any of the leaves from past six months so I would like to apply for leave starting from date().
			<br>
			I will recover the studies after joining the college.<br></p>

			<p>Waiting for the confirmation of leave.</p>

			<p>Yours sincerely,<br>
			<input type="text" value="<?php echo $flagname." ".$flagsurname ?>">
			</P><br>
			<input type="text" value="<?php echo $un; ?>" style="display:none" name="username">	
			<input type="text" value="<?php echo $flagleaves; ?>" style="display:none" name="lev">

			<input type="submit" value="submit">
			</form>

<?php } 
}?>