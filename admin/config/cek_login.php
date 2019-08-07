<?php
session_start();
if(isset($_SESSION['username'],$_SESSION['password'])) {
  header('location:../index.php');
} else {
include "config.php";

$username 	  = $_POST['username'];
$password     = $_POST['password'];
$role		  = "admin";


$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password='$password' AND role = '$role'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username && $row['password'] == $password && $row['role'] == $role) // pake && bukan AND/and
{
// klo bisa kolom role pakai ENUM
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:../index.php');
  
}
else
{
  echo "<script>alert('Maaf. Username dan Password Anda salah.'); window.location = '../';</script>";
}
}
?>