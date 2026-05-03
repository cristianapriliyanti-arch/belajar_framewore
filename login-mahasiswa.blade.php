<!DOCTYPE html>
<html>
<head>
    <title>Login Mahasiswa</title>
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
            text-align: center;
            font-weight: bold;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        .card {
            width: 350px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .card-header {
            background: #0d6efd;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .card-body {
            padding: 20px;
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

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="navbar">Sistem Informasi Anggota HMIT</div>

<div class="container">
    <div class="card">
        <div class="card-header">Login Mahasiswa</div>
        <div class="card-body">

            @if(session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif

            <form method="POST" action="/login-mahasiswa">
                @csrf
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button>Login</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>