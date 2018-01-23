<?php

$escuela = $_GET['nombre'];
$calif = $_GET['calif'];
$a1 = $_GET['a1'];
$a2 = $_GET['a2'];
$a3 = $_GET['a3'];
$a4 = $_GET['a4'];
$a4 = $_GET['a5'];


            
$name = 'info.csv';
if(file_exists($name)){
    $file = fopen('info.csv', 'a');  
}
else{
    $file = fopen('info.csv', 'w') or die("Unable to open file!");
    //set the column names
    $cells[] = array('Visita','Fecha','Pregunta 1', 'Pregunta 2', 'Pregunta 3', 'Pregunta 4','Pregunta 5','Pregunta 6');
}
 
//pass all the form values
$cells[] = array($escuela,date("m/d/y"),$a1, $a2, $a3, $a4, $a5, $calif);
 
foreach($cells as $cell){
	fputcsv($file,$cell);
}
 
fclose($file); 

header("Location:../index.html");
exit;
?>
