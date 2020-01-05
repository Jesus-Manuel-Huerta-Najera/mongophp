<?php
	$mongo = new Mongo();
	$db = $mongo->selectDB("Estudiantes");
	$Estudiantes = $mongo->selectCollection($db,"Estudiantes");

	/////////////////////////////////
	$id = $_POST['id'];
	$Nombre = $_POST["nameEst"];
	$Apellido = $_POST["ApeEst"];
	$Edad = $_POST["EdadEst"];
	$Sexo= $_POST["SexoEst"];
	$MatriculaId= $_POST["idMatri"];
	$MatriculaAño= $_POST["añoMatri"];
	$MatriculNueva= $_POST["NuevMatri"];
	$MatriculRenovada= $_POST["RenMatri"];
	////////////////////////////////////

	$condicion = array("_id" => new MongoId($id));
	$modiEstudiante = array("Nombre"=>$Nombre,"Apellido"=>$Apellido,"Edad"=>$Edad,"Sexo"=>$Sexo,"Matricula"=>array("id"=>$MatriculaId,"año"=>$MatriculaAño,"nueva"=>$MatriculNueva,"Renovada"=>$MatriculRenovada));
	$Estudiantes->update($condicion, $modiEstudiante);

	header("Refresh: 0;url=index.php?mensaje=3")
?>   