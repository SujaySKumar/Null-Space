<html>
<head>
<body>
<button>Click to get sujay data</button>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SimpliHack";


//$name=$_POST['name'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT Username, Password FROM Tutors WHERE Username='sujay'";
$row1 = mysqli_query($conn,$sql1);

while($row = mysqli_fetch_array($row1,MYSQLI_NUM)) {

	   // Write the value of the column FirstName (which is now in the array $row)
	  echo $row[1] . "<br />";

	  }
mysqli_close($conn);
//echo sql2json($sql1);
?>
</body>
</head>
</html>