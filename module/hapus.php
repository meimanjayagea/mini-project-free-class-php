<?php
require_once('main.php');

$id = $_GET['id'];
$sql = "DELETE FROM todos WHERE id = $id";
$eksekusi = query($sql);

if($eksekusi){
    header('location: ../index.php?pesan=Data berhasil di Hapus');
}else{
    header('location: ../index.php?pesan=Data gagal di hapus');
}
?>