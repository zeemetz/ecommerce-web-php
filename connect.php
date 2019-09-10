<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manclothing";

// $servername = "mysql.idhostinger.com";
// $username = "u512248242_root";
// $password = "rootroot";
// $dbname = "u512248242_mcl";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 

<?php 
	function query($conn,$sql)
	{
		$arr;
		$index = 0;
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $arr[$index]=$row;
		        $index++;
		    }
		} else {
		    $arr = null;
		}

		// mysqli_close($conn);
		return $arr;
	}

	function update($conn,$sql)
	{
		$result = false;
		if (mysqli_query($conn,$sql)) {
			$result = true;
		}
		return $result;
	}
 ?>