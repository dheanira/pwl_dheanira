<?php
$conn=mysqli_connect("localhost","root","","db_dhea");

if(!$conn){
    die("Tidak Dapat Terhubung".mysqli_connect_error());
}

?>