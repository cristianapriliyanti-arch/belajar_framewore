<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Mahasiswa</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f6f9;
        }

        .navbar {
            background: #0d6efd;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }

        .container {
            padding: 20px;
        }

        .alert {
            background: #d4edda;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            color: #155724;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            margin: auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
        }

        td {
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div>Sistem Informasi Anggota HMIT</div>
    <div>
        <a href="#">Dashboard Mahasiswa</a>
        <a href="/logout-mahasiswa">Logout</a>
    </div>
</div>

<div class="container">

    <div class="alert">
        Berhasil login sebagai Mahasiswa
    </div>

    <div class="card">
        <h3 style="text-align:center;">Dashboard Mahasiswa</h3>
        <p style="text-align:center;">
            Selamat datang, <b>{{ $user }}</b>
        </p>

        <table>
            <tr><td><b>NIM</b></td><td>: 241001007</td></tr>
            <tr><td><b>Angkatan</b></td><td>: 2024</td></tr>
            <tr><td><b>Alamat</b></td><td>: Sedan</td></tr>
            <tr><td><b>WhatsApp</b></td><td>: 0853xxxxxxx</td></tr>
        </table>
    </div>

</div>

</body>
</html>