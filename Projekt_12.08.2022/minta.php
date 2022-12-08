<html>
	<head>
	</head>
	<body>
<?php
	$mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_db = "diak";
	
	$con = mysqli_connect("localhost", "root", "", $mysql_db);
	if ($result = mysqli_query($con, "SELECT * FROM diak")) {
	  echo "A tabla tartalma: " ;
	  echo "<table border=1>
		<tr>
			<th>Igazolvany szam</th>
			<th>Egyetemista neve</th>
			<th>Csoport</th>
			<th>Jegy</th>
			<th>Hianyzasok</th>
		</tr>";
	  while ($row = mysqli_fetch_row($result))
	  {
		echo "<tr>";
		echo " <td>" . $row[0] . "</td>";
		echo " <td>" . $row[1]. "</td>";
		echo " <td>" . $row[2] . "</td>";
		echo " <td>" . $row[3] . "</td>";
		echo " <td>" . $row[4] . "</td>";
		echo "</tr>";
	  }
		echo "</table>";
	  
	  mysqli_free_result($result);
	}
?>
<a href="diak.php"><input  type="submit"  value="vissza " ></input></a> 
</body>
</html>