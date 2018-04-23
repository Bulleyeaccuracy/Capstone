<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
	//Resume
  if(isset($_POST['resume'])) {
	 if(!is_dir("uploads/resources/")) {
		mkdir("uploads/resources/");
	}
	$path = "uploads/resources/" . "Resume Example." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#resources";
  }
  //Example
  if(isset($_POST['example'])) {
	 if(!is_dir("uploads/resources/")) {
		mkdir("uploads/resources/");
	}
	$path = "uploads/resources/" . "Example Document." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#resources";
  }
  //Job Tips
  if(isset($_POST['job'])) {
	 if(!is_dir("uploads/resources/")) {
		mkdir("uploads/resources/");
	}
	$path = "uploads/resources/" . "Job Tips." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#resources";
  }
  //Assignment 1 Task Sheet
  if(isset($_POST['asgn1task'])) {
	 if(!is_dir("uploads/assessment/Assignment 1/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 1/");
	}
	$path = "uploads/assessment/Assignment 1/" . "Task Sheet." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 1 Criteria Sheet
  if(isset($_POST['asgn1crs'])) {
	 if(!is_dir("uploads/assessment/Assignment 1/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 1/");
	}
	$path = "uploads/assessment/Assignment 1/" . "Criteria Sheet." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 1 Example Submission
  if(isset($_POST['asgn1ex'])) {
	 if(!is_dir("uploads/assessment/Assignment 1/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 1/");
	}
	$path = "uploads/assessment/Assignment 1/" . "Example Submission." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 2 Task Sheet
  if(isset($_POST['asgn2task'])) {
	 if(!is_dir("uploads/assessment/Assignment 2/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 2/");
	}
	$path = "uploads/assessment/Assignment 2/" . "Task Sheet." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 2 Criteria Sheet
  if(isset($_POST['asgn2crs'])) {
	 if(!is_dir("uploads/assessment/Assignment 2/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 2/");
	}
	$path = "uploads/assessment/Assignment 2/" . "Criteria Sheet." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 2 Example Submission
  if(isset($_POST['asgn2ex'])) {
	 if(!is_dir("uploads/assessment/Assignment 2/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 2/");
	}
	$path = "uploads/assessment/Assignment 2/" . "Example Submission." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 3 Task Sheet
  if(isset($_POST['asgn3task'])) {
	 if(!is_dir("uploads/assessment/Assignment 3/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 3/");
	}
	$path = "uploads/assessment/Assignment 3/" . "Task Sheet." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 3 Criteria Sheet
  if(isset($_POST['asgn3crs'])) {
	 if(!is_dir("uploads/assessment/Assignment 3/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 3/");
	}
	$path = "uploads/assessment/Assignment 3/" . "Criteria Sheet." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 3 Example Submission
  if(isset($_POST['asgn3ex'])) {
	 if(!is_dir("uploads/assessment/Assignment 3/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 3/");
	}
	$path = "uploads/assessment/Assignment 3/" . "Example Submission." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 4 Task Sheet
  if(isset($_POST['asgn4task'])) {
	 if(!is_dir("uploads/assessment/Assignment 4/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 4/");
	}
	$path = "uploads/assessment/Assignment 4/" . "Task Sheet." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 4 Criteria Sheet
  if(isset($_POST['asgn4crs'])) {
	 if(!is_dir("uploads/assessment/Assignment 4/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 4/");
	}
	$path = "uploads/assessment/Assignment 4/" . "Criteria Sheet." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
  //Assignment 4 Example Submission
  if(isset($_POST['asgn4ex'])) {
	 if(!is_dir("uploads/assessment/Assignment 4/")) {
		if(!is_dir("uploads/assessment/")) {
			mkdir("uploads/assessment/");
		}
		mkdir("uploads/assessment/Assignment 4/");
	}
	$path = "uploads/assessment/Assignment 4/" . "Example Submission." . pathinfo($_FILES['uploaded_file']['name'])['extension'];
	$ret = "staff.php#assessment";
  }
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
  
  header("Location: " . $ret);
?>