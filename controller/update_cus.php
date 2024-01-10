<?php

// Menambahkan class database
require('../db/database.php');
$db = new Database();

// Mengambil data no menggunakan POST
$id_cus = $_POST['id_cus'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jk = $_POST['jk'];

 // Membuat query update data
 $db->query('UPDATE customers SET nama = :nama, alamat = :alamat, telp = :telp, jk = :jk WHERE id_cus = :id_cus');

// Binding data query dengan variable
$db->bind(':id_cus', $id_cus);
$db->bind(':nama', $nama);
$db->bind(':alamat', $alamat);
$db->bind(':telp', $telp);
$db->bind(':jk', $jk);

// Execute query ke database
$db->execute();


// Mengembalikan ke halaman data_cus.php
header("Location: ../data_cus.php");
