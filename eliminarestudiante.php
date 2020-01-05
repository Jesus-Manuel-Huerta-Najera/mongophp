<?php
	$mongo = new Mongo();
	$db = $mongo->selectDB("Estudiantes");
	$Estudiantes = $mongo->selectCollection($db,"Estudiantes");

	/////////////////////////////////
	$id = $_GET["id"];
	////////////////////////////////
	$condicion = array("_id" => new MongoId($id));
	if ($Estudiantes->count($condicion) == 1){
		$Estudiantes->remove($condicion);
	}
	
	header("Refresh: 0;url=index.php?mensaje=1");
?>