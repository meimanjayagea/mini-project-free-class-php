<?php
require_once('main.php');

$id = $_POST['id'];
$aktivitas = $_POST['aktivitas'];

$sql = "UPDATE todos SET aktivitas = '$aktivitas' WHERE id = $id";
$eksekusi = query($sql);

if($eksekusi){
    header('location: ../index.php?pesan=Aktivitas Berhasil diubah');
}else{
    header('location: ../index.php?pesan=Aktivitas Gagal diubah');
}
?>