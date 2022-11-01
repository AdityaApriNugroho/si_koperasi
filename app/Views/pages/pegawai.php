<?= $this->extend('template'); ?>
    
<?= $this->section('content'); ?>
<div class="card-body">
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
                  </tr>
                  <?php ; endforeach; ?>
                  </tbody>
                </table>
              </div>
<?= $this->endSection(); ?>