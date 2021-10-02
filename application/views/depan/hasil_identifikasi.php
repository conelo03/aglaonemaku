<!DOCTYPE html>
<html lang="en">
<head>
    <title>Identifikasi Hama Penyakit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .bcontent {
            margin-top: 10px;
        }
    </style>
</head>
<body style="background-image: url(https://i.imgur.com/swZSbCZ.jpg); background-size: 100% 100%; background-attachment: fixed; font-family: Georgia, 'Times New Roman', Times, serif"><br>
    <div class="container bcontent">
        <center><h1 style="color: white; height: 50px; border-radius: 8px; font-weight: bold;">Identifikasi Hama Penyakit Aglaonema</h1></center><br>
        <hr />
        <div class="container">

          <div class="card">
            <div class="card-header">
              <h1 class="h4 text-gray-900 text-center">Hasil Identifikasi</h1>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-2">
                    <form action="#" method="post" class="user">

                      <div class="form-group">
                        <div class="form-user">
                          <h5>Biodata :</h5>
                        </div>
                        <div class="row form-user">
                          <div class="col-md-1">
                            Nama
                          </div>
                          <div class="col-md-6">
                            : <?= $pengguna['nama'] ?>
                          </div>
                        </div>
                        <div class="row form-user">
                          <div class="col-md-1">
                            Usia
                          </div>
                          <div class="col-md-6">
                            : <?= $pengguna['usia'] ?>
                          </div>
                        </div>
                        <div class="row form-user">
                          <div class="col-md-1">
                            Alamat
                          </div>
                          <div class="col-md-6">
                            : <?= $pengguna['alamat'] ?>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-user">
                          <h5>Hama Penyakit pada Tanaman :</h5>
                        </div>
                        <div class="form-user">
                          <?= $hama_penyakit['nama_hp'] ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-user">
                          <h5>Deskripsi :</h5>
                        </div>
                        <div class="form-user">
                          <?= $hama_penyakit['desc_hp'] ?>
                        </div>

                      </div>
                      <div class="form-group">
                        <div class="form-user">
                          <h5>Solusi :</h5>
                        </div>
                        <div class="form-user">
                          <?= $hama_penyakit['solusi_hp'] ?>
                        </div>

                      </div>


                    </form>
                    <a href="<?php echo base_url('User/identifikasi') ?>"><button class="btn btn-user btn-block" style="background: darksalmon ; color: white;">Identifikasi Ulang</button></a><br />
                    <!-- <button class="btn btn-primary btn-user btn-block" onClick="print()">Print</button> -->
                    <hr>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
</body>
</html>