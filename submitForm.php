<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<style>
<style>
    body {
        background: #CCCCCC;
    }

    .container {
        width: 650px;
        margin: 0 auto;
        background: #f6f6f6;
        border: 1px solid #2C3E50;
        border-radius: 3px;
        padding: 5px;
    }

    .container form {
        max-width: 100%;
    }

    .container label {
        display: block;
        margin-bottom: 5px;
    }

    .container input[type="text"], 
    .container input[type="url"],
    .container textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box; 
    }

    .container button[type="submit"] {
        background-color: #008CBA;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .container a button[type="button"] {
        background-color: #E74C3C;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    h3 {
        text-align: center;
    }

</style>
<title>Formulir Pengajuan Permohonan</title>
</head>
<body>

<h1>Formulir Pengajuan Permohonan</h1>
<a class="button create-btn" href="index.php">Kembali</a>
<form action="submit_form.php" method="POST">
    <div class="container">
    Nama: <input type="text" name="nama" required><br>
    Alamat: <input type="text" name="alamat" required><br>
    Pekerjaan: <input type="text" name="pekerjaan" required><br>
    Kontak (Telepon/Email): <input type="text" name="kontak" required><br>
    Rincian Informasi: <textarea name="rincian" required></textarea><br>
    Tujuan Penggunaan: <textarea name="tujuan" required></textarea><br>
    Cara Memperoleh Informasi:
    <select name="cara_memperoleh" required>
        <option value="Melihat/membaca/mendengarkan/mencatat">Melihat/membaca/mendengarkan/mencatat</option>
        <option value="Mendapat Salinan informasi (hardcopy/softcopy)">Mendapat Salinan informasi (hardcopy/softcopy)</option>
    </select><br>
    Cara Mendapatkan Salinan Informasi:
    <select name="cara_mendapatkan" required>
        <option value="Mengambil Langsung">Mengambil Langsung</option>
        <option value="Kurir">Kurir</option>
        <option value="Pos">Pos</option>
        <option value="Faksimil">Faksimil</option>
        <option value="Email">Email</option>
    </select><br>
    <input type="submit" value="Ajukan Permohonan">
    </div>
</form>

</body>
</html>




