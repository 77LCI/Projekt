<?php
	
	$email=$_POST["email"];
	$psw=$_POST["psw"];
$con = mysqli_connect("localhost", "root", "", "projekt");
	if ($result =mysqli_query($con, "SELECT email FROM felhasznalok_tablazat WHERE `email`='$email'"))
	{
		
		$letezik = mysqli_fetch_all($result);
		if(count($letezik)>0)
		{
				
		echo "Ez a felhasználó már létezik";
			
		}
		else
		{
		mysqli_query($con, "INSERT INTO `felhasznalok_tablazat`(email, password) VALUES ('$email','$psw')");
		}
	}
	
?>