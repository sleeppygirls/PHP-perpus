<?php
require('../db/database.php');

// print_r($_POST);
$id_cus = $_POST['id_cus'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jk = $_POST['jk'];


$db = new Database();

// MENGGUNAKAN BIND
$db->query('INSERT INTO customers (id_cus, nama, alamat, telp, jk) VALUES 
(:id_cus, :nama, :alamat, :telp, :jk)');

$db->bind(':id_cus', $id_cus);
$db->bind(':nama', $nama);
$db->bind(':alamat', $alamat);
$db->bind(':telp', $telp);
$db->bind(':jk', $jk);

$db->execute();

header("Location:../data_cus.php");
