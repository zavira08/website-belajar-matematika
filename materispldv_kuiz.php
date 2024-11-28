<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
      .navbar {
        background-color: #00bfff;
      }
      .navbar-brand, .nav-link {
        color: #fff;
      }
      .nav-link:hover {
        color: #ffeb3b;
      }
      .card {
        margin-top: 100px;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      }
      .card:hover {
        transform: scale(1.05);
        transition: all 0.3s ease-in-out;
      }
      .btn-primary {
        background-color: #ff5722;
        border: none;
      }
      .btn-primary:hover {
        background-color: #e64a19;
      }
      .card-footer-bottom {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
 </style>
  
</head>
  <body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Belajar Matematika</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/materispldv_1%20pendahuluan(home).html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/materispldvzavira.html">Materi</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Lainnya
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/materispldv_latihan%20soal.html">Latihan Soal</a></li>
                  <li><a class="dropdown-item" href="#">Kuiz</a></li>
                  <li><a class="dropdown-item" href="materispldv_profil.html">Profil</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Cari Materi" aria-label="Search">
              <button class="btn btn-primary" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </nav>
    </body>
  

<?php
session_start();

// Definisikan soal
if (!isset($_SESSION['soal'])) {
    $_SESSION['soal'] = [
        [
            'pertanyaan' => 'Penyelesaian dari sistem persamaan 2x - 3y = -13 dan x + 2y = 4 adalah...',
            'pilihan' => ['x = -2 dan y = -3', 'x = -2 dan y = 3', 'x = 2 dan y = -3', 'x = 2 dan y = 3', 'x = -1 dan y = -4'],
            'jawaban_benar' => 'x = -2 dan y = 3'
        ],
        [
            'pertanyaan' => 'Jika x dan y adalah penyelesaian dari sistem persamaan 2x + 3y = 3 dan 3x - y = 10, maka nilai dari 2x - y =...',
            'pilihan' => ['3', '4', '5', '7', '1'],
            'jawaban_benar' => '7'
        ],
        [
            'pertanyaan' => 'Berapa metode yang dapat digunakan untuk mencari penyelesaian SPLDV?',
            'pilihan' => ['2', '1', '4', '3', '5'],
            'jawaban_benar' => '4'
        ],
        [ 
            'pertanyaan' => 'Harga 5 pensil dan 2 buku adalah Rp26.000,00, sedangkan harga 3 pensil dan 4 buku Rp38.000,00. Jika harga 1 pensil dinyatakan dengan a dan harga 1 buku dinyatakan dengan b, maka bentuk sistem persamaan linear dua variabel yang tepat sesuai masalah di atas adalah...',
            'pilihan' => ['5a + 2b = 26.000 dan 4a + 3b = 38.000', '5a + 2b = 26.000 dan 3a + 4b = 38.000', '2a + 5b = 26.000 dan 4a + 3b = 38.000', '3a + 4b = 26.000 dan 5a + 2b = 38.000', '2a + 5b = 26.000 dan 3a + 4b = 38.000'],
            'jawaban_benar' => '5a + 2b = 26.000 dan 3a + 4b = 38.000'
        ],
        [
            'pertanyaan' => 'Berikut adalah metode penyelesaian SPLDV, kecuali...',
            'pilihan' => ['campuran', 'grafik', 'substitusi', 'Eliminasi', 'abstrak'],
            'jawaban_benar' => 'abstrak'
        ],
        [
            'pertanyaan' => 'Andi membeli 2 buku tulis dan 3 pensil seharga Rp8.500,00, sedangkan Didit membeli 3 buku tulis dan 2 pensil seharga Rp9.000,00. Jika Anita membeli 1 buku dan 1 pensil, maka ia harus membayar sebesar...',
            'pilihan' => ['Rp.5.000,00', 'Rp.5.500,00', 'Rp.4.000,00', 'Rp.3.500,00', 'Rp.3.000,00'],
            'jawaban_benar' => 'KRp.3.500,00'
        ],
        [
            'pertanyaan' => 'Selisih uang adik dan kakak Rp10.000,00. Dua kali uang kakak ditambah uang adik hasilnya Rp40.000,00. Jumlah uang mereka berdua adalah...',
            'pilihan' => ['Rp35.000,00', 'Rp30.000,00', 'Rp20.000,00', 'Rp10.000,00', 'Rp15.000,00'],
            'jawaban_benar' => 'Rp30.000,00 '
        ],
        [
            'pertanyaan' => 'Berat botol yang terisi air hingga penuh adalah 1.500 gram. Jika botol tersebut hanya berisi air setengah penuh, beratnya menjadi 900 gram. Berat botol tersebut (tanpa diisi air) adalah...',
            'pilihan' => ['300 gram', '350 gram', '500 gram', '200 gram', '250 gram'],
            'jawaban_benar' => '300 gram'
        ],
        [
            'pertanyaan' => 'Banyak variabel pada SPLDV adalah...',
            'pilihan' => ['5', '3', '2', '4', '1'],
            'jawaban_benar' => '2'
        ],
        [
            'pertanyaan' => 'Himpunan penyelesaian dari sistem persamaan x - y = 5 dan 3x - 5y = 5 adalah...',
            'pilihan' => ['{(-2,9)}', '{(10,5)}', '{(-2,-9)}', '{(-5,-10)}', '{(5,10)}'],
            'jawaban_benar' => '{(10,5)}'
        ],
    ];
}

$total_soal = count($_SESSION['soal']);
$current_soal = isset($_GET['soal']) ? (int)$_GET['soal'] : 0;

// Menyimpan jawaban
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jawaban_user = $_POST['jawaban'];
    $_SESSION['jawaban'][$current_soal] = $jawaban_user; // Simpan jawaban pengguna
}

