<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
    <style>
        body { font-family: Arial; margin:0; background:#f4f6f9; }

        .navbar {
            background:#0d6efd;
            color:white;
            padding:15px;
            display:flex;
            justify-content:space-between;
        }

        .container { padding:20px; }

        table {
            width:100%;
            border-collapse: collapse;
            background:white;
        }

        th, td {
            padding:10px;
            border:1px solid #ddd;
        }

        .btn {
            padding:5px 10px;
            border:none;
            border-radius:5px;
            color:white;
        }

        .detail { background:#17a2b8; }
        .edit { background:#ffc107; }
        .hapus { background:#dc3545; }
    </style>
</head>
<body>

<div class="navbar">
    <div>Sistem Informasi Anggota HMIT</div>
    <div>
        <a href="#" style="color:white;">Daftar Anggota</a>
        <a href="/logout" style="color:white;">Logout</a>
    </div>
</div>

<div class="container">

<h3>Daftar Anggota HMIT</h3>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Angkatan</th>
    <th>WhatsApp</th>
    <th>Aksi</th>
</tr>

<tr>
    <td>1</td>
    <td>Cristian Apriliyanti</td>
    <td>241001007</td>
    <td>2024</td>
    <td>0853xxxxxxxx</td>
    <td>
        <button class="btn detail">Detail</button>
        <button class="btn edit">Edit</button>
        <button class="btn hapus">Hapus</button>
    </td>
</tr>

</table>

</div>

</body>
</html>