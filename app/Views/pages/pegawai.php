<?= $this->extend('template'); ?>
    
<?= $this->section('content'); ?>
<div class="card-body">
  <a href='tambah_pegawai'><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Tambah</button></a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                  </tr>
                  </thead>
                  <tbody>  
                  <?php ; foreach($pegawai as $ag) : ?>
                  <tr>
                    <td><?=$ag['id_pegawai'] ?></td>
                    <td><?=$ag['nama'] ?></td>
                    <td><?=$ag['nik'] ?></td>
                    <td><?=$ag['alamat'] ?></td>
                    <td><?=$ag['nohp'] ?></td>
                    <td><a href='delete'><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td>
                    <td><a href='edit'><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></a></td>
                  </tr>
                  <?php ; endforeach; ?>
                  </tbody>
                </table>
              </div>
<?= $this->endSection(); ?>