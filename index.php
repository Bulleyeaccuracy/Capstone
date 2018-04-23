<?php
   include("config.php");
   session_start();

   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $studentsql = "SELECT StudentNum FROM student WHERE EmailAddress = '$myusername' and Password = '$mypassword'";
	  $staffsql = "SELECT StaffId FROM staff WHERE EmailAddress = '$myusername' and Password = '$mypassword'";
      $studentresult = mysqli_query($db,$studentsql);
	  $staffresult = mysqli_query($db,$staffsql);
      $studentrow = mysqli_fetch_array($studentresult,MYSQLI_ASSOC);
	  $staffrow = mysqli_fetch_array($staffresult,MYSQLI_ASSOC);
      $studentactive = $studentrow['active'];
	  $staffactive = $staffrow['active'];
      
      $studentcount = mysqli_num_rows($studentresult);
	  $staffcount = mysqli_num_rows($staffresult);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($studentcount == 1) {
         $_SESSION['login_user'] = $studentrow['StudentNum'];
         
         header("location: students.php");
	  }else if($staffcount == 1) {
		  $_SESSION['login_user'] = $staffrow['StaffId'];
		  
		  header("location: staff.php");
	  }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Capstone</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      	<script type="text/javascript" src="js/materialize.min.js"></script>
		<script src="js/my.js"></script>
	</head>
	<body>
		<div class="row login">
			<form class="col" method="POST">
				<div class="row">
					<p style="text-align: center; color: red; font-size: 12px;"><?= $error ?></p>
					<div class="input-field col" style="width: 100%; background-color: #E0E0E0;">
						<input id="username" name="uname" type="text" class="validate" required>
						<label for="username">Student/Staff ID</label>
					</div>
					<div class="input-field col" style="width: 100%; background-color: #E0E0E0;">
						<input id="password" name="psw" type="password" class="validate" required>
						<label for="password">Password</label>
					</div>
					<button class="btn waves-effect waves-light" type="submit" name="action" style="background-color:#004477;">Login<i class="material-icons right">send</i></button>
				</div>
			</form>
		</div>
	</body>
</html>