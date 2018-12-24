<?php 

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$introduction=mysqli_real_escape_string($conn,$_POST['introduction']);
	$requirements=mysqli_real_escape_string($conn,$_POST['requirements']);
	$description=mysqli_real_escape_string($conn,$_POST['description']);

	$file = $_FILES['file'];

	$filename = $_FILES['file']['name'];
	$filetmpname = $_FILES['file']['tmp_name'];
	$filesize = $_FILES['file']['size'];
	$filerror = $_FILES['file']['error'];
	$filetype = $_FILES['file']['type'];

	$fileext = Explode('.', $filename);
	$fileactualext = strtolower(end($fileext));

	$allowed = array('pdf');

	if (in_array($fileactualext, $allowed)) {
		if ($filerror === 0) {
			if ($filesize < 20000000000) {
				$filenamenew = uniqid('',true).".".$fileactualext;
				$filedestination = 'uploads/'.$filenamenew;
				move_uploaded_file($filetmpname, $filedestination);
			} else {
				echo "Your file is too big !";
			}
		} else {
			echo "There was an error while uploading !";
		}
	} else{
		echo "You cannot upload file of this format";
	}

if(empty($title) || empty($introduction)|| empty($requirements)|| empty($description)){
		header("Location: ../form.php?form=empty");
		exit();
	}else{
		
			$sql = "SELECT * FROM project WHERE title='$title';";
			$result = mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);

			if($resultcheck > 0){
				echo "PROJECT TITLE ALREADY EXISTS....PLEASE TRY AGAIN";
			}else{
				$sql = "INSERT INTO project (title, introduction, requirements, description, filename) VALUES ('$title', '$introduction', '$requirements', '$description','$filenamenew');";
				$sql1 = "INSERT INTO list (title) VALUES ('$title');";
				mysqli_query($conn, $sql);
				mysqli_query($conn, $sql1);
				header("Location: ../form.php?uploadsuccessful");
				exit();
			}
		}	
}else{
	header("Location: ../form.php?upload=no");
	exit();
}

 ?>