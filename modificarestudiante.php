<!DOCTYPE html>
<html lang="es-CL">
    <head>
        <?php
        	require_once("head.php");
        ?>
    </head>
    <body>
        <div class="navbar navbar navbar-inverse navbar-fixed-top">
        	<?php
        		require_once("nav.php");
        	?>
        </div>
        <div class="container">
            
            <form class="form-horizontal" action="editarestudiante.php" method="post">
                <?php 
                    require_once("connect_estudiantes.php");
                    $id =  $_GET['id'];
                    $condicion = array("_id" => new  MongoId($id));
                    if($Estudiantes->count($condicion) == 1){
                        $estudiantes = $Estudiantes->findOne($condicion);
                    }
                ?>
                <div class="control-group">
                    <label class="control-label" for="inputNEst">Nombre</label>
                    <div class="controls">
                        <input type="text" name="nameEst" id="inputNEst" class="input-xlarge" placeholder="Nombre del Estudiante"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputAEst">Apellidos</label>
                    <div class="controls">
                        <input type="text" name="ApeEst" id="inputAEst" class="input-xlarge" placeholder="Apellido del Estudiante"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEEst">Edad</label>
                    <div class="controls">
                        <input type="text" name="EdadEst" id="inputEEst" class="input-xlarge" placeholder="Edad del Estudiante"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputSEst">Sexo</label>
                    <div class="controls">
                        <input type="text" name="SexoEst" id="inputSEst" class="input-xlarge" placeholder="Sexo del Estudiante"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputMid">Id Matricula</label>
                    <div class="controls">
                        <input type="text" name="idMatri" id="inputMid" class="input-xlarge" placeholder="Id de la  Matricula"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputMaño">Año Matricula</label>
                    <div class="controls">
                        <input type="text" name="añoMatri" id="inputMaño" class="input-xlarge" placeholder="Id de la    Matricula"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputMNu">Nueva Matricula</label>
                    <div class="controls">
                        <input type="text" name="NuevMatri" id="inputMNu" class="input-xlarge" placeholder="Id de la    Matricula"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputMR">Matricula Renovada</label>
                    <div class="controls">
                        <input type="text" name="RenMatri" id="inputMR" class="input-xlarge" placeholder="Id de la  Matricula"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="hidden" name="id" value="<?php echo $id ?>" />
                        <button type="submit" class="btn btn-default btn-primary"><i class="icon-book icon-white"></i   > Guardar Estudiante</button>
                    </div>
                </div>
             
            </form>
        </div> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>
</html>
