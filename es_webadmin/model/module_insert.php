<?php
include "./connection.php";

$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$tlpn = $_POST['tlpn'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

$query = "insert into user (name,username,password,no_telepon,email,alamat,aktif) values ('$name','$username','$password','$tlpn','$email','$alamat','$status')";
mysqli_query($conn, $query);

?>
