<?php
	require_once('connect.php');

	$id = $_GET['bookCopyID'];
	$bookID=$_GET['bookID'];

	if (isset($id)) {

		$q="DELETE FROM bookcopies where bookCopyID=$id";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: editBook.php?bookID=<?=$bookID?");
	}
?>