<!-- End of Main Content -->

<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg">
      <?= $this->session->flashdata('message'); ?>


      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <a href="" class="btn btn-primary" style="background: slateblue; color: white;" data-toggle="modal" data-target="#tambah"><span class="fa fa-plus"> </span> Tambah Relasi</a>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Hama Penyakit</th>
                  <th>Gejala</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($relasi != NULL) {
                  $no = 1;
                  foreach ($relasi as $g => $value) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $g ?></td>
                      <td>
                        <?php
                        foreach ($value['gejala'] as $key) {
                          echo $key . ', ';
                        }
                        ?>
                      </td>
                      <td><a class="btn btn-primary" style="background: slateblue; color: white;" data-toggle="modal" data-target="#edit<?= $value['kode_hp'] ?>">
                          Edit</a>
                        </a><a onclick="return confirm('Apakah kamu yakin akan menghapus data ini ?')" href="<?= base_url() ?>relasi/hapus_relasi/<?= $value['kode_hp'] ?>" class="btn btn-danger ">
                          <span class="text">Hapus</span>
                        </a></td>
                    </tr>
                  <?php }
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
<!-- /.container-fluid -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Relasi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form class="form-horizontal" action="<?php echo base_url() . 'relasi/aksi_tambah_relasi' ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <select name="kode_hp" class="form-control " id="exampleInputEmail" placeholder="Nama">
              <option value="#">Pilih Hama Penyakit</option>
              <?php foreach ($hama_penyakit as $p) { ?>
                
                <option value="<?= $p['kode_hp'] ?>"><?= $p['nama_hp'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <?php foreach ($gejala as $g) { ?>
              <span class="" for="gejala">
                <input type="checkbox" name="gejala[]" class="" id="exampleInputEmail" value="<?= $g['kode_gejala'] ?>"> <?= $g['nama_gejala'] ?> 
              </span> <br/><br/>
            <?php } ?>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" id="simpan">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php foreach ($relasi as $r => $value) : ?>
  <div class="modal fade" id="edit<?= $value['kode_hp']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Relasi</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form class="form-horizontal" action="<?php echo base_url() . 'relasi/aksi_edit_relasi/' . $value['kode_hp']; ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <select name="kode_hp" class="form-control " id="exampleInputEmail" placeholder="Nama" disabled>
                <?php
                $id_relasi    = $value['id_relasi'];
                $kode_hp  = $value['kode_hp'];
                $hama_penyakit = $this->db->query("SELECT r.id_relasi, r.kode_gejala, r.kode_hp, p.nama_hp, p.desc_hp, p.solusi_hp FROM relasi r JOIN hama_penyakit p ON r.kode_hp = p.kode_hp WHERE id_relasi = '$id_relasi'")->result_array();
                foreach ($hama_penyakit as $p) { ?>
                  <option value="<?= $p['kode_hp'] ?>" <?= $kode_hp == $p['kode_hp'] ? 'selected' : '' ?>><?= $p['nama_hp'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <?php
              $gejala = $this->db->get('gejala')->result_array();
              // $gejala_array = $this->db->query("SELECT r.id_relasi, r.kode_gejala, r.kode_hp, p.nama, p.deskripsi, p.solusi FROM relasi r JOIN hama_penyakit p ON r.kode_hp = p.kode_hp WHERE kode_hp = '$kode_hp'")->result_array();
              $this->db->select('kode_gejala');
              $this->db->from('relasi');
              $this->db->join('hama_penyakit', 'relasi.kode_hp = hama_penyakit.kode_hp');
              $this->db->where('relasi.kode_hp', $kode_hp);
              $gejala_array = $this->db->get()->result_array();
              $gg = [];
              for ($i = 0; $i < count($gejala_array); $i++) {
                $gg[$i] = $gejala_array[$i]['kode_gejala'];
              }
              $kunci = 1;
              foreach($gejala as $g) { ?>
                  <span class="" for="gejala">
                  <input type="checkbox" name="gejala[]" class=" " id="exampleInputEmail" value="<?php echo $g['kode_gejala']; ?>" 
                  <?php   
                    if(in_array($g['kode_gejala'], $gg)) {echo 'checked';}  ?>> <?= $g['nama_gejala'] 
                  ?></span>  
                  <br><br/>
              <?php $kunci++; } ?>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" id="simpan">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<!-- End of Main Content -->