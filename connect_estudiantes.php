<?php 
	$mongo = new Mongo();
	$db = $mongo->selectDB("Estudiantes");
	$Estudiantes = $mongo->selectCollection($db,"Estudiantes");
?>