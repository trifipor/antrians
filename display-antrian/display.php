
<!doctype html>
<html lang="en" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Antrian Berbasis Web">
  <meta name="author" content="farhan">

  <!-- Title -->
  <title>Aplikasi Antrian Berbasis Web</title>

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

  <!-- Custom Style -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <div class="container pt-4">
      <div class="row">
        <!-- menampilkan informasi jumlah antrian -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-people text-warning"></i>
                </div>
                <div>
                  <p id="jumlah-antrian-display" class="fs-3 text-warning mb-1"></p>
                  <p class="mb-0">Jumlah Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang-display" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya-display" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian-display" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-4">
    <div class="container">
      <hr class="my-4">
      <!-- copyright -->
      <div class="copyright text-center mb-2 mb-md-0">
        &copy; 2023 - <a href="" target="_blank" class="text-danger text-decoration-none">farhan</a>. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- load file audio bell antrian -->
  <audio id="tingtung" src="../assets/audio/tingtung.mp3"></audio>

  <!-- jQuery Core -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <!-- DataTables -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <!-- Responsivevoice -->
  <!-- Get API Key -> https://responsivevoice.org/ -->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zcdq"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#jumlah-antrian').load("get_jumlah_antrian.php");
      $('#antrian-sekarang').load('get_antrian_sekarang.php');
      $('#antrian-selanjutnya').load('get_antrian_selanjutnya.php');
      $('#sisa-antrian').load('get_sisa_antrian.php');
      
    });
  </script>
</body>

</html>