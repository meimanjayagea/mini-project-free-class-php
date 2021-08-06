<?php
require_once('main.php');

$aktivitas = $_POST['aktivitas'];
$sql = "INSERT INTO todos (aktivitas) VALUES ('$aktivitas')";
$eksekusi = query($sql);

if($eksekusi){
    header('location: ../index.php?pesan=Data berhasil di tambah');
}else{
    header('location: ../index.php?pesan=Data gagal di tambah');
}
?>