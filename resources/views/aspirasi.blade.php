<!DOCTYPE html>
<html>
<head>
    <title>Form Aspirasi</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #43e97b, #38f9d7);
            text-align: center;
        }

        .container {
            background: white;
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }

        button {
            background: #43e97b;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Aspirasi Mahasiswa</h2>

    <form action="/aspirasi" method="POST">
        @csrf

        <input type="text" name="nama" placeholder="Nama"><br>
        <input type="text" name="nim" placeholder="NIM"><br>
        <textarea name="isi" placeholder="Tulis Aspirasi Anda"></textarea><br>

        <button type="submit">Kirim</button>
    </form>
</div>

</body>
</html>