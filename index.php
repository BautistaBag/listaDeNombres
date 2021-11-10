<?
//ME CONECTO CON LA BASE DE DATOS, Y TOMO TODOS LOS VALORES QUE TIENE LA TABLA
$link = mysql_connect("localhost" , "root" , "" );
$base = mysql_select_db ("tmp");
$query = "SELECT * FROM formulario_prueba ";
$result = mysql_query($query);
//$r = mysql_fetch_array($result);
//var_dump($r);

//SI SE CARGO EL FORM(SI SE PRESIONÓ AGREGAR) CARGO EN LA VARIABLE NOM EL NOMBRE QUE SE INGRESO EN EL INPUT
if ($_POST) {
	$nom = $_POST['nombre'];
$link = mysql_connect("localhost" , "root" , "" );
$base = mysql_select_db ("tmp");
$query2 = "INSERT INTO `formulario_prueba` ( `id` , `nombre` , `apellido` , `dni` , `email` , `telefono` , `localidad` , `cod_postal` , `provincia` )
VALUES (
'', '$nom', '', '', NULL , '', '', '', ''
);";
$result2 = mysql_query($query2);
//UNA VEZ Q SE INSERTA, ACTUALIZO LA PAGINA CON header
header("location:index.php");
}

?>
<!--ESTILOS DE BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Home</title>
  <style>

  </style>
</head>

<body>

<div class=" container mt-5">
	<div class="row">
		<div class="col-md-6">
<!--	LEO TODOS LOS DATOS DE LA CONSULTA-->
				<?while($row = mysql_fetch_array($result)):?>
			
					<div class="alert alert-primary text-uppercase" role="alert">
<!--					MUESTRO POR PANTALLA TODOS LOS NOMBRES DE LA CONSULTA-->
					<?echo $row['nombre']?>
					<!--mandamos a eliminar.php el id correspondiente a ese campo-->
					<a href="eliminar.php?id=<?echo $row['id']?>">
						<!--icono de tacho de basura-->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>	
					</a>
			</div>
		<?endwhile;?>
	
		
		</div>
		<div class="col-md-6">
		<h2>Agregar Nombre</h2>
		<form method="POST">
		<input type="text" class="form-control mt-3" name="nombre">
	<button class="btn btn-primary mt-3">Agregar</button>
		
							
		</form>
		</div>
	</div>
</div>
</body>
</html>
