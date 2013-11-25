<?php
include "process_file.php";

	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	} else {	
		if (file_exists("upload/" . $_FILES["file"]["name"])) {		
			unlink("upload/".$_FILES["file"]["name"]);
		}
		move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
		echo "Stored in: " . "upload/" . $_FILES["file"]["name"];		
	}
	if(isset($_POST["weights"])) {
		$weights = explode(",", $_POST["weights"]);
	}
	print_r($weights);
	processFile($_FILES["file"]["name"],$weights);	
?>