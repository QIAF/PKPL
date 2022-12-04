<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM data_produk WHERE id_kue='$_GET[id_kue]'");

if($hapus){
    header('location:data_kue.php');
}else{
    echo"Gagal Menghapus Data!";
}
?>