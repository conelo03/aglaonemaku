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
<body style="background-image: url(https://i.imgur.com/swZSbCZ.jpg); background-size: 100% 100%; background-attachment: fixed; font-family: Georgia, 'Times New Roman', Times, serif">
<br>
    <div class="container bcontent">
        <center><h1 style="color: white; height: 50px; border-radius: 8px; font-weight: bold;">Identifikasi Hama Penyakit Aglaonema</h1></center><br>
        <hr />
        <div class="container">
          <div class="card">
            <div class="card-header">
              <h1 class="h3 text-gray-900 text-center">Isi Biodata</h1>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-2">
                    <div class="text-center" style="font-size: large;">
                      <form action="<?= base_url() ?>User/simpan_pengguna" method="post" class="user">
                        <div class="row">
                          <div class="col-md-3 text-left"><label>Nama</label></div>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukan Nama" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3 text-left"><label>Usia</label></div>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" name="usia" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukan Usia" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3 text-left"><label>Alamat</label></div>
                          <div class="col-md-9">
                            <div class="form-group">
                              <textarea type="text" name="alamat" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukan Alamat" required></textarea>
                            </div>
                          </div>
                        </div><br>

                        <button type="submit" class="btn btn-user btn-block" style="background: darksalmon ; color: white; font-weight: bold;">Mulai Identifikasi</button>
                        <a class="btn btn-user btn-block" style="background: white ; color: darksalmon;" href="<?php echo base_url() ?>">Kembali Ke Beranda</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
</body>
</html>