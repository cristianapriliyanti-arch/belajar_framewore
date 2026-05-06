<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
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
        }

        .container {
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
        }

        .card-body {
            padding: 20px;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            background: #0d6efd;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="navbar">Sistem Informasi Anggota HMIT</div>

<div class="container">
    <div class="card">
        <div class="card-header">Login Admin</div>
        <div class="card-body">

            <form method="POST" action="/login-admin">
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