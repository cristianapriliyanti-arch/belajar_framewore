<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>HMIT</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }

        .hero {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            padding: 120px 20px;
            text-align: center;
            border-radius: 0 0 50px 50px;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 40px;
        }

        .card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: 0.3s;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .kesra-img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">HMIT</span>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1>Himpunan Mahasiswa Informatika</h1>
        <p class="lead">CIPTA KARA</p>
        <a href="#" class="btn btn-light"></a>
    </div>
</section>

<!-- VISI MISI -->
<section class="container py-5">
    <h2 class="text-center section-title">Visi & Misi</h2>

    <div class="row">
        <div class="col-md-6">
            <h4>Visi</h4>
            <p>
                Mewujudkan Himpunan Mahasiswa Informatika Yang Progresif, Kolaboratif, Dan Berdampak
            Melalui Inisiatif-Inisiatif Inovatif Yang Relevan Dengan Perkembangan Teknologi 
            Dan Kebutuhan Mahasiswa.
            </p>
        </div>

        <div class="col-md-6">
            <h4>Misi</h4>
            <ul>
                <li>Mendorong budaya inisiatif mahasiswa dalam pengembangan akademik, minat bakat, dan karya teknologi.</li>
                <li>Menghadirkan program kerja yang inovatif dan relevan guna meningkatkan kolaborasi antar anggota himpunan.</li>
                <li>Menghadirkan program kerja yang inovatif dan relevan guna meningkatkan kolaborasi antar anggota himpunan.</li>
                <li>Menciptakan lingkungan kerja yang solid, harmonis dan inklusif dengan tetap mengedepankan profesionalisme.</li>
            </ul>
        </div>
    </div>
</section>

<!-- DEPARTEMEN KESRA -->
<section class="container py-5">
    <h2 class="text-center section-title">Departemen KESRA</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <!-- GAMBAR LOKAL -->
               <img src="/images/kesra_pride.jpg" class="kesra-img">

                <div class="p-4">
                    <h4>(KESRA) Kesenian & Olahraga</h4>
                    <p>
                        Departemen KESRA berperan dalam mengembangkan minat dan bakat mahasiswa 
                        di bidang seni dan olahraga, serta meningkatkan kebersamaan dan kesejahteraan anggota.
                    </p>

                    <ul>
                        <li>Kegiatan seni tari dan kreativitas lainnya </li>
                        <li>Turnamen olahraga</li>
                        <li>Pengembangan bakat mahasiswa</li>
                        <li>Meningkatkan solidaritas</li>
                    </ul>

                    <a href="#" class="btn btn-primary"></a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3">
    <p>HMIT</p>
</footer>

</body>
</html>