<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>

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
            width: 420px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: fadeIn 0.8s ease-in-out;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .data {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            background: #f5f7fa;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #222;
        }

        .btn {
            margin-top: 20px;
            display: block;
            text-align: center;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            background: linear-gradient(to right, #4facfe, #00c6ff);
            transition: 0.3s;
        }

        .btn:hover {
            transform: scale(1.03);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
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
    <h2>Data Pendaftaran</h2>

    <div class="data">
        <span class="label">Nama:</span><br>
        <span class="value">{{ $data['nama'] }}</span>
    </div>

    <div class="data">
        <span class="label">NIM:</span><br>
        <span class="value">{{ $data['nim'] }}</span>
    </div>

    <div class="data">
        <span class="label">Jurusan:</span><br>
        <span class="value">{{ $data['jurusan'] }}</span>
    </div>

    <div class="data">
        <span class="label">Angkatan:</span><br>
        <span class="value">{{ $data['angkatan'] }}</span>
    </div>

    <div class="data">
        <span class="label">Email:</span><br>
        <span class="value">{{ $data['email'] }}</span>
    </div>

    <div class="data">
        <span class="label">Alasan Bergabung:</span><br>
        <span class="value">{{ $data['alasan'] }}</span>
    </div>

    <a href="/daftar" class="btn">⬅ Kembali ke Form</a>
</div>

</body>
</html>