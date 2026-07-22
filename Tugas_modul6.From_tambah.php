<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

    <style>
        body{
            margin:0;
            padding:0;
            background:#f4f6f9;
            font-family:Arial, Helvetica, sans-serif;
        }

        .container{
            width:380px;
            margin:60px auto;
            background:#fff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 12px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            color:#2c3e50;
            margin-bottom:25px;
        }

        label{
            font-weight:bold;
            color:#444;
        }

        input[type=text],
        input[type=number]{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:18px;
            border:1px solid #ccc;
            border-radius:6px;
            box-sizing:border-box;
        }

        input[type=submit]{
            width:100%;
            background:#4CAF50;
            color:white;
            padding:12px;
            border:none;
            border-radius:6px;
            cursor:pointer;
            font-size:16px;
        }

        input[type=submit]:hover{
            background:#45a049;
        }

        .kembali{
            display:block;
            text-align:center;
            margin-top:15px;
            text-decoration:none;
            color:#0066cc;
            font-weight:bold;
        }

        .kembali:hover{
            text-decoration:underline;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>➕ Form Tambah Produk</h2>

    <form action="proses_tambah.php" method="post">

        <label>Nama Produk</label>
        <input type="text" name="nama_produk" placeholder="Masukkan nama produk" required>

        <label>Harga</label>
        <input type="number" name="harga" placeholder="Masukkan harga" required>

        <label>Stok</label>
        <input type="number" name="stok" placeholder="Masukkan jumlah stok" required>

        <input type="submit" value="💾 Simpan Produk">

    </form>

    <a href="index.php" class="kembali">← Kembali ke Daftar Produk</a>
</div>

</body>
</html>
