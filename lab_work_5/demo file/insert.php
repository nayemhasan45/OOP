<?php
include "connect.php";

	$title1=$_GET["title"];
	$author1=$_GET["author"];
	//print ($title." ");
	$sql="INSERT INTO book (title, author) VALUES ('".$title1."','".$author1."')";
	
	if ($conn->query($sql) == TRUE) {
		print ("Naujas irasas sukurtas");
		print ("<a href=list.php> Sarasas </a>");
	} else {
		print ("Klaida");
	}
?>