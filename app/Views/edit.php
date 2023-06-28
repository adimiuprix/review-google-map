<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Edit data</h3>
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="<?= base_url('edit/'.$reviews->job_id);?>" class="form-horizontal form-material">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Nama WA</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="waname" value="<?= $reviews->nama_whatsapp?>" placeholder="Masukkan nama WA anda" class="form-control p-0 border-0" required/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Nama Email (Profil)</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="emailname" value="<?= $reviews->nama_email?>" placeholder="Masukkan nama profil email anda" class="form-control p-0 border-0" required/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Link Ulasan (google map)</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="link" value="<?= $reviews->link_review?>" placeholder="https://goo.gl/maps/xxxxxxxxxxxxxxx" class="form-control p-0 border-0" required/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">Tambahkan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>