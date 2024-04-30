<?php

// Menambahkan class database
require('../db/database.php');
$db = new Database();

// mengambil data menggunakan POST
$id = $_POST['id'];
$no = $_POST['no_induk'];
$id_cus = $_POST['id_cus'];

$db->query('UPDATE loans SET id_cus = :id_cus, no_induk = :no_induk WHERE id = :id');

$db->bind(':id', $id);
$db->bind(':id_cus', $id_cus);
$db->bind(':no_induk', $no);

$db->execute();

header("Location: ../data_peminjaman.php");