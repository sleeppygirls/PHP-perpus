<?php

// Menambahkan class database
require('../db/database.php');
$db = new Database();

// Mengambil data no_induk menggunakan GET
$no = $_GET['no'];

// Membuat query delete data
$db->query('DELETE FROM books WHERE no_induk=:no_induk');

// Binding data query dengan variable
$db->bind('no_induk', $no);

// Execute query ke database
$db->execute();

// Mengembalikan ke halaman data_buku.php
header("Location: ../data_buku.php");
?>