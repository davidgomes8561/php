<?php
require_once 'exercício.html';
$numero1= $_POST ["valor1"];
$numero2= $_POST ["valor2"];
$numero3= $_POST ["valor3"];
$comissao= (15/100)*$numero3;
$salariofinal=$comissao+$numero2;
echo "<br>sr(a) $numero1 seu salário fixo e de $numero2 já o seu salário final vai ser de $salariofinal"

?>