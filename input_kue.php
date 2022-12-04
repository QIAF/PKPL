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
        margin-top:180px;
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

<form method="post" action="">
    <table>
        <tr>
            <td>ID Kue</td>
            <td>:</td>
            <td><input type="text" name="id_kue"></td>
        </tr>
        <tr>
            <td>Nama Kue</td>
            <td>:</td>
            <td><input type="text" name="nama_kue"></td>
        </tr>
        <tr>
            <td>Jenis Kue</td>
            <td>:</td>
            <td><select name="jenis_kue">
                <option disabled selected value="">--pilih--</option>
                <option name="Klemben">Klemben</option>
                <option name="Kemojo">Kemojo</option>
                <option name="Suri">Suri</option>
                <option name="Peca">Peca</option>
                <option name="Koja">Koja</option>
                </select>
        </td>
        </tr>
        <tr>
            <td>Harga Kue</td>
            <td>:</td>
            <td><input type="number" name="harga_kue"></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>:</td>
            <td><input type="number" name="stock"></td>
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
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $simpan= mysqli_query($konek, "INSERT INTO data_produk (id_kue,nama_kue,jenis_kue,harga_kue,stock) 
    VALUES('$_POST[id_kue]','$_POST[nama_kue]','$_POST[jenis_kue]','$_POST[harga_kue]','$_POST[stock]')");
    if($simpan){
        header('location:data_kue.php');
    }
    else{
        echo"Gagal Menyimpan Data!";
    }
}
?>
