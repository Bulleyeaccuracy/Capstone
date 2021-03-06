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
					<li class="tab col s3"><a href="#reflection">Reflection</a></li>
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
				<div id="ginfo">
				  	<p style="font-size: 16px;">
				  		Your Name: <?php echo $studentfname . " " . $studentlname; ?><br><br>
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
						Name: <?php echo $studentfname . " " . $studentlname ?><br>
						Major: <?php echo $studentMajor ?><br>
						GPA: <?php echo $studentGPA ?><br>
					</p>
					<div class='switch' style='width: 140px; margin: 0 auto;'><label>Private<input <?php echo $studentPrivacy ?> type='checkbox'><span class='lever'></span>Public</label></div>
				</div>
				<?php
					foreach ($teamList AS $row)
					{
						if ($row['StudentNum'] == $studentNum) continue;
						
						echo "<div id='member'>";
						echo "<p style='font-size: 16px;'>";
						echo "Name: " . $row['FirstName'] . " " . $row['LastName'] . "<br>";
						echo "Major: " . $row['Major'] . "<br>";
						echo "GPA: " . $row['GPA'] . "<br>";
						echo "</p>";
						echo "</div>";
					}
				?>
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
								<td>Meeting<br>S513<br>10:30am</td>
								<td></td>
								<td><a class="waves-effect waves-dark btn" style="background-color: #004477;">Register</a></td>
								<td></td>
								<td>Final Report Submission<br>11:59pm</td>
							</tr>
							<tr>
								<td>Meeting<br>S513<br>11:15am</td>
								<td></td>
								<td></td>
								<td></td>
								<td><a class="waves-effect waves-dark btn" style="background-color: #004477;">Register</a></td>
							</tr>
							<tr>
								<td><a class="waves-effect waves-dark btn" style="background-color: #004477;">Register</a></td>
								<td></td>
								<td></td>
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
								<td>Traffic Wave Predictor Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
								<td>Capstone System Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
								<td>Social Networking Bot Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
								<td>Website Overhaul Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
								<td>Develop Android App Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
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
								<td>Traffic Wave Predictor 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
								<td>Capstone System 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
								<td>Social Networking Bot 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply<Apply/a><br></td>
								<td>Website Overhaul 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
								<td>Develop Android App 2 Summary<br><br><a class="waves-effect waves-dark btn" style="background-color: #004477;">Apply</a><br></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div id="reflection" class="col s12 page">
				<p>Reflection</p>
				<div id="reflect">
					<div class="row">
						<form class="col s12" action="#" style="text-align: center;">
							<p style="font-size: 14px;">
								In this section, please evaluate the work that you have done since the last meeting with your tutor. Discuss your successes and difficulties. This reflection can include aspects from technical work, project management and workload allocation, ethics, communication, etc.
							</p>
							<p style="text-align: center;">Self-Reflection</p>
							<p style="width: 335px; margin: 0 auto;">
								<input name="grade" type="radio" id="grade1"/>
								<label for="grade1">1</label>
								<input name="grade" type="radio" id="grade2"/>
								<label for="grade2">2</label>
								<input name="grade" type="radio" id="grade3"/>
								<label for="grade3">3</label>
								<input name="grade" type="radio" id="grade4"/>
								<label for="grade4">4</label>
								<input name="grade" type="radio" id="grade5"/>
								<label for="grade5">5</label>
								<input name="grade" type="radio" id="grade6"/>
								<label for="grade6">6</label>
								<input name="grade" type="radio" id="grade7"/>
								<label for="grade7">7</label>
							</p>
							<div class="row">
								<div class="input-field col s6" style="width: 100%;">
									<textarea id="3tasks" class="materialize-textarea"></textarea>
									<label for="3tasks">Reflect on how you delivered on your three main tasks for the last fortnight</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6" style="width: 100%;">
									<textarea id="3nexttasks" class="materialize-textarea"></textarea>
									<label for="3nexttasks">Detail your three main tasks for the next fortnight</label>
								</div>
							</div>
							<p style="text-align: center;">Team Reflection</p>
							<p style="text-align: center;">Michael</p>
							<p style="width: 335px; margin: 0 auto;">
								<input name="1grade" type="radio" id="1grade1"/>
								<label for="1grade1">1</label>
								<input name="1grade" type="radio" id="1grade2"/>
								<label for="1grade2">2</label>
								<input name="1grade" type="radio" id="1grade3"/>
								<label for="1grade3">3</label>
								<input name="1grade" type="radio" id="1grade4"/>
								<label for="1grade4">4</label>
								<input name="1grade" type="radio" id="1grade5"/>
								<label for="1grade5">5</label>
								<input name="1grade" type="radio" id="1grade6"/>
								<label for="1grade6">6</label>
								<input name="1grade" type="radio" id="1grade7"/>
								<label for="1grade7">7</label>
							</p>
							<div class="row">
								<div class="input-field col s6" style="width: 100%;">
									<textarea id="1eval" class="materialize-textarea"></textarea>
									<label for="1eval">Evaluation of contribution and performance</label>
								</div>
							</div>
							<p style="text-align: center;">Andrew</p>
							<p style="width: 335px; margin: 0 auto;">
								<input name="2grade" type="radio" id="2grade1"/>
								<label for="2grade1">1</label>
								<input name="2grade" type="radio" id="2grade2"/>
								<label for="2grade2">2</label>
								<input name="2grade" type="radio" id="2grade3"/>
								<label for="2grade3">3</label>
								<input name="2grade" type="radio" id="2grade4"/>
								<label for="2grade4">4</label>
								<input name="2grade" type="radio" id="2grade5"/>
								<label for="2grade5">5</label>
								<input name="2grade" type="radio" id="2grade6"/>
								<label for="2grade6">6</label>
								<input name="2grade" type="radio" id="2grade7"/>
								<label for="2grade7">7</label>
							</p>
							<div class="row">
								<div class="input-field col s6" style="width: 100%;">
									<textarea id="2eval" class="materialize-textarea"></textarea>
									<label for="2eval">Evaluation of contribution and performance</label>
								</div>
							</div>
							<p style="text-align: center;">Phillip</p>
							<p style="width: 335px; margin: 0 auto;">
								<input name="3grade" type="radio" id="3grade1"/>
								<label for="3grade1">1</label>
								<input name="3grade" type="radio" id="3grade2"/>
								<label for="3grade2">2</label>
								<input name="3grade" type="radio" id="3grade3"/>
								<label for="3grade3">3</label>
								<input name="3grade" type="radio" id="3grade4"/>
								<label for="3grade4">4</label>
								<input name="3grade" type="radio" id="3grade5"/>
								<label for="3grade5">5</label>
								<input name="3grade" type="radio" id="3grade6"/>
								<label for="3grade6">6</label>
								<input name="3grade" type="radio" id="3grade7"/>
								<label for="3grade7">7</label>
							</p>
							<div class="row">
								<div class="input-field col s6" style="width: 100%;">
									<textarea id="3eval" class="materialize-textarea"></textarea>
									<label for="3eval">Evaluation of contribution and performance</label>
								</div>
							</div>
							<input class="waves-effect waves-dark btn" type="submit" style="background-color: #004477; color: #FFFFFF;"/>
						</form>
					</div>
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
								</td>
								<td>
									<img src="images/document.png" height="56" width="56"><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Download</a><br><br>
								</td>
								<td>
									<img src="images/document.png" height="56" width="56"><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Download</a><br><br>
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
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_upload</i>Submit</a><br><br>
								</td>
								<td>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Task Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Criteria Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Example Submission</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_upload</i>Submit</a><br><br>
								</td>
								<td>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Task Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Criteria Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Example Submission</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_upload</i>Submit</a><br><br>
								</td>
								<td>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Task Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Criteria Sheet</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_download</i>Example Submission</a><br><br>
									<a class="waves-effect waves-dark btn"><i class="material-icons right">cloud_upload</i>Submit</a><br><br>
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