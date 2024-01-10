<?php
require('../db/database.php');

// print_r($_POST);
$no = $_POST['no_induk'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$penerbit = $_POST['penerbit'];
$subjek = $_POST['subjek'];

$photo = null;


$db = new Database();

// Mengambil data gambar
//Di cek apakah gambar ada atau ga
if(isset($_FILES['image'])) {
    // Mengambil data dari input image ke dalam variable $file
    $file = $_FILES['image']['tmp_name'];

    if ($file) {
        // Merubah file gambar menjadi format base64 kemudian di simpan ke dalam variable $photo
        $photo = @base64_encode(file_get_contents($file));
    }
}

// MENGGUNAKAN BIND
$db->query('INSERT INTO books (no_induk, judul, penulis, tahun, penerbit, subjek, photo) VALUES 
(:no_induk, :judul, :penulis, :tahun, :penerbit, :subjek, :photo)');

$db->bind(':no_induk', $no);
$db->bind(':judul', $judul);
$db->bind(':penulis', $penulis);
$db->bind(':tahun', $tahun);
$db->bind(':penerbit', $penerbit);
$db->bind(':subjek', $subjek);
$db->bind(':photo', $photo);

$db->execute();

header("Location:../data_buku.php");
