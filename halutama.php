<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toko Bolu</title>
    <style type="text/css">
    header{
	    position: relative;
        top: 0%;
        height: 80px;
        text-align: center;
        color: #fff;
        background-color: pink;
        padding-top: 1px;
    }

    .kiri{
        float: left;
        border: 5px ridge pink ;
        width: 400px;
        height: 500px;
        margin-left: 5%;
        margin-top: 40px;
        background-color: #edf8f5;
    }

    .kiri img{
        width: 350px;
        height: 400px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

    .kiri p{
        text-align: center;
        font-weight: bold;
        font-size: 24pt;
        margin-top: 70px;
    }

    .kanan{
        float: right;
        width: 500px;
        height: auto;
        margin-right: 10%;
        margin-top: 40px;
        border-bottom: 5px groove;
        line-height: 30px;
    }

    .contact{
        float: right;
        width: 500px;
        margin-right: 10%;
        margin-top: 5px;
    }

    .contact img{
        width: 50px;
        height: 50px;
        margin-right: 30px;
        background-color: salmon;
        color: #fff;
        border-radius: 3px;
        width: 100px;
        height: 40px;
    }

    .counter{
        border: 5px outset #1ebea5 ;
        float: right;
        margin-right: 5%;
        margin-top: 50px;
        padding: 2px;
        border-radius: 5px;
        font-weight: bold;
    }

    .counter:hover{
        color: yellowgreen;
    }

    .bukutamu{
        margin-right: auto;
        margin-left: auto;
        margin-top: 55%;
        padding: 2px;
        border-radius: 5px;
        font-weight: bold;
        width: 300px;
        height: auto;
        text-align: center;
        padding-bottom: 100px;
        
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
        position:absolute;
        text-align: center;
        width: 100%;
        height: 50px;
        bottom: 0px;
        background-color: pink;
        color: #fff;
    }
    .footer:hover{
        color: #fff;
        background-color: #6A5ACD;
  	    border-color: red;
        }

    html, body{
        height: 100%;
        margin: 0;
        font-family: Helvetica;
        
    }

    #container{
        min-height: 100%;
        position: relative;
    }

    .form:hover{
        color: #fff;
        background-color: #6A5ACD;
  	    border-color: red;
    }

    </style>
</head>

<body>
<div id="container">

    <header>
        <h1>Pusat Administrasi Toko Bolu</h1>
    </header>

    <div class="kiri">
        <img src="r.jpg" alt="gambar">
    </div>

    <div class="kanan">
        <h2>Selamat Datang!</h2>
        <p text align ="justify">Toko Bolu Adalah salah satu usaha toko dan juga produsen Cake & Tart yang ada  Yogyakarta. 
            Toko roti aneka 1 menawarkan berbagai pilihan roti sesuai dengan moment atau acara apa yang sedang anda adakan baik 
            itu acara ulang tahun, ater-ater nikahan, ater-ater kenduri ,arisan, rapat, seminar, wisuda, weeding, tour&travel, dll. 
            Semua cake & tart diolah dan diracik dengan bahan dasar yang berkualitas,tanpa bahan pengawet,proses pengerjaan yang higienis,
             dan di dukung dengan karyawan berpengalaman dan peralatan produksi yang canggih untuk menghasilkan produksi cake & tart yang 
             berkuallitas dengan harga yang terjangkau.
            </p>
    </div>
    <div class="contact">
        <h2>Info Data Kue Bolu dan Laporan :</h2>
        <table>
        <th>
        <form action="data_kue.php">
            <input class="tombol" type="submit" value="Info Produk">
        </form>
        </th>

        <th>
        <form action="data_log.php">
            <input class="tombol" type="submit" value="Riwayat Perubahan">
        </form>
        </th>

        <th>
        <form action="data_laporan.php">
            <input class="tombol" type="submit" value="Laporan Penjualan">
        </form>
        </th>
        </table>   
    </div>
    <div class="footer">
        <p>Copyright © Muhammad Rizki Alamsyah | 2000018430</p>
    </div>  
</div>
</body>
</html>