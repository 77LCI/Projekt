<?php
	
	$email=$_POST["email"];
	$psw=$_POST["psw"];
	$con = mysqli_connect("localhost", "root", "", "projekt");
	if ($result =mysqli_query($con, "SELECT * FROM felhasznalok_tablazat WHERE email='$email' AND password='$psw'"))
	{
		
		$letezik = mysqli_fetch_all($result);
		if(count($letezik)>0)
		{
				
		header('Location: http://localhost/fooldal.html');
			
		}
		else
		{
		echo "Nem létező felhasználó";
		}
		
	}
	
?>