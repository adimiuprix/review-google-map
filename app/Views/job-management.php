<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="user-btm-box mt-5 d-md-flex">
                    <div class="col-md-12 col-sm-12 text-center">
                    </div>
                </div>
                <h3 class="box-title">Data Tabel</h3>
                <a href="add-review" class="btn btn-success">Tambah data</a>
                <div class="table-responsive">
                    <div class="container pt-5">
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
                    </div>

                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">No.</th>
                                <th class="border-top-0">Judul job</th>
                                <th class="border-top-0">Deskripsi</th>
                                <th class="border-top-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($jobmgmt as $job) : ?>
                            <tr>
                                <td><?= $job->list_id ?></td>
                                <td><?= $job->judul_job ?></td>
                                <td><?= $job->deskripsi ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>