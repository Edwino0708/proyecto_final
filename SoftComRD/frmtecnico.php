<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Bienvenido </title>
</head>
<body>
   <div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="frmdoctor.php" class="navbar-brand">Bienvenido 
				<?php
					session_start();
					echo $_SESSION['nombre'];
					?>
				</a>
				</a>
			</div>		
			<div class="collapse navbar-collapse" id="miMenu">
				<ul class="nav navbar-nav">						
					<li><a href="mantenimientotecnico.php">Mantenimientos</a></li>
					<li><a onclick="cambiar();" href="#">Cambiar contraseña</a></li>	
					<li><a href="php/cerrarsesion.php"><span class="label label-danger">CERRAR SESION </span></a></li>								
				</ul>
			</div>
		</div>
	</nav>
</div>
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Mantenimiento</h4>
            </div>
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>Vieja contraseña</label>
                  <input  name="password0" id="p" class="form-control" type="password"required>
                </div>
                <div class="form-group">
                  <label>Nueva contraseña</label>
                  <input  name="password1" id="p3" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>Repita nueva password</label>
                  <input  name="password2" id="p4" class="form-control" type="password" required>
                </div> 
                 <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cambiar
                </button> 
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>

      <button type="button" onclick="nuevoform();" class="btn btn-primary" style="margin-left:600px">Crear nuevo mantenimiento</button>
      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Mantenimiento</h4>
            </div>
            <form role="form"  id= "frmpaciente" name="frmpaciente" onsubmit="Registrarmantenimiento(); return false">
              <div class="col-lg-12">               

               <div class="form-group">
                  <label>Fecha Aplicacion</label>
                  <input  name="fecha_aplicacion" class="form-control" required>
                </div>
                
                 <div class="form-group">
                  <label>Tipo de mantenimiento</label>
                  <input  name="tipo_mantenimiento" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>Cantidad de mantenimiento</label>
                  <input  name="cantidad_mantenimiento" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nombre del dispositivo</label>
                  <input  name="nombre_dispositivo" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Precio del mantenimiento</label>
                  <input  name="precio_mantenimiento" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Tecnico Responsable</label>
                  <input  name="responsable" class="form-control" required>
                </div>
                              
                
                <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Agregar mantenimentos
                </button>
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
    
<!--//////////////////////////////////////////////////-->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">        
	function cambiar(){
          $('#modal2').modal('show');

        }

        function nuevoform(){
          $('#modal').modal('show');

        }
    </script>
</body>