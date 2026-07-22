<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f6f9;
            margin:0;
            padding:20px;
        }

        .container{
            width:90%;
            margin:auto;
            background:#fff;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            color:#333;
        }

        .btn{
            display:inline-block;
            background:#28a745;
            color:white;
            padding:10px 15px;
            text-decoration:none;
            border-radius:5px;
            margin-bottom:15px;
            font-weight:bold;
        }

        .btn:hover{
            background:#218838;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{
            background:#007bff;
            color:white;
            padding:10px;
        }

        table td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        table tr:nth-child(even){
            background:#f9f9f9;
        }

        table tr:hover{
            background:#eef5ff;
        }

        .edit{
            background:#007bff;
            color:white;
            padding:5px 10px;
            border-radius:5px;
            text-decoration:none;
        }

        .hapus{
            background:#dc3545;
            color:white;
            padding:5px 10px;
            border-radius:5px;
            text-decoration:none;
        }

        .edit:hover{
            background:#0056b3;
        }

        .hapus:hover{
            background:#c82333;
        }
    </style>
</head>

<body>

<div class="container">

<h2>📦 Daftar Produk Toko Online</h2>

<a href="form_tambah.php" class="btn">+ Tambah Produk Baru</a>

<table>
    <thead>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

<?php
include 'koneksi.php';

$sql = "SELECT id_produk, nama_produk, harga, stok FROM produk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$row["id_produk"]."</td>";
        echo "<td>".$row["nama_produk"]."</td>";
        echo "<td>Rp ".number_format($row["harga"],0,',','.')."</td>";
        echo "<td>".$row["stok"]."</td>";
        echo "<td>
                <a class='edit' href='form_edit.php?id=".$row["id_produk"]."'>✏ Edit</a>
                <a class='hapus' href='hapus.php?id=".$row["id_produk"]."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>🗑 Hapus</a>
              </td>";

        echo "</tr>";
    }

} else {

    echo "<tr><td colspan='5'>Belum ada data produk.</td></tr>";

}

$conn->close();
?>

    </tbody>

</table>

</div>

</body>

</html>
