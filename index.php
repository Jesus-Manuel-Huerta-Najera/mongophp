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
            <?php
            error_reporting(0);
            $mensaje = $_GET["mensaje"];
            if ($mensaje == 1) {
                echo "<p class='btn  btn-danger'><i class='icon-trash icon-white'></i> El Estudiante fue eliminado con éxito.</p><br><br>";
            }
            if ($mensaje == 2) {
                echo "<p class='btn  btn-success'><i class='icon-ok icon-white'></i> El Estudiante fue guardado con éxito.</p><br><br>";
            }
            if ($mensaje == 3) {
                echo "<p class='btn  btn-warning'><i class='icon-refresh icon-white'></i> El Estudiante fue modificado con éxito.</p><br><br>";
            }
        ?>
        <form class="form-horizontal" action="AgregarEstudiante.php" method="post">
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
                    <input type="text" name="idMatri" id="inputMid" class="input-xlarge" placeholder="Id de la Matricula"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputMaño">Año Matricula</label>
                <div class="controls">
                    <input type="text" name="añoMatri" id="inputMaño" class="input-xlarge" placeholder="Id de la Matricula"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputMNu">Nueva Matricula</label>
                <div class="controls">
                    <input type="text" name="NuevMatri" id="inputMNu" class="input-xlarge" placeholder="Id de la Matricula"/>
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="inputMR">Matricula Renovada</label>
                <div class="controls">
                    <input type="text" name="RenMatri" id="inputMR" class="input-xlarge" placeholder="Id de la Matricula"/>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-default btn-primary"><i class="icon-book icon-white"></i> Guardar Estudiante</button>
                </div>
            </div>
             
        </form>

            <h3>Tabla de Estudiantes almacenados</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Matricula id</th>
                        <th>Matricula año</th>
                        <th>Matricula nuevo</th>
                        <th>Matricula renovada</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        require_once("connect_estudiantes.php");
                        if ($Estudiantes->count()>0)
                        {
                            $documentos = $Estudiantes->find();
                            foreach ($documentos as $documento) {                        
                    ?>
                    <tr>
                        <td><?php echo $documento["Nombre"]; ?></td>
                        <td><?php echo $documento["Apellido"]; ?></td>
                        <td><?php echo $documento["Edad"]; ?></td>
                        <td><?php echo $documento["Sexo"]; ?></td>
                        <td><?php echo $documento["Matricula"]["id"]; ?></td>
                        <td><?php echo $documento["Matricula"]["año"]; ?></td>
                        <td><?php echo $documento["Matricula"]["nueva"]; ?></td>
                        <td><?php echo $documento["Matricula"]["Renovada"]; ?></td>
                        <td><a href="modificarEstudiante.php?id=<?php echo $documento['_id'] ?>" class="btn btn-warning"><i class="icon-pencil icon-white"></i> Modificar</a></td>
                        <td><a href="eliminarestudiante.php?id=<?php echo $documento['_id'] ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i> Eliminar</a></td>

                    </tr>
                    <?php
                        }
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>   
    </body>
</html>
