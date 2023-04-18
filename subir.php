

<html> 
 <head> 
  <title> Subir PDF</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
 </head> 
 <body class="bg-dark d-flex justify-content-center aligh-items-center">
  <!-- HTML5 Input Form Elements -->

  <div class="container">


  <br>
  <div class="text-center">
  <img src="https://portalhouses.com/pagos_cupon/logo805010508.jpg" class="img-fluid img-thumbnail rounded mx-auto d-block rounded-circle" alt="...">
</div>

  <div class="mb-3">
  <label for="formFile" class="form-label">Buscar</label>
  <input class="form-control  fs-1 h-25" id="fileupload" type="file" name="fileupload" /> <br><br>
  <button id="upload-button" class="btn btn-primary  fs-1 w-100 h-25" onclick="uploadFile()"> Subir archivo PDF</button>
  </div>


  
  
  

</div>
  <!-- Ajax JavaScript File Upload Logic -->
  <?php 

  $codigo= $_GET['codigo'] ;
  $anotacion = $_GET['anotacion'];
  $usuario = $_GET['usuario'];

  
  echo '
<script>
  async function uploadFile() {
  let formData = new FormData(); 
  formData.append("file", document.getElementById("fileupload").files[0]);
  await fetch("https://www.portalhouses.com/administrador/apiPlantas/upload_inv/uploadFile.php?codigo='.$codigo.'&anotacion='.$anotacion.'&usuario='.$usuario.'"'.', {
    method: "POST", 
    body: formData
  }); 
  alert("Archivo cargado exitosamente.");
  window.location = "https://portalhouses.com/administrador/apiPlantas/upload_inv/index.php";
  }
  </script> ;
  '; ?>

 </body> 
 
