<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anggota</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h3 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #0d6efd;
            color: white;
            border: none;
            border-radius: 5px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Tambah Anggota</h3>

    <form method="POST" action="/simpan-anggota">
        @csrf

        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="angkatan" placeholder="Angkatan" required>
        <input type="text" name="wa" placeholder="No WhatsApp" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="/dashboard-admin">Kembali</a>
</div>

</body>
</html>