<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Wisata</h4>
                <form class="forms-sample" method="POST" action="<?= base_url('wisata/update_process') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama Tempat Wisata</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama tempat wisata" name="nama" value="<?= $wisata["nama"] ?>" reqired>
                        <input type="hidden" name="id_wisata" value="<?= $wisata["id_wisata"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" placeholder="Harga tempat wisata" name="harga" value="<?= $wisata["harga"] ?>" reqired>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="gambar" class="file-upload-default" reqired>
                        <input type="hidden" name="gambar_lama" class="file-upload-default" value="<?= $wisata['gambar'] ?>">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <input type="text" class="form-control" id="hari" placeholder="Harga" name="hari" value="<?= $wisata["hari"] ?>" reqired>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Ubah</button>
                    <button class="btn btn-light" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>