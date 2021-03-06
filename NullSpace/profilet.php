<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Null-Space</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
<!-- 
Genius Template 
http://www.templatemo.com/preview/templatemo_402_genius 
-->
    <meta name="author" content="templatemo">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- CSS Bootstrap & Custom -->
   
    <link href="./css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="./css/templatemo_style.css" rel="stylesheet" media="screen">
    
    
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->

</head>
<body>
    
    
    <div class="bg-image"></div>
    <div class="overlay-bg"></div>



    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                
                <li><a class="show-2" href="#"><i class="fa fa-group"></i>About Us</a></li>
                <li><a class="show-3" href="#"><i class="fa fa-briefcase"></i>Our Gallery</a></li>
                <li><a class="show-4" href="#"><i class="fa fa-cogs"></i>Services</a></li>
                <li><a class="show-5" href="#"><i class="fa fa-globe"></i>Contact Us</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

    <div class="main-content">
        <div class="container">
            <div class="row">

                <!-- Static Menu -->
                <div class="col-md-2 visible-md visible-lg">
                    <div class="main_menu">
                        <ul class="menu">
                            
                            <li><a class="show-2" href="#" data-toggle="tooltip" data-original-title="Profile"><i class="fa fa-user"></i></a></li>
                            <li><a class="show-3" href="#" data-toggle="tooltip" data-original-title="Teach"><i class="fa fa-briefcase"></i></a></li>
                            
                            
                        </ul>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-2 -->

                <!-- Begin Content -->
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="templatemo_logo">
                                <a href="#">
                                    <img src="images/templatemo_logo.png" alt="Genius">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->


                    <div id="menu-container">
                        
         

                        <div id="menu-2" class="content about-us">
                            <div class="page-header">
                                <h2 class="page-title">Profile</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-7"><p><?php
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
/*$sql1 = "SELECT LowerStudent.Name,LowerStudent.Skype_ID FROM Student,LowerStudent,student_teaches WHERE Student.Name='sharma' AND Student.Username=s_username AND s1_username=LowerStudent.Username";
$row1 = mysqli_query($conn,$sql1);
//$sql1 = "SELECT Student.Name FROM Student,Tutors,tutor_teaches WHERE Tutors.Name='sujay' AND Tutors.Username=t_username AND s_username=Student.Username";

while($row = mysqli_fetch_array($row1,MYSQLI_NUM)) {

       // Write the value of the column FirstName (which is now in the array $row)
      echo "Name:".$row[0] . "<br />"."SkypeID:". $row[1];

      }*/
$name=$_GET['NAME'];

                                        
                                        echo "NAME:".$name."</br>". "EMAIL:sujay@xyz.com"." </br>"."QUALIFICATION:BE"; ?></p>
                                        
                                    </div> <!-- /.col-md-7 -->
                                    <div class="col-md-5">
                                        <h3 class="widget-title">My performance</h3>
                                        <ul class="progess-bars">
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Course Overview 90%</div>
                                                </div>
                                                
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">My Rating 60%</div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div> <!-- /.col-md-5 -->
                                </div> <!-- /.row -->
                                
                            </div> <!-- /.content-inner -->
                        </div> <!-- /.about-us -->

                        
                        <div id="menu-3" class="content about-us">
                            <div class="page-header">
                                <h2 class="page-title">I Teach</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="widget-title">List of students</h3>
                                        <p><?php


$sql1 = "SELECT Student.Name,Student.Skype_ID FROM Student,Tutors,tutor_teaches WHERE Tutors.Name='$name' AND Student.Username=s_username AND t_username=Tutors.Username";
$row1 = mysqli_query($conn,$sql1);
//$sql1 = "SELECT Student.Name FROM Student,Tutors,tutor_teaches WHERE Tutors.Name='sujay' AND Tutors.Username=t_username AND s_username=Student.Username";

while($row = mysqli_fetch_array($row1,MYSQLI_NUM)) {

       // Write the value of the column FirstName (which is now in the array $row)
      echo "Name : ".$row[0] . "<br />"."SkypeID : ". $row[1]."<br />";

      }
//mysqli_close($conn);
//echo sql2json($sql1);
?>
</p>
<div id="SkypeButton_Call_Sujay_1">
 <script type="text/javascript">
    Skype.ui({
      "name": "call",
      "element": "SkypeButton_Call_Sujay_1",
      "participants": ["Sujay"],
      "imageSize": 32
    });
      </script>
</div>
                                    </div> <!-- /.col-md-7 -->
                                    <div class="col-md-5">
                                        <h3 class="widget-title">Student Performance</h3>
                                        <ul class="progess-bars">
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> Course Overview (sharma) 60%</div>
                                                </div>
                                                
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> Course Overview (sushanth) 80%</div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div> <!-- /.col-md-5 -->
                                </div> <!-- /.row -->
                                
                            </div> <!-- /.content-inner -->
                        </div> <!-- /.about-us -->

                        
                        
                        
                        

                    </div> <!-- /.content-holder -->
                
                </div> <!-- /.col-md-10 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-content -->

    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(16.832179,96.134976)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

    </script>
<!-- templatemo 402 genius -->
</body>
</html>