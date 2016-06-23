<?php 

 $arreglo=$_POST["arreglo"];
 $numeros=[];
$numero=300;
$hash=null;

if(!isset($_POST["numero"])){
	$numero=$_POST["numero"];
}

foreach ($arreglo as $key ) {
	$hash.=PASSWORD_HASH($key,PASSWORD_DEFAULT, array('cost' => 10))."\n";		
	
}
echo ($hash);

/*
$hash=null;	

$aleatorios = array();
while(count($aleatorios)<$numero){
	$aleatorio = rand(10000000,90000000);
	if(!in_array($aleatorio,$aleatorios)){
		array_push($aleatorios,$aleatorio);
	}
}

foreach($aleatorios as $key => $aleatorio){
	$numeros[$key+1] = array($aleatorio=>PASSWORD_HASH($aleatorio,PASSWORD_DEFAULT, array('cost' => 4)) . "\n");
}*/
/*$aux="";
$max=9; 
$aleatorio=mt_rand(1,$max); //Genereamos aleatorio 
$usados[]=$aleatorio; //Guardamos el primero en un array ya que el primero no puede estar repetido 
     
     
    for ($i=0; $i<$numero; $i++) 
    { 
    $aleatorio=mt_rand(1,$max); //Generamos aleatorio          
        $contador=0; 
        for ($n=$contador; $n<count($usados)+1; $n++) //Recorre desde el comienzo hasta el final del array 
        {     
         
         $aleatorio=mt_rand(1,$max); 
         /*
            while ($aleatorio==$usados[$n]) //Si se repiten generamos el aleatorio y ponemos reiniciamos el contador para que vuelva a comprobar en el for 
            {     
            $aleatorio=mt_rand(1,$max); 
            $contador=0; 
            } 
        }     
         
        $aux =PASSWORD_HASH($aleatorio,PASSWORD_DEFAULT, array('cost' => 4 ))."\n";
    $usados[]=$aux;    //No esta repetido, luego guardamos el aleatorio 
    }  


 */

?>