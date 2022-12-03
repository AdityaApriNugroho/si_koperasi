<?= $this->extend('template'); ?>
    
<?= $this->section('content'); ?>
<div class="card-body">
  <a href='tambah_anggota'><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Tambah</button></a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                  </tr>
                  </thead>
                  <tbody>  
                  <?php ; foreach($anggota as $ag) : ?>
                  <tr>
                    <td><?=$ag['id_anggota'] ?></td>
                    <td><?=$ag['nama'] ?></td>
                    <td><?=$ag['jenis_kelamin'] ?></td>
                    <td><?=$ag['alamat'] ?></td>
                    <td><a href='delete'><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td>
                    <td><a href='edit'><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></a></td>
                  </tr>
                  <?php ; endforeach; ?>
                  </tbody>
                </table>
              </div>
<?= $this->endSection(); ?>