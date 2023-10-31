<?php 
$numero1 = $_POST['n1'];
$suma_acumulada = 0;
$indice = 1;

while ($indice<=$numero1){
    $suma_acumulada = $suma_acumulada + $indice;
    $indice=$indice+1;
}

echo "El total acumulado es: $suma_acumulada"
?>