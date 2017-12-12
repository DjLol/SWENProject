<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            
        }
        
        h4 {
            color: #ffbb2b;
        }
        
        ul {
            color: white;
            font-size: 13px;
        }
		
    </style>


</head>

<body>
    <div class="container">


        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
				    <li><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li class="active"><a href="room.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
		

		<center>
			<div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Room Category</h4>
				<hr>
                   <ul><a href="admin/addroom.php">Add Room Category</a></ul>
                   <ul><a href="show_room_cat.php">Show All Room Category</a></ul>
                   <ul><a href="show_room_cat.php">Edit Room Category</a></ul>          
            </div>
            <div class="col-md-3"></div>
        </div>
		
        
		
		<div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Inventory Manager</h4>
                <hr>               
                   <ul><a href="admin/additem.php">Add Inventory Category</a></ul>
                   <ul><a href="show_room_cat.php">Show All Item Category</a></ul>
                   <ul><a href="show_room_cat.php">Edit Item Category</a></ul>               
            </div>
            <div class="col-md-3"></div>
        </div>
		
		<div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Report Generator</h4>
                <hr>
                
                    <ul><a href="admin/addreport.php">Add Report</a></ul>
                    <ul><a href="show_room_cat.php">Show All Reports Category</a></ul>
                    <ul><a href="show_room_cat.php">Edit Reports Category</a></ul>
                
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Bookings</h4>
                <hr>
                    <ul><a href="room.php">Book Now</a></ul>
                    <ul><a href="show_all_room.php">Show All Booked Rooms</a></ul>
                    <ul><a href="show_all_room.php">Edit Booked Room</a></ul>        
            </div>
           <div class="col-md-3"></div>
        </div>
        
        
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Staff Manager</h4>
                <hr>             
                   <ul><a href="admin/registration.php">Add Staff</a></ul>
				   <ul><a href="admin/registration.php">Show All Staff List</a></ul> 
				   <ul><a href="admin/registration.php">Edit Staff Roles</a></ul> 				   
            </div>
            <div class="col-md-3"></div>
        </div>
		</center>








    </div>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>