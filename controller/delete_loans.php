<?php

// Menambahkan class database
require('../db/database.php');
$db = new Database();

//mengambil data id menggunakan get
$id = $_GET['id'];

$db->query('DELETE FROM loans WHERE id=:id');

$db->bind(':id', $id);

$db->execute();

header("Location: ../data_peminjaman.php");