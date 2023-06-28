<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Tambah data</h3>
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                    <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success');?>
                    </div>
                    <?php endif; ?>

                    <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        Error!
                    </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                        <div class="card-body">
                            <form action="storereview" method="post" class="form-horizontal form-material">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Nama WA</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="waname" placeholder="Masukkan nama WA anda" class="form-control p-0 border-0" required/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Nama Email (Profil)</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="emailname" placeholder="Masukkan nama profil email anda" class="form-control p-0 border-0" required/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Link Ulasan (google map)</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="link" placeholder="https://goo.gl/maps/xxxxxxxxxxxxxxx" class="form-control p-0 border-0" required/>
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