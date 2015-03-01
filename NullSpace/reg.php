<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SimpliHack";
//echo 'inside php';
//echo $_POST['name'];
//print_r($_POST);


$name=$_POST["name"];
$com=$_POST["company"];
$uname=$_POST["username"];
$age=$_POST["age"];
$passw=$_POST["passw"];
$skype=$_POST["skype"];
$add=$_POST["address"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO LowerStudent (Name, Username, Password, Age, Address, Company, Skype_id)
VALUES ('$name', '$uname',$passw, $age, '$add', '$com', '$skype')";

if (mysqli_query($conn, $sql)) {
	$url="Location: https://www.google.com";
	header($url);
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>