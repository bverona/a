<?php
$cantidad = $argv[1];
$aleatorios = array();
while(count($aleatorios)<$cantidad){
	$aleatorio = rand(100000,999999);
	if(!in_array($aleatorio,$aleatorios)){
		array_push($aleatorios,$aleatorio);
	}
}

foreach($aleatorios as $key => $aleatorio){
	echo ($key+1) . ".- " . $aleatorio . " " . PASSWORD_HASH($aleatorio,PASSWORD_DEFAULT) . "\n";
}
?>
