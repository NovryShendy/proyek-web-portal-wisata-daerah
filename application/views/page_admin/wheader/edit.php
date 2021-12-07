<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Wisata Header</h4>
                <form class="forms-sample" method="POST" action="<?= base_url('wheader/update_process') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= $wheader["judul"] ?>" reqired>
                        <input type="hidden" name="id_wisata_header" value="<?= $wheader["id_wisata_header"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" value="<?= $wheader["deskripsi"] ?>" reqired>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Ubah</button>
                    <button class="btn btn-light" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>