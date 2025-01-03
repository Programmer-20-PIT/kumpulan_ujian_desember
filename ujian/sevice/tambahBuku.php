<?php
session_start();

if (!isset($_SESSION['buku'])){
    $_SESSION['buku'] = [];
}
if (isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahunTerbit = $_POST['terbit'];

    if(!empty($judul) && !empty($penulis) && !empty($tahunTerbit)){
        $_SESSION['buku'][] =[
            'judul'=> $judul,
            'penulis'=> $penulis,
            'terbit'=> (int)$tahunTerbit
        ];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/tambahBuku.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="form-container">
        <h2>Tambah Buku</h2>
        <p>judul : <input type="text" name="judul"></p>
        <p>penulis : <input type="text" name="penulis"></p>
        <p>Tahun Terbit : <input type="text" name="terbit"></p>
        <button type="submit" name="submit">TAMBAH</button>
    </form>  
</body>
</html>