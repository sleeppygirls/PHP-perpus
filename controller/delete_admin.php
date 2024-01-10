<?php

// Menambahkan class database
require('../db/database.php');
$db = new Database();

// Mengambil data no_induk menggunakan GET
$username = $_GET['username'];

// Membuat query delete data
$db->query('DELETE FROM admins WHERE username=:username');

// Binding data query dengan variable
$db->bind('username', $username);

// Execute query ke database
$db->execute();

// Mengembalikan ke halaman data_admin.php
header("Location: ../data_admin.php");
?>