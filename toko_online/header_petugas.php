<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Petugas - Sparepart Racing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background: #111; /* Warna hitam sebagai dasar untuk memberi kesan racing */
            font-family: 'Arial', sans-serif;
            color: #f5f5f5; /* Teks berwarna terang untuk kontras */
        }
        .navbar {
            background-color: #D32F2F; /* Warna merah balap */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            color: white;
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff;
            text-transform: uppercase; /* Gaya kapital untuk kesan tegas */
        }
        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            transition: color 0.3s ease-in-out; /* Transisi halus pada hover */
        }
        .nav-link:hover {
            color: #FFD700; /* Warna kuning saat hover */
        }
        .nav-link.active {
            color: #fff;
            font-weight: bold;
        }
        .dashboard-container {
            padding: 40px;
            text-align: center;
            background-color: #1b1b1b;
            border-radius: 10px;
            margin-top: 50px;
            animation: fadeIn 1s ease-in-out; /* Animasi masuk halus */
        }
        h2 {
            color: #FFEB3B; /* Warna kuning racing */
            font-size: 2.5rem;
            font-weight: bold;
        }
        .lead {
            color: #BDBDBD;
            font-size: 1.2rem;
        }
        .dashboard-container:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out; /* Animasi zoom saat hover */
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PETUGAS RACING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home_petugas.php">Home</a>
            </li>

            <!-- Daftar Petugas: Hanya untuk CEO -->
            <?php if ($_SESSION['level'] == 'CEO'): ?>
            <li class="nav-item">
              <a class="nav-link" href="tampil_petugas.php">Daftar Petugas</a>
            </li>
            <?php endif; ?>

            <!-- Daftar Pelanggan: Hanya untuk CEO dan Manager -->
            <?php if ($_SESSION['level'] == 'CEO' || $_SESSION['level'] == 'Manager'): ?>
            <li class="nav-item">
              <a class="nav-link" href="tampil_pelanggan.php">Daftar Pelanggan</a>
            </li>
            <?php endif; ?>

            <!-- Riwayat Transaksi: Hanya untuk CEO, Manager dan Admin -->
            <?php if ($_SESSION['level'] == 'CEO' || $_SESSION['level'] == 'Manager' || $_SESSION['level'] == 'Admin'): ?>
            <li class="nav-item">
              <a class="nav-link" href="riwayat_transaksi_petugas.php">Riwayat Transaksi</a>
            </li>
            <?php endif; ?>

            <li class="nav-item">
              <a class="nav-link" href="daftar_produk.php">Daftar Produk</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="tambah_produk.php">Tambah Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Dashboard Content -->
    <div class="dashboard-container">
        <h2>Selamat Datang, <?=$_SESSION['level']?> <?=$_SESSION['nama_petugas']?> di Dashboard Petugas Racing</h2>
        <p class="lead">Kelola data pelanggan, produk, dan transaksi di toko sparepart motor racing ini.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
