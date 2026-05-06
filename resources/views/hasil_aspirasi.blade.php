<!DOCTYPE html>
<html>
<head>
    <title>Hasil Aspirasi</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #43e97b, #38f9d7);
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
            margin-bottom: 12px;
            padding: 12px;
            border-radius: 8px;
            background: #f4fdf7;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #222;
            display: block;
            margin-top: 5px;
        }

        .btn {
            margin-top: 20px;
            display: block;
            text-align: center;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            background: linear-gradient(to right, #43e97b, #38f9d7);
            transition: 0.3s;
        }

        .btn:hover {
            transform: scale(1.03);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .link {
            margin-top: 10px;
            text-align: center;
        }

        .link a {
            text-decoration: none;
            color: #43e97b;
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
    <h2>Hasil Aspirasi</h2>

    <div class="data">
        <span class="label">Nama:</span>
        <span class="value">{{ $data['nama'] }}</span>
    </div>

    <div class="data">
        <span class="label">NIM:</span>
        <span class="value">{{ $data['nim'] }}</span>
    </div>

    <div class="data">
        <span class="label">Isi Aspirasi:</span>
        <span class="value">{{ $data['isi'] }}</span>
    </div>

    <a href="/aspirasi" class="btn">⬅ Kembali ke Form</a>


</div>

</body>
</html>