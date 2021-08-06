<?php
require_once('main.php');

$id = $_GET['id'];
$sql = "UPDATE todos SET selesai = 1 WHERE id = $id";
$eksekusi = query($sql);

if($eksekusi){
    header('location: ../index.php?pesan=Aktivitas Berhasil diseleaikan');
}else{
    header('location: ../index.php?pesan=Aktivitas Gagal diseleaikan');
}
?>