<?php 

	if(!empty($_GET['id'])){

		$id = $_GET['id'];

		unlink($id);

		header("Location: sped.php");
	}else{
		header("Location: sped.php");
	}

?>