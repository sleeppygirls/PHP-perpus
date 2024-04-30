<?php

// Menambahkan class database
require('../db/database.php');
$db = new Database();

$username = $_POST['username'];
$jk = $_POST['jk'];
$status = $_POST['status'];

$db->query('UPDATE admins SET jk = :jk, status = :status WHERE username = :username');

$db->bind(':username', $username);
$db->bind(':jk', $jk);
$db->bind(':status', $status);

$db->execute();

header ("Location: ../data_admin.php");