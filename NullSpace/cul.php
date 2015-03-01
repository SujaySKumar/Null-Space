<?php
$servername = "localhost";
$username = "atadmin";
$password = "atadmin";
$dbname = "AT15";
//echo 'inside php';
//echo $_POST['name'];
//print_r($_POST);

$name=$_POST["name"];
$email=$_POST["emailid"];
$contact=$_POST["phone"];
$events=$_POST["events"];

$event1=0;
$event2=0;
$event3=0;
$event4=0;
$event5=0;
$event6=0;
$event7=0;

$eachevent=explode(",",$events);
for($x=0;$x<sizeof($eachevent);$x++){
	if($eachevent[$x]==="AT Got Talent")$event1=50;
	elseif($eachevent[$x]==="Battle of Bands")$event2=600;
	elseif($eachevent[$x]==="Indian Group Dance")$event3=500;
	elseif($eachevent[$x]==="Street Play")$event4=500;
	elseif($eachevent[$x]==="Street Dance")$event5=500;
	elseif($eachevent[$x]==="Western Acoustics")$event6=400;
	elseif($eachevent[$x]==="Western Group Dance")$event7=700;
}

$confcode=rand(1000,9999);
//echo $name;
//echo $email;
//echo $contact;
//echo $events;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO CulturalEvents (Name, EmailID, Contact, ConfirmationCode, ATGotTalent, BattleOfBands, IndianGroupDance, StreetPlay, StreetDance, WesternAcoustics, WesternGroupDance)
VALUES ('$name', '$email', '$contact', $confcode, $event1, $event2, $event3, $event4, $event5, $event6, $event7)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>