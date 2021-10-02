
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
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><span class="fa fa-plus"> </span> Tambah hama_penyakit</a>
                </div> -->

            <div class="card-body">
              <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Rule</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if($hama_penyakit != NULL) {
                          $no=1;
                          foreach($hama_penyakit as $p) { 
                            $kode_hp = $p['kode_hp'];
                            $get_relasi = $this->db->get_where('relasi', ['kode_hp' => $kode_hp])->result_array();
                          ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td>
                            <?php
                            echo 'Jika ';
                            foreach ($get_relasi as $r) { 
                              $kode_gejala = $r['kode_gejala'];
                              $get_gejala = $this->db->get_where('gejala', ['kode_gejala' => $kode_gejala])->result_array();
                              
                              foreach ($get_gejala as $g) {
                                echo $g['nama_gejala'].' dan ';
                              }
                              
                             }
                            echo 'Maka '.$p['nama_hp']; 
                            ?>
                          </td>
                        </tr>
                        <?php }} else { ?>
                            <tr> <td>Tidak ada data</td> </tr>
                            <?php } ?>
                      </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->