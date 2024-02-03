<?php

$db = mysqli_connect('localhost', 'root', '', 'ppdb_pesat10');

if (!$db) {
    die("Gagal Terhubung: " . mysqli_connect_error());
}