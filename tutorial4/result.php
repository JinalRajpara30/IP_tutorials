<?php 
$P=$_POST["Principal"];
$R=$_POST["Rate"];
$N=$_POST["Year"];

$si=($P*$R*$N)/100;
echo "Simple Interest :".$si;
?>