<?= $this->extend('template'); ?>
    
<?= $this->section('content'); ?>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $validation->listErrors() ?>
                    </div>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="/save_list" method="POST">
                            <div class="form-group">
                                <label>Nama Kegiatan</label>
                                <input type="text" class="form-control" name="desk" placeholder="Masukkan Nama Kegiatan">
                            </div>
                            <div class="form-group">
                                <label>Waktu Dilaksanakan</label>
                                <input type="text" class="form-control" name="deadline" placeholder="Masukkan Waktu Dilaksanakan">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" class="form-control" name="type" placeholder="&quot;todoCheck(angka)&quot;">
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>