<?php
$servername = "mysql.hostinger.co.id";
$database = "u541361579_smartroom";
$username = "u541361579_smartroom";
$password = "smartroom2020";
$conn = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];
$s1 = $_GET['L1'];
$s2 = $_GET['L2'];
$s3 = $_GET['AC1'];
$s4 = $_GET['AC2'];
$s5 = $_GET['P'];
$s6 = $_GET['S'];
$s7 = $_GET['H'];
$s8 = $_GET['O'];

date_default_timezone_set('Asia/Jakarta');
$date = date('Y-m-d H:i:s');

$sql = "UPDATE kondisi_alat SET projector='$s5' WHERE id='$id';";

$hasil = mysqli_query($conn, $sql);

//$sql="UPDATE `tabel_rtu` SET `sensor1` = '$s1', `sensor2` = '$s2', `sensor3` = '$s3', `status_rtu` = 'OK' WHERE `tabel_rtu`.`id_rtu` = '$rtuid';";
//$hasil=mysqli_query($conn,$sql);
echo "sukses";
