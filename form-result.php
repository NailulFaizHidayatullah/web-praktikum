<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:ital,wght@0,400;0,600;1,800&display=swap">
    <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="assets/logo.png">
</head>
<script src="assets/script/script.js"></script>
<body>
<header class="scrolling-active">
    <a href="#" class="logo"><img src="assets/logo.png" alt="" srcset=""></a>
    <input type="checkbox" name="menu-bar" id="menu-bar">
    <label for="menu-bar">Menu</label>
    <navbar class="navbar scrolling-active">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="#">Kategori Penerbangan</a>
          <ul >
            <li><a href="#">Economy</a></li>
            <li><a href="#">Bussines</a></li>
            <li><a href="#">First Class</a></li>
            <li><a href="#">Semua Penerbangan</a></li>
            <li></li>
          
          </ul>
          
        </li>
        <li><a href="calculator-app.html">Calculator App</a></li>
        <li><a href="watch-list.html">Watch list</a></li>
        <li><a href="form.php">Form</a></li>


      </ul>
    </navbar>
  </header>



  <main class="main-home">
    <!-- Konten -->
    <section class="artikel">

      <div class="content">
      <?php
        echo "Nama:". $_POST["nama"]. "<br>";
        echo "Nim: ". $_POST["nim"]. "<br>";
        echo "Email:". $_POST["email"]. "<br>";
        echo "Tanggal:". $_POST['tanggal']. "<br>";
        echo "Jenis Kelamin:". $_POST['jenis']. "<br>";
        echo "Hobby:". $_POST['hobby']. "<br>";
        echo "Pesan:". $_POST['pesan']. "<br>";

        echo ''

        ?>
      </div>

    </section>

    <aside class="sidebar">
      <div class="title-side">
        Berita Seputar SkyHook
      </div>

      <div class="card-side">
        <div class="card-side-content">
          <br>
          <a href="#">
          <h2>Pembukaan SkyHook Airline Milik Anak Bangsa dengan Segudang Promo</h2>
        </a>
        </div>
      </div>
      
      <div class="card-side">
        <div class="card-side-content">
          <br>
          <a href="#">
          <h2>Diskon Hotel, Restoran hingga 60% Melalui SkyHook</h2>
        </a>
        </div>
      </div>

      <div class="card-side">
        <div class="card-side-content">
          <br>
          <a href="#">
          <h2>Daftar SkyMiles Sekarang! Dapatkan Welcome Bonus 1000 Miles+</h2>
        </a>
        </div>
      </div>
      <form class="d-flex side-search">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn bg-light" type="submit">Search</button>
      </form>

    </aside>
    
  </main>

  <footer>
    
    <div class="copyright">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Linkedin</a></li>
        </ul>
      <span>&copy 2022 SkyHook</span>
    </div>
  </footer>
</body>
</html>