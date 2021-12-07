<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Vidio Header</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Vidio Header</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($vheader as $data) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data["judul"] ?></td>
                                    <td><?= $data["deskripsi"] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= base_url('vheader/update/') . $data["id_vidio_header"] ?>">Ubah</a>
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