<?php 
	
	
	$con = mysql_connect('localhost','root',''); 
	mysql_select_db("ashu",$con);
	$query="SELECT * from project";
	$result=mysql_query($query);
	$l=0;
	$i=0;
	$flag=0;
	while($row=mysql_fetch_array($result))
	{
		$id[$i]=$row["ID"];
		$EmailID[$i]=$row["EmailID"];
		$Name[$i]=$row["Name"];
		$Surname[$i]=$row["Surname"];
		$Password[$i]=$row["Password"];
		$leave[$i]=$row["leaves"];
		$i++;
	}


 ?>