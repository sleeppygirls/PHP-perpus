<?php

// Menambahkan class database
require('../db/database.php');
$db = new Database();

// Mengambil data no_induk menggunakan GET
$id_cus = $_GET['id_cus'];

// Membuat query delete data
$db->query('DELETE FROM customers WHERE id_cus=:id_cus');

// Binding data query dengan variable
$db->bind('id_cus', $id_cus);

// Execute query ke database
$db->execute();

// Mengembalikan ke halaman data_cus.php
header("Location: ../data_cus.php");
?>