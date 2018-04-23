<?php
   include('config.php');
   session_start();
   
   $TESTNAME = "TEST";
   
   $user_check = $_SESSION['login_user'];
   
   //Student Variables
   $studentses_sql = mysqli_query($db,"select * from student where StudentNum = '$user_check' ");
   $studentrow = mysqli_fetch_array($studentses_sql,MYSQLI_ASSOC);
   
   $studentfname = $studentrow['FirstName'];
   $studentlname = $studentrow['LastName'];
   $studentgroupid = $studentrow['GroupId'];
   $studentMajor = $studentrow['Major'];
   $studentGPA = $studentrow['GPA'];
   $studentNum = $studentrow['StudentNum'];
   $studentPrivacy = "";
   if ($studentrow['HideDetails'] == 'N') $studentPrivacy = "checked";
   $teamSize = mysqli_num_rows(mysqli_query($db, "select * from student where GroupId = '$studentgroupid'"));
   
   //Staff Variables
   $staffses_sql = mysqli_query($db,"select * from staff where StaffId = '$user_check' ");
   $staffrow = mysqli_fetch_array($staffses_sql,MYSQLI_ASSOC);
   
   $stafffname = $staffrow['FirstName'];
   $stafflname = $staffrow['LastName'];
   
   //Team Variables
   $teamses_sql = mysqli_query($db,"select * from team where GroupId = '$studentgroupid' ");
   $teamrow = mysqli_fetch_array($teamses_sql,MYSQLI_ASSOC);
   
   $teamprojectid = $teamrow['ProjectId'];
   $teamtutorid = $teamrow['TutorID'];
   $teamSupervisor = $teamrow['CohortSupervisor'];
   
   //Average GPA
   $teamList_sql = mysqli_query($db,"select * from student where GroupId = '$studentgroupid' ");
   $teamList = mysqli_fetch_all($teamList_sql,MYSQLI_ASSOC);
   $teamAvgGpa = 0; $i = 0;
   foreach ($teamList AS $row) { $teamAvgGpa += $row['GPA']; $i++; }
   $teamAvgGpa = $teamAvgGpa / $i;
   
   //Supervisor
   $supervisor_sql = mysqli_query($db,"select * from staff where SupervisingCohort = '$teamSupervisor' ");
   $supervisorRow = mysqli_fetch_array($supervisor_sql,MYSQLI_ASSOC);
   $supervisorFirstName = $supervisorRow['FirstName'];
   $supervisorLastName = $supervisorRow['LastName'];
   
   //Tutor
   $tutor_sql = mysqli_query($db,"select * from tutor where TutorID = '$teamtutorid' ");
   $tutorRow = mysqli_fetch_array($tutor_sql,MYSQLI_ASSOC);
   $tutorFirstName = $tutorRow['FirstName'];
   $tutorLastName = $tutorRow['LastName'];
   
   //Project Variables
   $projectses_sql = mysqli_query($db,"select * from project where ProjectId = '$teamprojectid' ");
   $projectrow = mysqli_fetch_array($projectses_sql,MYSQLI_ASSOC);
   $projectName = $projectrow['ProjectName'];
   
   //Tutor Variables
   $tutorses_sql = mysqli_query($db,"select * from tutor where TutorId = '$teamtutorid' ");
   $tutorrow = mysqli_fetch_array($tutorses_sql,MYSQLI_ASSOC);
   
   //Staff Stuff
   $teamsStaff_sql = mysqli_query($db,"select * from team");
   $teamStaffrow = mysqli_fetch_all($teamsStaff_sql,MYSQLI_ASSOC);
   
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>