// Fungsi untuk menghitung hasil
function hitungHasil() {
    $benar = 0;
    foreach ($_SESSION['soal'] as $index => $soal) {
        if (isset($_SESSION['jawaban'][$index]) && $_SESSION['jawaban'][$index] === $soal['jawaban_benar']) {
            $benar++;
        }
    }
    $salah = count($_SESSION['soal']) - $benar;
    $nilai = ($benar / count($_SESSION['soal'])) * 100;

    return [
        'benar' => $benar,
        'salah' => $salah,
        'nilai' => $nilai
    ];
}

// Jika user klik tombol selesai
if (isset($_GET['selesai'])) {
    $hasil = hitungHasil();
    session_destroy(); // Hapus session setelah quiz selesai
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Kuis</title>
    </head>
    <body style="background-color:lightblue;">
        <h2>Hasil Kuis</h2>
        <p>Benar: <?php echo $hasil['benar']; ?></p>
        <p>Salah: <?php echo $hasil['salah']; ?></p>
        <p>Nilai: <?php echo number_format($hasil['nilai'], 2); ?></p>
    </body>
    </html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="card text-center card-footer-bottom">
    <div class="card-header">
    Zavira Mardhatillah Maulidia (E1R022099)
        </div>
        <div class="card-body">
          <h5 class="card-title" style="line-height: 1.5;">Program Studi Pendidikan Matematika<br>
            Fakultas Keguruan dan Ilmu Pendidikan<br>
            Universitas Mataram</h5>
        </div>
        <div class="card-footer text-body-secondary">
          2024
    </div>
  </div>

</body>
</html>

    <?php



    exit;
}

// Pastikan current_soal dalam batas
if ($current_soal < 0) {
    $current_soal = 0;
} elseif ($current_soal >= $total_soal) {
    $current_soal = $total_soal - 1; // Kembali ke soal terakhir
}

$soal = $_SESSION['soal'][$current_soal];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuiz SPLDV_Zavira M.M.</title>
    <style>
        .navigasi {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .navigasi a {
            margin: 0 5px;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
        }
        .belum-terjawab {
            background-color: #007BFF; /* Warna biru */
        }
        .sudah-terjawab {
            background-color: #28A745; /* Warna hijau */
        }
        button {
            background-color: pink;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
        }
        body {
                  font-family: 'Times New Roman', Times, serif, sans-serif;
                  background-color: #e0e8ef;
                  margin: 10;
                  padding: 10;
              }
    </style>
</head>
<body style="background-color:lightblue;">

<h2><?php echo $soal['pertanyaan']; ?></h2>
<form action="" method="post">
    <?php foreach ($soal['pilihan'] as $key => $pilihan): ?>
        <input type="radio" name="jawaban" value="<?php echo htmlspecialchars($pilihan); ?>" 
        <?php echo (isset($_SESSION['jawaban'][$current_soal]) && $_SESSION['jawaban'][$current_soal] == $pilihan) ? 'checked' : ''; ?>>
        <?php echo chr(65 + $key) . '. ' . htmlspecialchars($pilihan); ?><br>
    <?php endforeach; ?>
    <input type="submit" value="Simpan Jawaban">
</form>

<div class="navigasi">
    <?php if ($current_soal > 0): ?>
        <button><a href="?soal=<?php echo max(0, $current_soal - 1); ?>">Soal Sebelumnya</a></button>
    <?php endif; ?>
    
    <?php if ($current_soal < $total_soal - 1): ?>
        <button><a href="?soal=<?php echo min($total_soal - 1, $current_soal + 1); ?>">Soal Berikutnya</a></button>
    <?php endif; ?>
    
    <?php if ($current_soal == $total_soal - 1): ?>
        <button><a href="?selesai=true">Selesai</a></button>
    <?php endif; ?>
</div>

<div class="navigasi">
    <?php for ($i = 0; $i < $total_soal; $i++): ?>
        <a href="?soal=<?php echo $i; ?>" class="<?php echo (isset($_SESSION['jawaban'][$i])) ? 'sudah-terjawab' : 'belum-terjawab'; ?>">
            <?php echo $i + 1; ?>
        </a>
    <?php endfor; ?>
</div>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="card text-center">
    <div class="card-header">
    Zavira Mardhatillah Maulidia (E1R022099)
        </div>
        <div class="card-body">
          <h5 class="card-title" style="line-height: 1.5;">Program Studi Pendidikan Matematika<br>
            Fakultas Keguruan dan Ilmu Pendidikan<br>
            Universitas Mataram</h5>
        </div>
        <div class="card-footer text-body-secondary">
          2024
    </div>
  </div>

</body>
</html>
