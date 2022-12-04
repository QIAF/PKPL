<!DOCTYPE html> 
<html> 
<head> 
    <title>Info Data Kue</title>
    <style> 
    body{
        background: url(kayu.jpg);
        background-size:cover;
        background-attachment: fixed;
    }
    header{
	    position: relative;
	    top: 0%;
	    height: 70px;
        color:#483D8B;
    	border-bottom: 4px solid #6A5ACD;
        border:left 0px;
        border-right: 0px;
	    text-align: center;
        line-height:15px;
        text-shadow: 2px -2px 15px #7FFFD4;
    }
    .wrap{ 
        background-color:rgba(255,255,255,0.7);
        width: 800px; 
        color:#800080;
        margin: 20px auto; 
        padding:15px; 
        box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.65);
        border-radius: 8px;
    }
    h2{
        text-align: center;
    }
    .footer{
        margin-top:280px;
        padding: 1px;
        background-color: #483D8B;
        text-align: center;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        font-style: italic
        }
    .footer:hover{
        color: #fff;
        background-color: #6A5ACD;
  	    border-color: red;
        }
    </style>
    <header>
			<h1>Toko Bolu</h1>
			<h2><b>
            <?php echo date('l, d-m-Y');
            date_default_timezone_set('Asia/Jakarta');
			echo " | " .date("H:i:s A") ." WIB";?>
			</h2></b>
	</header>
    <div class="wrap">
    <div><strong><font size="6" face="Courier New, Courier, mono">Update</font></strong></div>
    <h4> Silahkan Masukkan Update Data Hari Ini :</h4>
<?php
include "koneksi.php";
$sqlEdit = mysqli_query($konek, "SELECT * FROM laporan_penjualan WHERE id_penjualan='$_GET[id_penjualan]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<form method="post" action="">
    <table>
        <tr>
            <td>ID Penjualan</td>
            <td>:</td>
            <td><input type="text" name="id_penjualan" value="<?php echo $e['id_penjualan']?>" readonly></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>:</td>
            <td><input type="datetime" name="waktu" value="<?php echo $e['waktu']?>"></td>
        </tr>
        <tr>
            <td>banyak_terjual</td>
            <td>:</td>
            <td><input type="number" name="banyak_terjual" value="<?php echo $e['banyak_terjual']?>"></td>
        </tr>
        <tr>
            <td>Hasil Keuntungan</td>
            <td>:</td>
            <td><input type="number" name="hasil_keuntungan" value="<?php echo $e['hasil_keuntungan']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>
    </div>
    <div class="footer">
    <p>Copyright &copy; Rizki Alamsyah | 2000018430</p>
    </div>  
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $update= mysqli_query($konek, "UPDATE laporan_penjualan SET id_penjualan = '$_POST[id_penjualan]', waktu = '$_POST[waktu]', banyak_terjual = '$_POST[banyak_terjual]', hasil_keuntungan = '$_POST[hasil_keuntungan]' 
    WHERE id_penjualan = '$_POST[id_penjualan]' ");
    if($update){
        header('location:data_laporan.php');
    }
    else{
        echo"Gagal Mengupdate Data!";
    }
}
?>
