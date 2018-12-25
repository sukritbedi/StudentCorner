<?php 

if(isset($_GET['title'])){

	include_once 'dbh.inc.php';

	$title = mysqli_real_escape_string($conn,$_GET['title']);

	$sql = "SELECT * FROM project WHERE title='$title';";
	$result = mysqli_query($conn,$sql);

	while($user=mysqli_fetch_assoc($result))
  {
 ?>

 <p>
 	<u><b>TITLE</b></u> <br><?php echo "$user[title]";?><br>
 	<u><b>INTRODUCTION</b></u> <br><?php echo "$user[introduction]";?><br>
 	<u><b>REQUIREMENTS</b></u> <br><?php echo "$user[requirements]";?><br>
 	<u><b>DESCRIPTION AND PICTURES</b></u>
 	<embed src="uploads/<?php echo "$user[filename]" ?>#toolbar=0" type="application/pdf" width=100% height=100%></embed>
 </p>

 <?php 
}
}

  ?>
