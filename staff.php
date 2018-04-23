<?php
   include('session.php');
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
		<div class="row">
			<div class="col s12">
	  			<ul class="tabs tabs-fixed-width z-depth-1">
					<li class="tab col s3"><a href="#teaminfo">Team Information</a></li>
					<li class="tab col s3"><a href="#meetings">Schedule</a></li>
					<li class="tab col s3"><a href="#projects">Project</a></li>
					<li class="tab col s3"><a href="#resources">Resources</a></li>
					<li class="tab col s3"><a href="#assessment">Assessment</a></li>
					<li class="tab col s3"><a target="_self" href="logout.php">Logout</a></li>
	  			</ul>
			</div>
			<!--<div id="teamcreation" class="col s12 page">
				<div class="card-panel time">
					<p id="timer"></p>
				</div>
				<div class="card-panel" id="teamlist">
					<p>List of Teams</p>
				</div>
				<div id="tinfo">
					<p>Team Information</p>
					<a class="waves-effect waves-dark btn"><i class="material-icons right">person</i>Join Team</a>
				</div>
				<div id="applicants">
					<p>List of Applicants</p>
				</div>
			</div>-->
			<div id="teaminfo" class="col s12 page">
				<div id="ginfo
					<select>
						<?php
							//foreach ($teamStaffrow AS $row)
							//{
								//echo "<option value=\"" . $row['GroupId'] . "\">" . $row['GroupId'] . "</option>";
							//}
						?>
					</select>
					<a class="dropdown-button btn drop" href="#"" data-activates="dropdown1">Pick Team</a>
					<ul id="dropdown1" class="dropdown-content" onclick="teamDrop(this)">
						<?php
							//$i = 1;
							//foreach ($teamStaffrow AS $row)
							//{
							//	echo "<li><a href=\"#!\">" . $row['GroupId'] . "</a></li>";
							//	$i++;
							//}
						?>
						<li><a href="#">Group 1</a></li>
				  	</ul>
				  	<p style="font-size: 16px;">
				  		<br><br>
						Staff Member: <?php echo $TESTNAME . " " . $stafflname; ?><br><br>
				  		Team Name: <?php echo $studentgroupid; ?><br><br>
				  		Team Size: <?php echo $teamSize; ?><br><br>
				  		Project: <?php echo $projectName; ?><br><br>
				  		Average GPA: <?php echo $teamAvgGpa; ?><br><br>
				  		Supervisor: <?php echo $supervisorFirstName . " " . $supervisorLastName; ?><br><br>
				  		Tutor: <?php echo $tutorFirstName . " " . $tutorLastName; ?><br><br>
				  	</p>
				</div>
				<div id="member">
					<p style="font-size: 16px;">
						Name: Michael<br>
						Major: Computer Science<br>
						GPA: 1<br>
						Reflections:
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 5</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 7</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 9</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 11</a>
					</p>
				</div>
				<div id="member">
					<p style="font-size: 16px;">
						Name: Andrew<br>
						Major: Information Systems<br>
						GPA: 7<br>
						Reflections:
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 5</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 7</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 9</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 11</a>
					</p>
				</div>
				<div id="member">
					<p style="font-size: 16px;">
						Name: Phillip<br>
						Major: Information Systems<br>
						GPA: 7<br>
						Reflections:
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 5</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 7</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 9</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 11</a>
					</p>
				</div>
				<div id="member">
					<p style="font-size: 16px;">
						Name: Braydon<br>
						Major: Computer Science<br>
						GPA: 7<br>
						Reflections:
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 5</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 7</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 9</a>
						<a class="waves-effect waves-dark btn" style="background-color: #004477;"><i class="material-icons right">cloud_download</i>Week 11</a>
					</p>
				</div>
			</div>
			<div id="meetings" class="col s12 page">
				<p>Upcoming Schedule</p>
				<div id="meetinglist">
					<table class="striped centered responsive-table">
						<thead style="background-color: #004477; color: #FFFFFF;">
							<tr>
								<th>Monday 9/10</th>
								<th>Tuesday 10/10</th>
								<th>Wednesday 11/10</th>
								<th>Thursday 12/10</th>
								<th>Friday 13/10</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Meeting<br>Team 18<br>S513<br>10:30am</td>
								<td>Mid-Semester Presentation<br>Team 12<br>S504<br>1:45pm</td>
								<td>Mid-Semester Presentation<br>Team 16<br>S604<br>10:00am</td>
								<td>Meeting<br>Team 14<br>S514<br>9:00am</td>
								<td>Meeting<br>Team 11<br>S513<br>9:45am</td>
							</tr>
							<tr>
								<td>Meeting<br>Team 6<br>S513<br>10:45am</td>
								<td>Meeting<br>Team 6<br>S513<br>10:45am</td>
								<td>Mid-Semester Presentation<br>Team 12<br>S504<br>1:45pm</td>
								<td>Meeting<br>Team 6<br>S513<br>10:45am</td>
								<td>Mid-Semester Presentation<br>Team 16<br>S604<br>10:00am</td>
							</tr>
							<tr>
								<td>Mid-Semester Presentation<br>Team 12<br>S504<br>1:45pm</td>
								<td></td>
								<td>Meeting<br>Team 6<br>S513<br>10:45am</td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div id="projects" class="col s12 page">
				<p>Projects</p>
				<div id="proj">
					<table class="responsive-table centered">
						<thead style="background-color: #004477; color: #FFFFFF;">
							<th><a href="twps.html" style="color: white;">Traffic Wave Predictor</a></th>
							<th><a href="twps.html" style="color: white;">Capstone System</a></th>
							<th><a href="twps.html" style="color: white;">Social Networking Bot</a></th>
							<th><a href="twps.html" style="color: white;">Website Overhaul</a></th>
							<th><a href="twps.html" style="color: white;">Develop Android App</a></th>
						</thead>
						<tbody>
							<tr>
								<td>Traffic Wave Predictor Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
								<td>Capstone System Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
								<td>Social Networking Bot Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
								<td>Website Overhaul Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
								<td>Develop Android App Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
							</tr>
						</tbody>
						<thead style="background-color: #004477; color: #FFFFFF;">
							<th><a href="twps.html" style="color: white;">Traffic Wave Predictor 2</a></th>
							<th><a href="twps.html" style="color: white;">Capstone System 2</a></th>
							<th><a href="twps.html" style="color: white;">Social Networking Bot 2</a></th>
							<th><a href="twps.html" style="color: white;">Website Overhaul 2</a></th>
							<th><a href="twps.html" style="color: white;">Develop Android App 2</a></th>
						</thead>
						<tbody>
							<tr>
								<td>Traffic Wave Predictor 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
								<td>Capstone System 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
								<td>Social Networking Bot 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
								<td>Website Overhaul 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
								<td>Develop Android App 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Edit</a><br></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div id="resources" class="col s12 page">
				<p>Uploaded Resources</p>
				<div id="documents">
					<table class="responsive-table centered">
						<thead style="background-color: #004477; color: #FFFFFF;">
							<th>Resume Example</th>
							<th>Example Document</th>
							<th>Job Tips</th>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="images/document.png" height="56" width="56"><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Download</a><br><br>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<input type="file" name="uploaded_file"><br><br>
										<input name="resume" class="waves-effect waves-dark btn" value="upload" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
									</form>
								</td>
								<td>
									<img src="images/document.png" height="56" width="56"><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Download</a><br><br>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<input type="file" name="uploaded_file"><br><br>
										<input name="example" class="waves-effect waves-dark btn" value="upload" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
									</form>
								</td>
								<td>
									<img src="images/document.png" height="56" width="56"><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Download</a><br><br>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<input type="file" name="uploaded_file"><br><br>
										<input name="job" class="waves-effect waves-dark btn" value="upload" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
									</form>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div id="assessment" class="col s12 page">
				<p>Assessment</p>
				<div id="assesspage">
					<table class="responsive-table centered">
						<thead style="background-color: #004477; color: #FFFFFF;">
							<th>Assignment 1</th>
							<th>Assignment 2</th>
							<th>Assignment 3</th>
							<th>Assignment 4</th>
						</thead>
						<tbody>
							<tr>
								<td>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Task Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Criteria Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Example Submission</a><br><br>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<input type="file" name="uploaded_file"><br><br>
										<input name="asgn1task" class="waves-effect waves-dark btn" value="TS" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
										<input name="asgn1crs" class="waves-effect waves-dark btn" value="CS" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
										<input name="asgn1ex" class="waves-effect waves-dark btn" value="ES" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
									</form>
								</td>
								<td>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Task Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Criteria Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Example Submission</a><br><br>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<input type="file" name="uploaded_file"><br><br>
										<input name="asgn2task" class="waves-effect waves-dark btn" value="TS" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
										<input name="asgn2crs" class="waves-effect waves-dark btn" value="CS" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
										<input name="asgn2ex" class="waves-effect waves-dark btn" value="ES" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
									</form>
								</td>
								<td>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Task Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Criteria Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Example Submission</a><br><br>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<input type="file" name="uploaded_file"><br><br>
										<input name="asgn3task" class="waves-effect waves-dark btn" value="TS" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
										<input name="asgn3crs" class="waves-effect waves-dark btn" value="CS" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
										<input name="asgn3ex" class="waves-effect waves-dark btn" value="ES" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
									</form>
								</td>
								<td>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Task Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Criteria Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Example Submission</a><br><br>
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<input type="file" name="uploaded_file"><br><br>
										<input name="asgn4task" class="waves-effect waves-dark btn" value="TS" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
										<input name="asgn4crs" class="waves-effect waves-dark btn" value="CS" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
										<input name="asgn4ex" class="waves-effect waves-dark btn" value="ES" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
									</form>
								</td>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
  		</div>
	</body>
</html>