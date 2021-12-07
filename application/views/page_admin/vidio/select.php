<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Link Vidio</h4>
                <a href="<?= base_url('vidio/create') ?>" class="btn btn-primary">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Vidio</th>
                                <th>Waktu</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($vidio as $data) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data["judul"] ?></td>
                                    <td><?= $data["waktu"] ?></td>
                                    <td><?= $data["link"] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= base_url('vidio/update/') . $data["id_vidio"] ?>">Ubah</a>
                                        <a class="btn btn-danger" href="<?= base_url('vidio/delete/') . $data["id_vidio"] ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>