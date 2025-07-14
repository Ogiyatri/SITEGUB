<?php
include 'config.php';

$no = $_POST['no'];
$password = $_POST['password'];

$sql = "SELECT * FROM login_admin WHERE no_induk ='$no' AND password ='$password'";
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);

if ($num == 1) {
	header('Location: admin.php');
	exit();
} else {
	echo "Username / Password Salah";
}
