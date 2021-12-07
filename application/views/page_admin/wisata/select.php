<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Wisata</h4>
                <a href="<?= base_url('wisata/create') ?>" class="btn btn-primary">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Tempat Wisata</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>hari</th>
                                <th>Paiz</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($wisata as $data) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data["nama"] ?></td>
                                    <td><?= $data["harga"] ?></td>
                                    <td>
                                        <img src="<?= base_url('uploads/image/'); ?><?= $data['gambar']; ?>" alt="gambar" width="100" height="85">
                                    </td>
                                    <td><?= $data["hari"] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= base_url('wisata/update/') . $data["id_wisata"] ?>">Ubah</a>
                                        <a class="btn btn-danger" href="<?= base_url('wisata/delete/') . $data["id_wisata"] ?>">Hapus</a>
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