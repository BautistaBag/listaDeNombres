<?
$link = mysql_connect("localhost" , "root" , "" );
$base = mysql_select_db ("tmp");
$id = $_GET['id'];
$query = "DELETE FROM formulario_prueba WHERE id=$id";
$result = mysql_query($query);
echo "borrado";
header('location:index.php');
?>
