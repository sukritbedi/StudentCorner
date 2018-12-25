<?php 

include_once 'dbh.inc.php';

$sql = "SELECT title FROM project;";
$result = mysqli_query($conn,$sql);
$result_check = mysqli_num_rows($result);

if ($result_check > 0) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<a href='projects.php?title={$row['title']}'> {$row['title']}</a><br>\n";
	}
} else {
	echo "No projects to display";
}

 ?>