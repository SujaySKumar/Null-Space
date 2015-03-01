<?php
$servername = "localhost";
$username = "atadmin";
$password = "atadmin";
$dbname = "SimpliHack";
//echo 'inside php';
//echo $_POST['name'];
//print_r($_POST);

$name=$_POST["user"];
$password=$_POST["password"];
echo "Inside php";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT Username, Password FROM Tutors WHERE Username=$name AND Password=$password";
$sql2 = "SELECT Username, Password FROM Student WHERE Username=$name AND Password=$password";
$sql3 = "SELECT Username, Password FROM LowerStudent WHERE Username=$name AND Password=$password";



if (mysqli_query($conn, $sql1)>0) {
    //echo "New record created successfully";
    header("Location: index1.html");
} 
else if (mysqli_query($conn, $sql2)>0) {
    //echo "New record created successfully";
    header("Location: index2.html");
}
else if (mysqli_query($conn, $sql3)>0) {
    //echo "New record created successfully";
    header("Location: index3.html");
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>