<!DOCTYPE html>
<html lang="en">
<head>
    <title>Identifikasi Gejala</title>
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
        <center><h1 style="color: white; height: 50px; border-radius: 8px; font-weight: bold;">Identifikasi Hama Penyakit Aglaonema</h1></center>
        <hr /><br><br><br><br>
        <div class="container">
          <div class="card">
            <div class="card-header">
              <h1 class="h3 text-gray-900 text-center">Gejala</h1>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-2">
                    <div class="text-center" style="font-size: large;">

                      <form action="#" method="post" class="user">
                        <div class="form-group">
                          <input type="hidden" name="id_identifikasi" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukan Nama" value="<?= $this->session->userdata('id_identifikasi'); ?>" required>
                        </div>
                        <?= $gejala[$index]['nama_gejala'] ?>
                        <?php
                        $index_pars = $index + 1;
                        ?>
                        <br />
                        <br />
                        <div class="row">
                          <div class="col-md-6">
                            <a href="<?= base_url('User/cek_identifikasi/y/' . $gejala[$index]['kode_gejala'] . '/' . $index_pars) ?>" class="btn btn-primary btn-user btn-block" style="color: white">Iya</a>
                          </div>
                          <div class="col-md-6">
                            <a href="<?= base_url('User/cek_identifikasi/n/' . $gejala[$index]['kode_gejala'] . '/' . $index_pars) ?>" class="btn btn-danger btn-user btn-block" style="color: white">Tidak</a>
                          </div>
                        </div>

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