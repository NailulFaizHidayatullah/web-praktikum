<!DOCTYPE HTML>
<html>

<head>
    <style>
    .warning {
        color: #FF0000;
    }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:ital,wght@0,400;0,600;1,800&display=swap">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

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
                    <ul>
                        <li><a href="#">Economy</a></li>
                        <li><a href="#">Bussines</a></li>
                        <li><a href="#">First Class</a></li>
                        <li><a href="#">Semua Penerbangan</a></li>
                        <li></li>

                    </ul>

                </li>
                <li><a href="calculator-app.html">Calculator App</a></li>
                <li><a href="watch-list.html">Watch list</a></li>
                <li><a href="C:\xampp\htdocs\faiz-263\form.php">Form</a></li>


            </ul>
        </navbar>
    </header>
    <main class="main-home">

        <?php
$error_nama = "";
$error_nim= "";
$error_email = "";
$error_tanggal = "";
$error_jenis = "";
$error_pesan = "";
$error_hobby = "";
$error_count = 2;

$male_checked = '';
$female_checked = '';

$hobby1_checked = ''; 
$hobby2_checked = ''; 
$hobby3_checked = ''; 

$nama = "";
$nim= "";
$email = "";
$tanggal = "";
$jenis = "";
$pesan = "";
$hobby = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["nama"])) 
  {
    $error_nama = "Nama tidak boleh kosong";
    $error_count++;

  } 
  else 
  {
    $nama = cek_input($_POST["nama"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
    {
      $nameErr = "Inputan Hanya boleh huruf dan spasi"; 
      $error_count++;
    }
  }

  if (empty($_POST["nim"])) 
  {
    $error_nim = "Nim tidak boleh kosong";
    $error_count++;
  } 
  else 
  {
    $nim = cek_input($_POST["nim"]);
    if (!preg_match("/^[0-9]*$/",$nim)) 
    {
      $error_nim = "Inputan Hanya boleh angka"; 
      $error_count++;
    }
  }
  
  if (empty($_POST["email"])) 
  {
    $error_email = "Email tidak boleh kosong";
    $error_count++;
  } 
  else 
  {
    $email = cek_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $error_email = "Format email Invalid"; 
      $error_count++;
    }
  }

  if (empty($_POST["pesan"])) 
  {
    $error_pesan = "Pesan tidak boleh kosong";
    $error_count++;
  } 
  else
  {
    $pesan = cek_input($_POST["pesan"]);
  }
    

  if (empty($_POST["tanggal"])) 
  {
    $error_tanggal = "Tanggal lahir tidak boleh kosong";
    $error_count++;
  }else{
      $tanggal = $_POST["tanggal"];
  }

  
  
  if (empty($_POST["jenis"])) 
  {
    $error_jenis = "jenis kelamin tidak boleh kosong";
    $error_count++;
  } else{
  $jenis = $_POST["jenis"];
  if($jenis =="laki-laki"){
    $male_checked = 'checked';
  }elseif($jenis == "perempuan"){
    $female_checked = 'checked';
  }
  }

  if (empty($_POST["hobby"])) 
  {
    $error_hobby = "Hobby tidak boleh kosong";
    $error_count++;

  } else{
  $hobby = $_POST["hobby"];
  if($hobby =="Hobby 1"){
    $hobby1_checked = 'checked';
  }elseif($hobby== "Hobby 2"){
    $hobby2_checked = 'checked';
  }elseif($hobby== "Hobby 3"){
    $hobby3_checked = 'checked';
  }
}



$error_count = 0;
}


function cek_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

      <div class="content padd-20">
        <h3>Isi Data Diri</h3>
        <form method="post" action="<?php echo ($error_count <= 0 ? "form-result.php" : "");?>">

            
                <label for="nama">Nama</label>
                <div>
                    <input type="text" name="nama"
                        class=" <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama"
                        placeholder="Nama" value="<?php echo $nama; ?>"><span
                        class="warning"><?php echo $error_nama; ?></span>
                </div>
            

            
                <label for="nim">NIM: </label>
                <div class="col-sm-10">
                    <input type="text" name="nim"
                        class=" <?php echo ($error_nim !="" ? "is-invalid" : ""); ?>" id="nim"
                        placeholder="NIM" value="<?php echo $nim; ?>"><span
                        class="warning"><?php echo $error_nim; ?></span>
                </div>
            

            
                <label for="email" >E-mail</label>
                <div >
                    <input type="text" name="email"
                        class=" <?php echo($error_email !="" ? "is-invalid" : ""); ?>" id="email"
                        placeholder="email" value="<?php echo $email; ?>"><span
                        class="warning"><?php echo $error_email; ?></span>
                </div>
           

       
                <label for="tanggal">Tanggal Lahir</label>
                <div>
                    <input type="date" name="tanggal"
                        class="  <?php echo($error_tanggal !="" ? "is-invalid" : ""); ?>" id="tanggal"
                        placeholder="Tanggal Lahir" value="<?php echo $tanggal; ?>"><span
                        class="warning"><?php echo $error_tanggal; ?></span>
                </div>
          

          <div>
                <label>Jenis kelamin:</label>
                <br>  
                <label><input type="radio" name="jenis" value="laki-laki" <?php echo $male_checked; ?>/>Laki-laki</label>  
                <label><input type="radio" name="jenis" value="perempuan" <?php echo $female_checked; ?> />Perempuan</label>
                <span class="warning"><?php echo $error_jenis; ?></span>
                </div>

                

                



            <div>
                <label>Hobby:</label>
                <br>
                <label><input type="checkbox" name="hobby" value="Hobby 1" <?php echo $hobby1_checked; ?> /> Hobby1</label>
                <label><input type="checkbox" name="hobby" value="Hobby 2" <?php echo $hobby2_checked; ?> /> Hobby2</label>
                <label><input type="checkbox" name="hobby" value="Hobby 3" <?php echo $hobby3_checked; ?> /> Hobby3</label>
                <span class="warning"><?php echo $error_hobby; ?></span>
                </div>

           
                <label for="pesan">Pesan</label>
                <div class="col-sm-10">
                    <textarea name="pesan" class="form-control <?php echo($error_pesan !="" ? "is-invalid" : ""); ?>"><?php echo $pesan; ?></textarea><span class="warning"><?php echo $error_pesan; ?></span>
                </div>
           


           
                <div>
                    <button type="submit" class="btn btn-primary" > Submit</button>
                </div>
            <
        </form>
        </div>




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

</body>

</html>