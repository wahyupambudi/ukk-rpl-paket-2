<?php

$con = mysqli_connect("localhost", "root", "", "db_ukk_siswa");

if (!$con) {
	die("koneksi error". mysqli_connect_error());
}

?>