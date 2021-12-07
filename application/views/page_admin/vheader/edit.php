<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Wisata Header</h4>
                <form class="forms-sample" method="POST" action="<?= base_url('vheader/update_process') ?>">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= $vheader["judul"] ?>" reqired>
                        <input type="hidden" name="id_vidio_header" value="<?= $vheader["id_vidio_header"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" value="<?= $vheader["deskripsi"] ?>" reqired>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Ubah</button>
                    <button class="btn btn-light" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>