<?php
session_start(); // Memulai sesi

// Cek apakah ada data buku di sesi
$bukuList = $_SESSION['buku'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }   
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h2>Daftar Buku</h2>
    <?php if (!empty($bukuList)): ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <?php $number = 1;  ?>
            <tbody>
                <?php foreach ($bukuList as $index => $buku): ?>
                    <tr>
                        <td><?= $number++ ?></td>
                        <td><?= htmlspecialchars($buku['judul']) ?></td>
                        <td><?= htmlspecialchars($buku['penulis']) ?></td>
                        <td><?= htmlspecialchars($buku['terbit']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Belum ada buku yang ditambahkan.</p>
    <?php endif; ?>
    <?php //session_destroy() ?>
</body>
</html>
