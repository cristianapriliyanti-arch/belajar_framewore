<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Anggota</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: fadeIn 0.8s ease-in-out;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #4facfe;
            outline: none;
            box-shadow: 0 0 5px rgba(79,172,254,0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(to right, #4facfe, #00c6ff);
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.03);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .link {
            margin-top: 15px;
            font-size: 14px;
        }

        .link a {
            text-decoration: none;
            color: #4facfe;
            font-weight: bold;
        }

        .link a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 500px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Pendaftaran Anggota</h2>

    <form action="/daftar" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama">
        </div>

        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" placeholder="Masukkan NIM">
        </div>

        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" placeholder="Masukkan jurusan">
        </div>

        <div class="form-group">
            <label>Angkatan</label>
            <input type="text" name="angkatan" placeholder="Contoh: 2023">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email">
        </div>

        <div class="form-group">
            <label>Alasan Bergabung</label>
            <textarea name="alasan" rows="3" placeholder="Tulis alasan..."></textarea>
        </div>

        <button type="submit">Daftar Sekarang</button>
    </form>

    <div class="link">
        <a href="/aspirasi">➡ Ke Form Aspirasi</a>
    </div>
</div>

</body>
</html>