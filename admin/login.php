<?php
	if($_SESSION['admin'] == "") {
		header("Location: index.php");
		die;
	} else {
		$user = $_SESSION['admin'];
	}
?>