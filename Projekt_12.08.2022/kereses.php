<?php
	
	$kereses=$_POST["search"];
	$con = mysqli_connect("localhost", "root", "", "projekt");
	if ($kereses=="Mazda" or $kereses=="mazda" or $kereses=="MAZDA")
	{
		header('Location: http://localhost/Mazda.html');
	}
	else if ($kereses=="Audi" or $kereses=="audi" or $kereses=="AUDI")
	{
		header('Location: http://localhost/Audi.html');
	}
	else if ($kereses=="BMW" or $kereses=="bmw")
	{
		header('Location: http://localhost/Bmw.html');
	}
	else if ($kereses=="Mercedes" or $kereses=="mercedes" or $kereses=="merci" or $kereses=="MERCEDES")
	{
		header('Location: https://www.mercedes-benz.ro/');
	}
	else
	{
		header('Location: http://localhost/fooldal.html');
	}
	
?>