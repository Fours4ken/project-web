<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(<?= base_url('assets'); ?>/img/slider/bg2.webp)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>blog sidebar</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>blog sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-area pt-120 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="product-sidebar-area pr-30">
                                <div class="sidebar-widget pb-50">
                                    <h3 class="sidebar-widget">Profile Anda</h3>
                                    <div class="widget-categories">
                                        <ul>
                                            <?= form_open_multipart('home/changeprofile/'); ?>
                                            <li>Nama Lengkap <input type="text" class="form-control-plaintext border-bottom-1" value="<?= $user['nama']; ?>" name="nama"></li>
                                            <li>Alamat Email <input type="text" class="form-control-plaintext border-bottom-1" value="<?= $user['email']; ?>" name="email"></li>
                                            <li>Alamat Lengkap <input type="text" class="form-control-plaintext border-bottom-1" value="<?= $user['alamat']; ?>" name="alamat"></li>
                                            <li>Nomor Telepon <input type="text" class="form-control-plaintext border-bottom-1" value="<?= $user['no_telp']; ?>" name="telp"></li>
                                            <li>Update Foto <input type="file" class="form-control-plaintext" name="image"></li>
                                            <li><button type="submit" class="btn btn-outline-primary col-lg">UBAH PROFILE</button></li>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-hm-wrapper mb-40">
                                        <div class="blog-img">
                                            <a href="blog-details.html"><img src="<?= base_url('assets'); ?>/img/product-details/<?= $detail['gambar_detail']; ?>" alt=""></a>
                                        </div>
                                        <div class="blog-hm-content">
                                            <?= date('d M ,Y', strtotime($cekbok['tgl_awal'])); ?>
                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-hm-wrapper mb-40">
                                        <div class="blog-img">
                                            <a href="blog-details.html"><img src="<?= base_url('assets'); ?>/img/product-details/<?= $detail['gambar_detail']; ?>" alt=""></a>
                                            <div class="blog-date">
                                                <h4>24 February, 2018</h4>
                                            </div>
                                        </div>
                                        <div class="blog-hm-content">
                                            <h3><a href="blog-details.html">Sports Motorbike for play in desert </a></h3>
                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>