<?= $this->extend('template'); ?>
    
<?= $this->section('content'); ?>
<div class="card-body">
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
                  </tr>
                  <?php ; endforeach; ?>
                  </tbody>
                </table>
              </div>
<?= $this->endSection(); ?>