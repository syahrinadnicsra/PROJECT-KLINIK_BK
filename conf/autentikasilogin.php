<?php
include('conn.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query) == 1) { //artinya datanya ada
    header('Location:../app'); //Jika login berhasil akan lanjut ke halaman dashboard
} else {
    header('Location:../'); //Jika login gagal akan kembali
}
