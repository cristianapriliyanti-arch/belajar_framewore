<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
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
            margin-left: 15px;
        }

        .container {
            padding: 20px;
        }

        .alert {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .btn {
            padding: 8px 12px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-tambah { background: #0d6efd; }
        .btn-detail { background: #17a2b8; }
        .btn-edit { background: #ffc107; color: black; }
        .btn-hapus { background: #dc3545; }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #f1f1f1;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div>Sistem Informasi Anggota HMIT</div>
    <div>
        <a href="/dashboard-admin">Dashboard</a>
        <a href="/tambah-anggota">Tambah Anggota</a>
        <a href="/logout">Logout</a>
    </div>
</div>

<!-- CONTENT -->
<div class="container">

    {{-- ALERT SUCCESS --}}
    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- ALERT LOGIN --}}
    @if(session('admin'))
        <div class="alert">
            Berhasil login sebagai Admin
        </div>
    @endif

    <div class="card">

        <div class="header">
            <h3>Daftar Anggota HMIT</h3>
            <a href="/tambah-anggota" class="btn btn-tambah">+ Tambah Anggota</a>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Angkatan</th>
                <th>No WhatsApp</th>
                <th>Aksi</th>
            </tr>

            @php
                $no = 1;
                $anggota = session('anggota', []);
            @endphp

            @forelse($anggota as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['nim'] }}</td>
                <td>{{ $data['angkatan'] }}</td>
                <td>{{ $data['wa'] }}</td>
                <td>
                    <a href="#" class="btn btn-detail">Detail</a>
                    <a href="#" class="btn btn-edit">Edit</a>
                    <a href="#" class="btn btn-hapus">Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">Belum ada data anggota</td>
            </tr>
            @endforelse

        </table>

    </div>

</div>

</body>
</html>