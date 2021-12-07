<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Header</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Header</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($header as $data) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data["judul"] ?></td>
                                    <td><?= $data["deskripsi"] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= base_url('header/update/') . $data["id_header"] ?>">Ubah</a>
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