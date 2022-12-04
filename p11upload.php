0<!DOCTYPE html> 
<html> 
<head> 
    <title>Praktikum 11 UPLOAD</title>
    <style> 
    body{
        background: url(bg.jpg);
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
    .mid{
        font-size:20px; 
    }
    h2{
        text-align: center;
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
</head> 
<body>
    
    <header>
			<h1>Toko Bolu</h1>
			<h2><b>
            <?php echo date('l, d-m-Y');
            date_default_timezone_set('Asia/Jakarta');
			echo " | " .date("H:i:s A") ." WIB";?>
			</h2></b>
	</header>
    <div class="mid" align="center">
    <br><br><br><br><br><br>
    <?php
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file = $_FILES['fupload']['name'];
    $deskripsi = $_POST['deskripsi'];
    $direktori = "gambar/$nama_file";

    if (move_uploaded_file($lokasi_file, $direktori)){
    echo "Nama File : <b>$nama_file</b> berhasil di upload <br>";
    echo "Deskripsi File : $deskripsi";

    $myDir = "gambar/";
    $dir = opendir($myDir);
    echo "<br>Isi folder (klik link untuk download) : <br>";

    while($tmp = readdir($dir)){
    echo "<a href='$myDir$nama_file' target='_blank'>$tmp</a><br>";
    }

    closedir($dir);
    }

    else{
    echo "<h2>FILE GAGAL DIUPLOAD</h2>";
    }
    ?></div><br><br>
            
    <div align="center">
    <form class="tamu" method="post" action="p11.php">
    <input type="submit" value=":: KEMBALI ::">  </div> 

    <div class="footer">
	<p>Copyright &copy; Rizki Alamsyah | 2000018430</p>
    </div>
</body> 
</html>