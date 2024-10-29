
<?php  
$parOuImpar = array(2, 5, 7, 8, 10, 18, 30, 37, 38, 60);

for ($i = 0; $i < count ($parOuImpar); $i++) {
    if ($parOuImpar[$i] % 2 == 0)
    echo "Número Par: $par_ou_impar[$i] <br />";
    else 
    echo "Número Impar:  $par_ou_impar[$i] <br />";
}
