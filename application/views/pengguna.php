<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg">
      <?= $this->session->flashdata('message'); ?>


      <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><span class="fa fa-plus"> </span> Tambah </a>
                </div> -->

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Usia</th>
                  <th>Alamat</th>
                  <th>Hasil Identifikasi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // print_r($pengguna);die(); 
                if ($pengguna != NULL) {
                  $no = 1;
                  for ($i = 0; $i < count($pengguna); $i++) {
                    if ($i == 0) {
                      $n = 1;
                    } else {
                      if ($pengguna[$i]->id_identifikasi == $pengguna[$i - 1]->id_identifikasi) {
                        // $i++;
                        $n = 0;
                      } else if ($pengguna[$i]->id_identifikasi !== $pengguna[$i - 1]->id_identifikasi) {
                        $n = 1;
                      }
                    }
                    if ($n == 1) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pengguna[$i]->nama ?></td>
                        <td><?= $pengguna[$i]->usia ?></td>
                        <td><?= $pengguna[$i]->alamat ?></td>
                        <td><?= $pengguna[$i]->nama_hp ?></td>
                      </tr>
                  <?php }
                  }
                  // foreach($pengguna as $g) { 
                  //   $m = $this->db->get_where('hasil', [
                  //     'id_identifikasi'  => $g->id_identifikasi
                  //   ])->row();  
                  // }
                } else { ?>
                  <tr>
                    <td>Tidak ada data</td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>