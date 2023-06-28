<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="user-btm-box mt-5 d-md-flex">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2>JOB 1(VI)</h2>    
                        <p>
                            Link
                            <a href="https://maps.app.goo.gl/mLHV2Wrqgmdd6Z1N6">https://maps.app.goo.gl/mLHV2Wrqgmdd6Z1N6</a><br/>
                            Rating : B5 
                            Review Keyword SESUAIKAN HARUS NYAMBUNG (PUAS SERVIS LAPTOP)
                            -pelayanan
                            -ruang tunggu
                            -teknisi 
                            -proses 
                            -respon 
                            -admin
                        </p>
                    </div>
                </div>
                <h3 class="box-title">Data Tabel</h3>
                <a href="add-review" class="btn btn-success">Tambah data</a>
                <div class="table-responsive">
                    <?php $no=1; ?>
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
                                <th class="border-top-0">Nama WA</th>
                                <th class="border-top-0">Nama Email</th>
                                <th class="border-top-0">Link ulasan</th>
                                <th class="border-top-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($reviews as $rev): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $rev->nama_whatsapp ?></td>
                                <td><?= $rev->nama_email ?></td>
                                <td><a href="<?= $rev->link_review ?>"><?= $rev->link_review ?></a></td>
                                <td>
                                    <a href="<?= base_url('edit/'.$rev->job_id); ?>" class="btn btn-info">Ubah</a>

                                    <form action="<?= site_url('delete/'.$rev->job_id); ?>" method="post" class="d-inline">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
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