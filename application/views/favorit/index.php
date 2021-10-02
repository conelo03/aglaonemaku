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
          <a href="" class="btn btn-primary" style="background: slateblue; color: white;" data-toggle="modal" data-target="#tambah"><span class="fa fa-plus"> </span> Tambah Aglaonema</a>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($favorit != NULL) {
                  $no = 1;
                  foreach ($favorit as $g) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $g['nama_agl'] ?></td>
                      <td><?= $g['desc_agl'] ?></td>
                      <td>
                        <img src="<?= base_url('assets/img/'.$g['gambar_agl']) ?>" style="max-width: 250px"></td>
                      <td><a class="btn btn-primary" style="background: slateblue; color: white;" data-toggle="modal" data-target="#edit<?= $g['id_agl'] ?>">
                          Edit</a>
                        </a><a onclick="return confirm('Apakah kamu yakin akan menghapus data ini ?')" href="<?= base_url() ?>favorit/hapus_favorit/<?= $g['id_agl'] ?>" class="btn btn-danger ">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Aglaonema</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form class="form-horizontal" action="<?php echo base_url() . 'Favorit/aksi_tambah_favorit' ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="nama_agl" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama" required>
          </div>
          <div class="form-group">
            <input type="text" name="desc_agl" class="form-control form-control-user" id="exampleInputEmail" placeholder="Deskripsi" required>
          </div>
          <div class="form-group">
            <input type="file" name="gambar_agl" class="form-control form-control-user" id="exampleInputEmail" placeholder="Solusi" required>
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

<?php if ($favorit != NULL) {
  foreach ($favorit as $g) : ?>
    <div class="modal fade" id="edit<?= $g['id_agl'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Aglaonema</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'Favorit/aksi_edit_favorit/' . $g['id_agl'] ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group">
                Nama :
                <input type="hidden" name="id" class="form-control" id="inputUserName" value="<?= $g['id_agl'] ?>" required>
                <input type="text" name="nama_agl" class="form-control form-control-user" id="exampleInputEmail" value="<?= $g['nama_agl'] ?>" required>
              </div>
              <div class="form-group">
                Deskripsi :
                <input type="text" name="desc_agl" class="form-control form-control-user" id="exampleInputEmail" value="<?= $g['desc_agl'] ?>" required>
              </div>
              <div class="form-group">
                Gambar :
                <input type="hidden" name="gambar_agl_lama" class="form-control form-control-user" id="exampleInputEmail" value="<?= $g['gambar_agl'] ?>">
                <input type="file" name="gambar_agl" class="form-control form-control-user" id="exampleInputEmail" value="">
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
<?php endforeach;
} ?>

<!-- End of Main Content -->