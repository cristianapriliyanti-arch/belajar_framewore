<!DOCTYPE html>
<html>
<head>
    <title>Hasil Aspirasi</title>
</head>
<body>

<h2>Aspirasi Anda</h2>

<p><b>Nama:</b> {{ $data['nama'] }}</p>
<p><b>NIM:</b> {{ $data['nim'] }}</p>
<p><b>Isi Aspirasi:</b> {{ $data['isi'] }}</p>

<br>
<a href="/aspirasi">Kembali</a>

</body>
</html>