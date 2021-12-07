<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Link Vidio</h4>
                <form class="forms-sample" method="POST" action="<?= base_url('vidio/update_process') ?>">
                    <div class="form-group">
                        <label for="judul">Judul Vidio</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul Vidio" name="judul" value="<?= $vidio['judul'] ?>" reqired>
                        <input type="hidden" name="id_vidio" value="<?= $vidio['id_vidio'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="waktu">Waktu</label>
                        <input type="text" class="form-control" id="waktu" placeholder="Waktu" name="waktu" value="<?= $vidio['waktu'] ?>" reqired>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" placeholder="Link" value="<?= $vidio['link'] ?>" name="link" reqired>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Ubah</button>
                    <button class="btn btn-light" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>