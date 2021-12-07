<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Link Vidio</h4>
                <form class="forms-sample" method="POST" action="<?= base_url('vidio/create_process') ?>">
                    <div class="form-group">
                        <label for="judul">Judul Vidio</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul Vidio" name="judul" reqired>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Waktu</label>
                        <input type="text" class="form-control" id="waktu" placeholder="Waktu" name="waktu" reqired>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" placeholder="Link" name="link" reqired>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <button class="btn btn-light" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>