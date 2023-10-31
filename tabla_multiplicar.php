<?php 
$numero1 = $_POST['n1'];
$resultado;

for ($i=0; $i<=10; $i++){
    $resultado=$numero1*$i;
    echo "$numero1 x $i = $resultado";
    echo "<br><br>";
}
?>