            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(<?= base_url('assets'); ?>/img/slider/bg2.webp)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>Shop Page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Shop page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shop-wrapper fluid-padding-2 pt-120 pb-150">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="product-sidebar-area pr-60">
                                <div class="sidebar-widget pb-55">
                                    <h3 class="sidebar-widget">Search Products</h3>
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Products...">
                                            <button><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget pb-50">
                                    <h3 class="sidebar-widget">by categories</h3>
                                    <div class="widget-categories">
                                        <ul>
                                            <?php foreach ( $kategori as $kat) { ?>
														<li><a href="<?= base_url('home/shop/').$kat['id_kategori']; ?>"><?= $kat['nama_kategori']; ?></a></li>
														<?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="shop-topbar-wrapper">
                                <div class="grid-list-options">
                                    <ul class="view-mode">
                                        <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid2"></i></a></li>
                                        <li><a href="#product-list" data-view="product-list"><i class="ti-view-list"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-sorting">
                                    <div class="shop-product-sorting nav">
                                        <a class="active" data-toggle="tab" href="#murah">TERMURAH </a>
                                        <a  data-toggle="tab" href="#mahal"> TERMAHAL </a>
                                        <a data-toggle="tab" href="#baru"> TERBARU </a>
                                        <a data-toggle="tab" href="#lama"> TERLAMA</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid-list-product-wrapper tab-content">
                                <div id="murah" class="product-grid product-view tab-pane active">
                                    <div class="row">
                                        <?php foreach ($nk_murah as $nkmr){ ?>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <img src="<?= base_url('assets'); ?>/img/product/<?= $nkmr['gambar']; ?>" alt="">
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li><?= $nkmr['tahun']; ?></li>
                                                            <li><?= $nkmr['transmisi']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        
                                                        <a class="action-reload" title="Lihat Detail" href="<?= base_url('home/detail/').$nkmr['id']; ?>">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                        <a class="action-plus-2 p-action-none" title="Sewa Kendaraan" href="<?= base_url('home/konfirmasi/').$nkmr['id']; ?>">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><?= $nkmr['pabrikan']; ?> <?= $nkmr['merk']; ?></h4>
                                                            <span>Jarak <?= number_format($nkmr['jarak_tempuh']); ?> KM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span><?= rupiah($nkmr['harga_perhari']); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><?= $nkmr['pabrikan']; ?> <?= $nkmr['merk']; ?></h2>
                                                    <br>
                                                    <div class="product-price">
                                                        <span>Harga <?= rupiah($nkmr['harga_perhari']); ?> / 24 Jam</span>
                                                    </div>
                                                    <p>
                                                        Tahun Produksi : <?= $nkmr['tahun']; ?>
                                                        <br>
                                                        Bahan Bakar : <?= $nkmr['bahan_bakar']; ?>
                                                        <br>
                                                        Kapasitas CC : <?= $nkmr['besar_cc']; ?> CC
                                                        <br>
                                                        Sistem Transmisi : <?= $nkmr['transmisi']; ?>
                                                    </p>
                                                    <p><?= $nkmr['deskripsi']; ?></p>
                                                    <div class="shop-list-cart">
                                                        <a href="<?= base_url('home/konfirmasi/').$nkmr['id']; ?>"><i class="ti-shopping-cart"></i> SAYA SEWA INI</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div id="mahal" class="product-grid product-view tab-pane">
                                    <div class="row">
                                        <?php foreach ($nk_mahal as $nkmh){ ?>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <img src="<?= base_url('assets'); ?>/img/product/<?= $nkmh['gambar']; ?>" alt="">
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li><?= $nkmh['tahun']; ?></li>
                                                            <li><?= $nkmh['transmisi']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        
                                                        <a class="action-reload" title="Lihat Detail" href="<?= base_url('home/detail/').$nkmh['id']; ?>">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                        <a class="action-plus-2 p-action-none" title="Sewa Kendaraan" href="<?= base_url('home/konfirmasi/').$nkmh['id']; ?>">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><?= $nkmh['pabrikan']; ?> <?= $nkmh['merk']; ?></h4>
                                                            <span>Jarak <?= number_format($nkmh['jarak_tempuh']); ?> KM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span><?= rupiah($nkmh['harga_perhari']); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><?= $nkmh['pabrikan']; ?> <?= $nkmh['merk']; ?></h2>
                                                    <br>
                                                    <div class="product-price">
                                                        <span>Harga <?= rupiah($nkmh['harga_perhari']); ?> / 24 Jam</span>
                                                    </div>
                                                    <p>
                                                        Tahun Produksi : <?= $nkmh['tahun']; ?>
                                                        <br>
                                                        Bahan Bakar : <?= $nkmh['bahan_bakar']; ?>
                                                        <br>
                                                        Kapasitas CC : <?= $nkmh['besar_cc']; ?> CC
                                                        <br>
                                                        Sistem Transmisi : <?= $nkmh['transmisi']; ?>
                                                    </p>
                                                    <p><?= $nkmh['deskripsi']; ?></p>
                                                    <div class="shop-list-cart">
                                                        <a href="<?= base_url('home/konfirmasi/').$nkmh['id']; ?>"><i class="ti-shopping-cart"></i> SAYA SEWA INI</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div id="baru" class="product-grid product-view tab-pane">
                                    <div class="row">
                                        <?php foreach ($nk_baru as $nkbr){ ?>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <img src="<?= base_url('assets'); ?>/img/product/<?= $nkbr['gambar']; ?>" alt="">
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li><?= $nkbr['tahun']; ?></li>
                                                            <li><?= $nkbr['transmisi']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        
                                                        <a class="action-reload" href="<?= base_url('home/detail/').$nkbr['id']; ?>" title="Lihat Detail">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                        <a class="action-plus-2 p-action-none" title="Sewa Kendaraan" href="<?= base_url('home/konfirmasi/').$nkbr['id']; ?>">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><?= $nkbr['pabrikan']; ?> <?= $nkbr['merk']; ?></h4>
                                                            <span>Jarak <?= number_format($nkbr['jarak_tempuh']); ?> KM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span><?= rupiah($nkbr['harga_perhari']); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><?= $nkbr['pabrikan']; ?> <?= $nkbr['merk']; ?></h2>
                                                    <br>
                                                    <div class="product-price">
                                                        <span>Harga <?= rupiah($nkbr['harga_perhari']); ?> / 24 Jam</span>
                                                    </div>
                                                    <p>
                                                        Tahun Produksi : <?= $nkbr['tahun']; ?>
                                                        <br>
                                                        Bahan Bakar : <?= $nkbr['bahan_bakar']; ?>
                                                        <br>
                                                        Kapasitas CC : <?= $nkbr['besar_cc']; ?> CC
                                                        <br>
                                                        Sistem Transmisi : <?= $nkbr['transmisi']; ?>
                                                    </p>
                                                    <p><?= $nkbr['deskripsi']; ?></p>
                                                    <div class="shop-list-cart">
                                                        <a href="<?= base_url('home/konfirmasi/').$nkbr['id']; ?>"><i class="ti-shopping-cart"></i> SAYA SEWA INI</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div id="lama" class="product-grid product-view tab-pane">
                                    <div class="row">
                                        <?php foreach ($nk_lama as $nklm){ ?>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <img src="<?= base_url('assets'); ?>/img/product/<?= $nklm['gambar']; ?>" alt="">
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li><?= $nklm['tahun']; ?></li>
                                                            <li><?= $nklm['transmisi']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        
                                                        <a class="action-reload" title="Lihat Detail" href="<?= base_url('home/detail/').$nklm['id']; ?>">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                        <a class="action-plus-2 p-action-none" title="Sewa Kendaraan" href="<?= base_url('home/konfirmasi/').$nklm['id']; ?>">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><?= $nklm['pabrikan']; ?> <?= $nklm['merk']; ?></a></h4>
                                                            <span>Jarak <?= number_format($nklm['jarak_tempuh']); ?> KM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span><?= rupiah($nklm['harga_perhari']); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><?= $nklm['pabrikan']; ?> <?= $nklm['merk']; ?></h2>
                                                    <br>
                                                    <div class="product-price">
                                                        <span>Harga <?= rupiah($nklm['harga_perhari']); ?> / 24 Jam</span>
                                                    </div>
                                                    <p>
                                                        Tahun Produksi : <?= $nklm['tahun']; ?>
                                                        <br>
                                                        Bahan Bakar : <?= $nklm['bahan_bakar']; ?>
                                                        <br>
                                                        Kapasitas CC : <?= $nklm['besar_cc']; ?> CC
                                                        <br>
                                                        Sistem Transmisi : <?= $nklm['transmisi']; ?>
                                                    </p>
                                                    <p><?= $nklm['deskripsi']; ?></p>
                                                    <div class="shop-list-cart">
                                                        <a href="<?= base_url('home/konfirmasi/').$nklm['id']; ?>"><i class="ti-shopping-cart"></i> SAYA RENTAL INI</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="paginations text-center mt-20">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>