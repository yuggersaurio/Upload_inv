<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

/* Get the name of the uploaded file */

$filename = $_FILES['file']['name'];
$codigo = $_GET['codigo'];
$anotacion = $_GET['anotacion'];
$usuario = $_GET['usuario'];



//url contrato de fotos actualizar bd




/* Choose where to save the uploaded file */
$location = "asesores_documentos/inventario_inicial_".$codigo.".pdf";


/* Save the uploaded file to the local filesystem */
if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
  echo 'Success'; 

  $url = "https://portalhouses.com/administrador/apiPlantas/post.php?contratoactualizar=inventario_inicial_".$codigo."&anotacion=".$anotacion."&usuario=".$usuario;
  
echo '<script language="javascript">alert("Inventario exitosamente");</script>';
  header("Location: ".$url);

} else { 
  echo 'Failure'; 
}




?>