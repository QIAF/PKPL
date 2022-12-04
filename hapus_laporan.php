<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM laporan_penjualan WHERE id_penjualan='$_GET[id_penjualan]'");

if($hapus){
    header('location:data_laporan.php');
}else{
    echo"Gagal Menghapus Data!";
}
?>