<!DOCTYPE html> 
<html> 
<head> 
    <title>Info Data Kue</title>
    <style> 
    body{
        background: url(aaa.jpg);
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
    .tombol{
        
        background-color: salmon;
        color: #fff;
        border-radius: 3px;
        width: 200px;
        height: 40px;
    }
    .tombol:hover{
        background-color: red;
        color: white;
        border-radius: 3px;
        width: 200px;
        height: 40px;
    }
    .footer{
        margin-top:320px;
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

<h3>Data Hasil Penjualan</h3>
<hr>
<a href="input_laporan.php">Tambah Data</a>
<table border="1" cellspacing="0" width="100%">
    <tr>
        <th>No</th>
        <th>ID Penjualan</th>
        <th>Waktu</th>
        <th>Banyak Terjual</th>
        <th>Hasil Keuntungan</th>
        <th>Aksi</th>
    </tr>
    </div>
    
    <?php
    include "koneksi.php";
    $no=1;
    $sqlcabang = mysqli_query($konek, "SELECT * FROM laporan_penjualan ORDER BY id_penjualan ASC");
    while($d = mysqli_fetch_array($sqlcabang)){
        echo"<tr>
        <td align='center'>$no</td>
        <td align='center'>$d[id_penjualan]</td>
        <td align='center'>$d[waktu]</td>
        <td align='center'>$d[banyak_terjual]</td>
        <td align='center'>$d[hasil_keuntungan]</td>
        <td align='center'>
            <a href = 'edit_laporan.php?id_penjualan=$d[id_penjualan]'>Edit</a> | <a href = 'hapus_laporan.php?id_penjualan=$d[id_penjualan]'>Hapus</a>  
        </td>
        </tr>";
        $no++;
    }
    ?>
</table>

<br>
        <br>
        <table>
        <form action="halutama.php">
            <input class="tombol" type="submit" value="Home">
        </form>
    <div class="footer">
    <p>Copyright &copy; Rizki Alamsyah | 2000018430</p>
    </div>