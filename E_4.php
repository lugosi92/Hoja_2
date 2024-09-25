<?php
$num = rand(1,100);
echo $num, "<br>";

if ($num < 50){
    echo "El numero es menor a 50";
}else if($num > 50){
    echo "El numero es mayor a 50";
}else{
    echo "El numero es igual a 50";
}