<section class="pt-5" id="featuresVideos">

    <div class="container">
        <div class="row flex-center mb-5">
            <div class="col-lg-8 text-center">
                <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5"><?= $vheader['judul'] ?></h1>
                <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
                <p class="mx-auto"><?= $vheader['deskripsi'] ?></p>
            </div>
        </div>
        <div class="row flex-center">
            <div class="col-12">
                <div class="carousel slide" id="carouselExampleIndicators" data-bs-touch="false" data-bs-interval="false">
                    <div class="row align-items-center">
                        <div class="col-12 col-xxl-7 px-2">
                            <div class="carousel-inner">
                                <div class="carousel-item active h-100">
                                    <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                        <iframe src="<?= $vidio_active['link'] ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <?php foreach ($vidio as $v) : ?>
                                    <div class="carousel-item">
                                        <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                                            <iframe src="<?= $vidio_active['link'] ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-xxl-2 pt-3 pt-md-0">
                            <div class="carousel-indicators">
                                <div class="row h-100 w-100">
                                    <div class="col-12 px-1">
                                        <button class="active" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"><img class="d-block" src="<?= base_url('template/rhea/public/assets/img/gallery/maldives-v.png') ?>" alt="..." /></button>
                                    </div>
                                    <div class="col-12 px-1">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img class="d-block" src="<?= base_url('template/rhea/public/assets/img/gallery/tanzania.png') ?>" alt="..." /></button>
                                    </div>
                                    <div class="col-12 px-1">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img class="d-block" src="<?= base_url('template/rhea/public/assets/img/gallery/kathmandu-v.png') ?>" alt="..." /></button>
                                    </div>
                                    <div class="col-12 px-1">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"><img class="d-block" src="<?= base_url('template/rhea/public/assets/img/gallery/chaina.png') ?>" alt="..." /></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 px-xxl-0">
                            <div class="row">
                                <?php foreach ($vidio as $v) : ?>
                                    <div class="col-12 col-md-11 col-lg-12 col-xl-10 col-xxl-7 px-xxl-0 ps-lg-0 ps-md-4">
                                        <div class="card h-100 py-md-2 active" style="min-height:113px">
                                            <div class="card-body d-flex flex-column justify-content-center">
                                                <p class="mb-0 fw-semi-bold text-dark"> <?= $v['judul'] ?></p>
                                                <p class="card-text"><small class="text-800"><?= $v['waktu'] ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>