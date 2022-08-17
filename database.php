<?php
function conn() {
$hostaname = 'localhost';
$username = 'root';
$password = '';
$dbname= 'utu';

$conectar = mysqli_connect($hostaname,$username,$password,$dbname);
return $conectar;

}
?>