<?php 

$data = json_decode( file_get_contents('https://portalhouses.com/administrador/apiPlantas/post.php?personal=2'), true );



$i = 0;
echo "<select>";

while($i < count($data))
{
	echo "<option value='".$data[$i]['nombre']."'>".$data[$i]['nombre']."</option>";
	$i++;
}
echo "</select>"





?>