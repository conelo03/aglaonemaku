<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Beranda</title>
  </head>
  <body style="background-image: url(https://i.imgur.com/swZSbCZ.jpg); background-size: 100% 100%; background-attachment: fixed; font-family: Georgia, 'Times New Roman', Times, serif">
    <div class="banner">
    <div class="container-fluid pb-2">   
    <br>
    <!-- Tulisan Bergerak -->
    <div class="benner " style="font-size: 30px; color: white; font-weight: bold;">
    <marquee class="py-2" height="50" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">
    Selamat datang di website Aglaonemaku!!!!
    </marquee></div>

    <div class="profile-area">
      <div class="container">
        <div class="row">
          <div class="col-md" >
            <div class="card">
              <a href="" style="text-decoration: none">
              <div class="img1"><img src="assets/img/1.jpeg"></div>
              <div class="img2"><img src="assets/img/12.png"></div>
              <div class="main-text">
                <h2>Informasi Umum Aglaonema</h2>
                <br>
                <p>Ayo cari tau mengenai asal-usul tanaman Aglaonema, media tanam apa saja yang cocok dan bagaimana cara perawatan yang benar </p>
                <br><br>
                <a class="btn" style="color: black;" href="<?= base_url('User/informasi'); ?>"> LIHAT</a>
              </div>
            </div>
            </a>
          </div>


          
          <div class="col-md" >
            <a href="" style="text-decoration: none">
            <div class="card">
              <div class="img1"><img src="assets/img/1.jpeg"></div>
              <div class="img2"><img src="assets/img/mealy.png"></div>
              <div class="main-text">
                <h2>Identifikasi Hama Penyakit Aglaonema</h2>
                <br>
                <p>Aglaonemamu tampak tidak sehat? bisa jadi itu disebabkan oleh hama atau penyakit, cepat identifikasi sebelum terlambat dan temukan solusinya disini </p>
                <br>
                <a class="btn" style="color: black;" href="<?= base_url('User/identifikasi'); ?>"> IDENTIFIKASI</a>
              </div>
              
            </div>

            </a>
          </div>
          


<div class="col-md" >
  <a href="" style="text-decoration: none">
            <div class="card">
              <div class="img1"><img src="assets/img/1.jpeg"></div>
              <div class="img2"><img src="assets/img/31.png"></div>
              <div class="main-text">
                <h2>Aglaonema Favoritku</h2>
                <br><br>
                <p>Aglaonema memiliki banyak ragam jenis yang dapat kamu ketahui, ayo favoritkan jenis apa yang kamu sukai!</p>
                <br>
                <br>
                
                <a class="btn" style="color: black;" href="<?= base_url('User/favorit'); ?>"> FAVORITKU</a>
              </div>
            </div>
            </a>
          </div>

        
        </div>
      </div>
    </div>
<center>
<div class="card" id="card">
  <div class="hallo">
    <a class="textadmin" href="<?= base_url('login'); ?>"><i class="fas fa-sign-in-alt pr-1"></i>Admin</a>
  </div>
</div>
</center>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
  <!-- <footer class="text-center text-white fixed-bottom ">
    <div class=" text-center text-dark p-3" style="background-color: pink;">
      Copyright©2021  Sistem Pakar Skripsi Hama Penyakit Aglaonema
    </div>
  </footer> -->
</div>

</html>
