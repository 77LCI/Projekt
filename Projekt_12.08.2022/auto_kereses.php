<?php
	
	$auto_tipus=$_POST["auto_tipus"];
	$uz_tipus=$_POST["uz_tipus"];
	$meghajtas=$_POST["meghajtas"];
	$min_hp=$_POST["min_hp"];
	$ulesek=$_POST["ulesek"];
 $con = mysqli_connect("localhost", "root", "", "projekt");
	if ($result =mysqli_query($con, "SELECT `auto_nev` FROM auto_kereses WHERE `auto_tipus`='$auto_tipus' and `uz_tipus`='$uz_tipus' and `meghajtas`='$meghajtas' 
	and `min_hp`>='$min_hp' and `ulesek`='$ulesek'"))
	{
		
		
	  while ($row = mysqli_fetch_row($result))
	  {
		
		echo  $row[0];
		
	  }
	}
	
?>