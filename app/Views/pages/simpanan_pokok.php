<?= $this->extend('template'); ?>
    
<?= $this->section('content'); ?>
<div class="card-body">
  <a href='tambah_pokok'><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Tambah</button></a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id Simpanan</th>
                    <th>Id Anggota</th>
                    <th>Jumlah</th>
                  </tr>
                  </thead>
                  <tbody>  
                  <?php ; foreach($pokok as $pk) : ?>
                  <tr>
                    <td><?=$pk['id_simpanan_pokok'] ?></td>
                    <td><?=$pk['id_anggota'] ?></td>
                    <td><?=$pk['jumlah'] ?></td>
                    <td><a href='delete'><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td>
                    <td><a href='edit'><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></a></td>
                  </tr>
                  <?php ; endforeach; ?>
                  </tbody>
                </table>
              </div>
<?= $this->endSection(); ?>