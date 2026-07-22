<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    die("ID produk tidak ditemukan!");
}

$id = $_GET['id'];

$sql = "SELECT * FROM produk WHERE id_produk='$id'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Data tidak ditemukan!");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Produk</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(135deg,#6a11cb,#2575fc);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    width:420px;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
    animation:muncul .6s;
}

@keyframes muncul{
    from{
        opacity:0;
        transform:translateY(-30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

h2{
    text-align:center;
    color:#2575fc;
    margin-bottom:25px;
}

label{
    display:block;
    margin-bottom:6px;
    font-weight:bold;
    color:#555;
}

input[type=text],
input[type=number]{
    width:100%;
    padding:12px;
    margin-bottom:18px;
    border:2px solid #ddd;
    border-radius:10px;
    font-size:15px;
    transition:.3s;
}

input[type=text]:focus,
input[type=number]:focus{
    border-color:#2575fc;
    outline:none;
    box-shadow:0 0 10px rgba(37,117,252,.3);
}

button{
    width:100%;
    padding:13px;
    background:linear-gradient(135deg,#2575fc,#6a11cb);
    color:#fff;
    border:none;
    border-radius:10px;
    font-size:16px;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    transform:scale(1.03);
}

.kembali{
    display:block;
    margin-top:18px;
    text-align:center;
    text-decoration:none;
    color:#2575fc;
    font-weight:bold;
}

.kembali:hover{
    text-decoration:underline;
}

</style>

</head>
<body>

<div class="container">

<h2>✏️ Edit Data Produk</h2>

<form action="proses_edit.php" method="POST">

<input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>">

<label>Nama Produk</label>
<input type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>" required>

<label>Harga</label>
<input type="number" name="harga" value="<?php echo $row['harga']; ?>" required>

<label>Stok</label>
<input type="number" name="stok" value="<?php echo $row['stok']; ?>" required>

<button type="submit">💾 Update Produk</button>

</form>

<a href="index.php" class="kembali">⬅ Kembali ke Daftar Produk</a>

</div>

</body>
