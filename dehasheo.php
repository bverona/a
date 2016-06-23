<?php 


 $arreglo=$_POST["arreglo"];

$i=0;
	
$hash=null;	
foreach ($arreglo as $key ) {
	$hash.=base64_decode($key)."\n";
	$i++;	
}
echo  ($hash);
 ?>