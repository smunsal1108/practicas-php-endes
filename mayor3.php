<?php 
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$numero3 = $_POST['n3'];

if ($numero1>$numero2 && $numero1>$numero3){
    echo "El número mayor es $numero1";
} else if ($numero2>$numero1 && $numero2>$numero3){
    echo "El número mayor es $numero2";
}else{
    echo "El número mayor es $numero3";
}
?>