<?php

require 'functions.php';

// cek apakah tombol button sudah di pencet atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* style halaman tambah */
.kotak {
    border : 1px solid black;
    width: 300px;
    border-radius: 5px;
}
ul li {
    list-style: none;
}
label {
    margin:5px;
}
input {
    margin: 5px 0px;
    padding: 5px;
    border-radius: 5px;
    border: none;
    border-bottom: 1px solid black;
}
button {
    padding: 5px;
    border-radius: 5px;
    background-color: teal;
    color: white;
    width: 100px;
    border: none;
    border-bottom: 2px solid black;
}
button:hover {
    background-color: salmon;

}
    </style>
</head>
<body>
    <h2>Tambah Data Barang</h2>

    <form action="" method="post">
        <div class="kotak">
        <ul>
            <li>
                <label for="gambar">Gambar : </label><br>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <label for="nama_barang">Nama Barang : </label><br>
                <input type="text" name="nama_barang" id="nama_barang" required>
            </li>
            <li>
                <label for="kategori">Kategori : </label><br>
                <input type="text" name="kategori" id="kategori" required>
            </li>
            <li>
                <label for="harga_jual">Harga Jual: </label><br>
                <input type="text" name="harga_jual" id="harga_jual" required>
            </li>
            <li>
                <label for="harga_beli">Harga Beli : </label><br>
                <input type="text" name="harga_beli" id="harga_beli" required>
            </li>
            <li>
                <label for="stok">Stok : </label><br>
                <input type="text" name="stok" id="stok" required>
            </li>
            <br>
            <button type="submit" name="submit">Kirim Data!</button>
        </ul>
        </div>
    </form>
</body>
</html>