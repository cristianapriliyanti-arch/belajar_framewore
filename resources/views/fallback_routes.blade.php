<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <style>
        /* Base Reset */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0f172a; /* Dark Navy */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f8fafc;
        }

        .container {
            text-align: center;
            max-width: 600px;
            padding: 40px;
            border-radius: 24px;
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border: 1px solid #334155;
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        }

        /* Typography */
        .brand-icon {
            font-size: 40px;
            margin-bottom: 20px;
            display: inline-block;
            color: #38bdf8; /* Sky Blue */
        }

        .error-code {
            font-size: 120px;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 10px;
            background: linear-gradient(to bottom, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -5px;
        }

        .status-tag {
            display: inline-block;
            padding: 6px 16px;
            background-color: rgba(56, 189, 248, 0.1);
            border: 1px solid rgba(56, 189, 248, 0.2);
            color: #38bdf8;
            border-radius: 100px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 16px;
            color: #ffffff;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #94a3b8;
            margin-bottom: 30px;
        }

        /* Accent Line */
        .line {
            width: 60px;
            height: 4px;
            background: #38bdf8;
            margin: 0 auto 30px auto;
            border-radius: 2px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-icon">⚠</div>
        
        <div class="error-code">404</div>
        
        <div class="status-tag">Page Not Found</div>
        
        <div class="line"></div>
        
        <h1>Halaman Tidak Ditemukan</h1>
        
        <p>
            Halaman yang Anda minta tidak tersedia . 
            Pastikan alamat URL sudah benar atau hubungi tim pengembang jika kendala berlanjut.
        </p>
    </div>

</body>
</html>