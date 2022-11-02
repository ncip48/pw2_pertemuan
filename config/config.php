<?php

$server = '103.121.122.247';
$user = 'pw2';
$password = 'mbahcip123';
$nama_database = 'pw2';

$sambung = mysqli_connect($server, $user, $password, $nama_database);
if (!$sambung) {
    die('Ada masalah koneksi ke database: ' . mysqli_connect_error());
}
