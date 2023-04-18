


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>PHTools</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>

<body class="bg-dark d-flex justify-content-center aligh-items-center">
<div class="container">

<br>
  <div class="text-center">
  <img src="https://portalhouses.com/pagos_cupon/logo805010508.jpg" class="img-fluid img-thumbnail rounded mx-auto d-block rounded-circle" alt="...">
</div>



<form method="get" action="subir.php">
Datos del inmueble:
<div class="input-group mb-3">
  <span class="input-group-text fs-1" id="basic-addon1">Contrato</span>
  <input type="number" name="codigo" class="form-control fs-1" placeholder="contrato" aria-label="Username" aria-describedby="basic-addon1" min="1" max="9999" maxlength="4">
</div>
<div class="input-group mb-3">
  <span class="input-group-text fs-1" id="basic-addon1">Inmueble</span>
  <input type="text" name="anotacion" class="form-control fs-1" placeholder="anotacion" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text fs-1" id="basic-addon1">Tipo</span>
  <input type="text" value="inventarioPDF" name="tipo" class="form-control fs-1" placeholder="tipo" aria-label="Username" aria-describedby="basic-addon1" readonly>
</div>
<div class="input-group mb-3">
  <span class="input-group-text fs-1" id="basic-addon1">Asesor</span>
  <?php

$data = json_decode( file_get_contents('https://portalhouses.com/administrador/apiPlantas/post.php?personal=2'), true );



$i = 0;
echo "<select name='usuario' class='form-select fs-1'>";

while($i < count($data))
{
	echo "<option value='".$data[$i]['nombre']."'>".$data[$i]['nombre']."</option>";
	$i++;
}
echo "</select>"
  ?>


</div>
<button class="btn btn-primary  fs-1 w-100" >Siguiente</button>


</form>


</div>


</body>






?>