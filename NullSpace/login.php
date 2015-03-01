<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SimpliHack";
//echo 'inside php';
//echo $_POST['name'];
//print_r($_POST);

$name=$_POST["user"];
$Password=$_POST["password"];
//echo "Inside php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT Username, Password FROM Tutors WHERE Username='$name' AND Password='$Password'";
$row1 = mysqli_query($conn,$sql1);
$array=mysqli_fetch_array($row1,MYSQLI_NUM);
$url="Location: profilet.php?NAME=".$array[0];
if (mysqli_num_rows($row1) > 0) header($url);

$sql1 = "SELECT Username, Password FROM Student WHERE Username='$name' AND Password='$Password'";
$row1 = mysqli_query($conn,$sql1);
if (mysqli_num_rows($row1) > 0) header("Location: profile.php");

$sql1 = "SELECT Username, Password FROM LowerStudent WHERE Username='$name' AND Password='$Password'";
$row1 = mysqli_query($conn,$sql1);
if (mysqli_num_rows($row1) > 0) header("Location: profilenew.php");
//else header("Location: ./signup/reg.html");

/*
$sql2 = "SELECT Username, Password FROM Student WHERE Username='$name' AND Password='$Password'";
$sql3 = "SELECT Username, Password FROM LowerStudent WHERE Username='$name' AND Password='$Password'";
$row1 = mysql_fetch_row(mysql_query($sql1));
$row2 = mysql_fetch_assoc(mysql_query($sql2));
$row3 = mysql_fetch_assoc(mysql_query($sql3));


if ($row1['Userame'] == $name && $row1['Password'] == $Password) {
    //echo "New record created successfully";
    header("Location: index1.html");
} 
else if ($row2['Userame'] == $name && $row2['Password'] == $Password) {
    //echo "New record created successfully";
    header("Location: index2.html");
}
else if ($row3['Userame'] == $name && $row3['Password'] == $Password) {
    //echo "New record created successfully";
    header("Location: index3.html");
}
else {
    echo "Error: " . $sql1. "<br>" . mysqli_error($conn);
    echo "Error: " . $sql2. "<br>" . mysqli_error($conn);
    echo "Error: " . $sql3. "<br>" . mysqli_error($conn);
}*/

mysqli_close($conn);
?>