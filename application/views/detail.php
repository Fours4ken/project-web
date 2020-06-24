            <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/easyzoom.css">
	        <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/meanmenu.min.css">
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(<?= base_url('assets'); ?>/img/slider/bg2.webp)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>product details </h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>product details </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-details-area fluid-padding-3 ptb-130">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-40">
                                    <div class="product-details-large tab-content">
                                        <div class="tab-pane active" id="pro-details1">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="<?= base_url('assets'); ?>/img/product-details/<?= $detail['gambar_detail_xl']; ?>">
                                                    <img src="<?= base_url('assets'); ?>/img/product-details/<?= $detail['gambar_detail']; ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-content">
                                <h2 class="text-uppercase"><?= $detail['pabrikan']; ?> <?= $detail['merk']; ?></h2>
                                
                                <div class="product-price mt-10">
                                    <span>Harga Rental <?= rupiah($detail['harga_perhari']); ?></span> ( 24 Jam )
                                </div>
                                <div class="quick-view-rating">
                                    Tahun Produksi : <?= $detail['tahun']; ?>
                                </div>
                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Deskripsi Singkat</h5>
                                    <p><?= $detail['deskripsi']; ?></p>
                                </div>
                                <div class="quickview-plus-minus">
                                        <a class="btn-style cr-btn" href="#"><span>Saya Mau Rental</span></a>
                                </div>
                                <div class="product-categories">
                                    <h5 class="pd-sub-title">Detail Lainnya</h5>
                                    <ul>
                                        <li>
                                            <?= $detail['transmisi']; ?> / <?= $detail['bahan_bakar']; ?> / <?= $detail['besar_cc']; ?> CC / <?= number_format($detail['jarak_tempuh']); ?> KM
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-share">
                                    <h5 class="pd-sub-title">Share</h5>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont icofont-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
