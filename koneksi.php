<?php 
if(!isset($_SESSION)){
    session_start();
}
$koneksi = mysqli_connect("localhost","root","","ukk_perpuss");

//check connection
if (mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>