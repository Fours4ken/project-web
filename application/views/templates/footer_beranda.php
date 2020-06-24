        <footer>
        	<div class="footer-top pt-210 pb-98 theme-bg">
        		<div class="container">
        			<div class="row">
        				<div class="col-lg-3 col-md-6 col-12">
        					<div class="footer-widget mb-30">
        						<div class="footer-logo">
        							<a href="<?= base_url(); ?>">
        								<img src="<?= base_url('assets/'); ?>img/logo/logo3.png" alt="">
        							</a>
        						</div>
        						<div class="footer-about">
        							<p><span>YOURENTAL</span> the most latgest bike store in the wold can serve you
        								latest
        								ulity of motorcycle soucan sell here your motorcycle it quo </p>
        							<div class="footer-support">
        								<h5>LAYANAN PELANGGAN</h5>
        								<span> (0123) 456 789</span>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-3 col-md-6 col-12">
        					<div class="footer-widget mb-30 pl-60">
        						<div class="footer-widget-title">
        							<h3>QUICK LINK</h3>
        						</div>
        						<div class="quick-links">
        							<ul>
        								<?php foreach ( $kategori as $kat) { ?>
														<li><a href="<?= base_url('home/shop/').$kat['id_kategori']; ?>"><?= $kat['nama_kategori']; ?> Murah</a></li>
														<?php } ?>
        							</ul>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-3 col-md-6 col-12">
        					<div class="footer-widget mb-30">
        						<div class="footer-widget-title">
        							<h3>STAFF KAMI</h3>
        						</div>
        						<div class="food-widget-content pr-30">
        							<div class="single-tweet">
        								<p><a href="#"> <i class="ti-instagram"></i> @david_bless </a> Manager Pelaksana
        									Rental Mobil Yourental</p>
        							</div>
        							<div class="single-tweet">
        								<p><a href="#"> <i class="ti-instagram"></i> @keanu_reaves </a> Manager
        									Pelaksana Rental Mobil Yourental</p>
        							</div>
        							<div class="single-tweet">
        								<p><a href="#"> <i class="ti-instagram"></i> @iko_uwais </a> Manager Pelaksana
        									Rental Mobil Yourental</p>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-3 col-md-6 col-12">
        					<div class="footer-widget mb-30">
        						<div class="footer-widget-title">
        							<h3>CONTACT INFO</h3>
        						</div>
        						<div class="food-info-wrapper">
        							<div class="food-address">
        								<div class="food-info-title">
        									<span> <i class="ti-map-alt"></i> Alamat</span>
        								</div>
        								<div class="food-info-content">
        									<p>276 Jhilli Nogor, 4th folor, Momen Tower, Main Town, New Yourk</p>
        								</div>
        							</div>
        							<div class="food-address">
        								<div class="food-info-title">
        									<span>Sosial Media Kami</span>
        								</div>
        								<div class="food-info-content">
        									<a href="#"> <i class="ti-instagram"></i> info@oswanmega.com</a>
        									<a href="#"> <i class="ti-facebook"></i> www.oswanmega.com</a>
        									<a href="#"> <i class="ti-twitter"></i> www.oswanmega.com</a>
        									<a href="#"> <i class="ti-email"></i> www.oswanmega.com</a>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="footer-bottom ptb-35 black-bg">
        		<div class="container">
        			<div class="row">
        				<div class="col-md-8 col-12">
        					<div class="copyright">
        						<p>©Copyright, 2018 All Rights Reserved by <a href="https://freethemescloud.com/">Free
        								themes Cloud</a></p>
        					</div>
        				</div>
        				<div class="col-md-4 col-12">
        					<div class="footer-payment-method">
        						<a href="#"><img alt="" src="<?= base_url('assets/'); ?>img/icon-img/payment.png"></a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
        <!-- modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-body">
        				<div class="qwick-view-left">
        					<div class="quick-view-learg-img">
        						<div class="quick-view-tab-content tab-content">
        							<div class="tab-pane active show fade" id="modal" role="tabpanel">
        								<img src="<?= base_url('assets/'); ?>img/product/<?= $suggest1['gambar']; ?>" alt="">
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="qwick-view-right">
        					<div class="qwick-view-content">
        						<h3><?= $suggest1['pabrikan']; ?> <?= $suggest1['merk']; ?></h3>
        						<div class="price">
        							<span class="new"><?= rupiah($suggest1['harga_perhari']); ?></span>

        						</div>
        						<div class="rating-number">
        							<span class="new">Tahun Produksi <?= $suggest1['tahun']; ?></span>
        						</div>
        						<h5 class="product-overview mb-0">Deskripsi Singkat</h5>
        						<br>
								<?= $suggest1['deskripsi']; ?>
        						<div class="quickview-plus-minus">
        							<a class="btn-style mt-30" href="<?= base_url('home/konfirmasi/').$suggest1['id']; ?>">SAYA RENTAL INI</a>
        						</div>
        						<div class="product-categories">
        							<h5 class="pd-sub-title">Detail Lainnya</h5>
        							<ul>
        								<li>
        									<?= $suggest1['transmisi']; ?> / <?= $suggest1['bahan_bakar']; ?> / <?= number_format($suggest1['jarak_tempuh']); ?> KM / <?= $suggest1['besar_cc']; ?> CC
        								</li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-body">
        				<div class="qwick-view-left">
        					<div class="quick-view-learg-img">
        						<div class="quick-view-tab-content tab-content">
        							<div class="tab-pane active show fade" id="modal" role="tabpanel">
        								<img src="<?= base_url('assets/'); ?>img/product/<?= $suggest2['gambar']; ?>" alt="">
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="qwick-view-right">
        					<div class="qwick-view-content">
        						<h3><?= $suggest2['pabrikan']; ?> <?= $suggest2['merk']; ?></h3>
        						<div class="price">
        							<span class="new"><?= rupiah($suggest2['harga_perhari']); ?></span>

        						</div>
        						<div class="rating-number">
        							<span class="new">Tahun Produksi <?= $suggest2['tahun']; ?></span>
        						</div>
        						<h5 class="product-overview mb-0">Deskripsi Singkat</h5>
        						<br>
								<?= $suggest2['deskripsi']; ?>
        						<div class="quickview-plus-minus">
        							<a class="btn-style mt-30" href="<?= base_url('home/konfirmasi/').$suggest2['id']; ?>">SAYA RENTAL INI</a>
        						</div>
        						<div class="product-categories">
        							<h5 class="pd-sub-title">Detail Lainnya</h5>
        							<ul>
        								<li>
        									<?= $suggest2['bahan_bakar']; ?> / <?= number_format($suggest2['jarak_tempuh']); ?> KM / <?= $suggest2['transmisi']; ?> / <?= $suggest2['besar_cc']; ?> CC
        								</li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div><div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-body">
        				<div class="qwick-view-left">
        					<div class="quick-view-learg-img">
        						<div class="quick-view-tab-content tab-content">
        							<div class="tab-pane active show fade" id="modal" role="tabpanel">
        								<img src="<?= base_url('assets/'); ?>img/product/<?= $suggest3['gambar']; ?>" alt="">
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="qwick-view-right">
        					<div class="qwick-view-content">
        						<h3><?= $suggest3['pabrikan']; ?> <?= $suggest3['merk']; ?></h3>
        						<div class="price">
        							<span class="new"><?= rupiah($suggest3['harga_perhari']); ?></span>

        						</div>
        						<div class="rating-number">
        							<span class="new">Tahun Produksi <?= $suggest3['tahun']; ?></span>
        						</div>
        						<h5 class="product-overview mb-0">Deskripsi Singkat</h5>
        						<br>
								<?= $suggest3['deskripsi']; ?>
        						<div class="quickview-plus-minus">
        							<a class="btn-style mt-30" href="<?= base_url('home/konfirmasi/').$suggest3['id']; ?>">SAYA RENTAL INI</a>
        						</div>
        						<div class="product-categories">
        							<h5 class="pd-sub-title">Detail Lainnya</h5>
        							<ul>
        								<li>
        									<?= $suggest3['bahan_bakar']; ?> / <?= number_format($suggest3['jarak_tempuh']); ?> KM / <?= $suggest3['transmisi']; ?> / <?= $suggest3['besar_cc']; ?> CC
        								</li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div><div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-body">
        				<div class="qwick-view-left">
        					<div class="quick-view-learg-img">
        						<div class="quick-view-tab-content tab-content">
        							<div class="tab-pane active show fade" id="modal" role="tabpanel">
        								<img src="<?= base_url('assets/'); ?>img/product/<?= $suggest4['gambar']; ?>" alt="">
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="qwick-view-right">
        					<div class="qwick-view-content">
        						<h3><?= $suggest4['pabrikan']; ?> <?= $suggest4['merk']; ?></h3>
        						<div class="price">
        							<span class="new"><?= rupiah($suggest4['harga_perhari']); ?></span>

        						</div>
        						<div class="rating-number">
        							<span class="new">Tahun Produksi <?= $suggest4['tahun']; ?></span>
        						</div>
        						<h5 class="product-overview mb-0">Deskripsi Singkat</h5>
        						<br>
								<?= $suggest4['deskripsi']; ?>
        						<div class="quickview-plus-minus">
        							<a class="btn-style mt-30" href="<?= base_url('home/konfirmasi/').$suggest4['id']; ?>">SAYA RENTAL INI</a>
        						</div>
        						<div class="product-categories">
        							<h5 class="pd-sub-title">Detail Lainnya</h5>
        							<ul>
        								<li>
        									<?= $suggest4['bahan_bakar']; ?> / <?= number_format($suggest4['jarak_tempuh']); ?> KM / <?= $suggest4['transmisi']; ?> / <?= $suggest4['besar_cc']; ?> CC
        								</li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div><div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-body">
        				<div class="qwick-view-left">
        					<div class="quick-view-learg-img">
        						<div class="quick-view-tab-content tab-content">
        							<div class="tab-pane active show fade" id="modal" role="tabpanel">
        								<img src="<?= base_url('assets/'); ?>img/product/<?= $suggest5['gambar']; ?>" alt="">
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="qwick-view-right">
        					<div class="qwick-view-content">
        						<h3><?= $suggest5['pabrikan']; ?> <?= $suggest5['merk']; ?></h3>
        						<div class="price">
        							<span class="new"><?= rupiah($suggest5['harga_perhari']); ?></span>

        						</div>
        						<div class="rating-number">
        							<span class="new">Tahun Produksi <?= $suggest5['tahun']; ?></span>
        						</div>
        						<h5 class="product-overview mb-0">Deskripsi Singkat</h5>
        						<br>
								<?= $suggest5['deskripsi']; ?>
        						<div class="quickview-plus-minus">
        							<a class="btn-style mt-30" href="<?= base_url('home/konfirmasi/').$suggest5['id']; ?>">SAYA RENTAL INI</a>
        						</div>
        						<div class="product-categories">
        							<h5 class="pd-sub-title">Detail Lainnya</h5>
        							<ul>
        								<li>
        									<?= $suggest5['bahan_bakar']; ?> / <?= number_format($suggest5['jarak_tempuh']); ?> KM / <?= $suggest5['transmisi']; ?> / <?= $suggest5['besar_cc']; ?> CC
        								</li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div><div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-body">
        				<div class="qwick-view-left">
        					<div class="quick-view-learg-img">
        						<div class="quick-view-tab-content tab-content">
        							<div class="tab-pane active show fade" id="modal" role="tabpanel">
        								<img src="<?= base_url('assets/'); ?>img/product/<?= $suggest6['gambar']; ?>" alt="">
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="qwick-view-right">
        					<div class="qwick-view-content">
        						<h3><?= $suggest6['pabrikan']; ?> <?= $suggest6['merk']; ?></h3>
        						<div class="price">
        							<span class="new"><?= rupiah($suggest6['harga_perhari']); ?></span>

        						</div>
        						<div class="rating-number">
        							<span class="new">Tahun Produksi <?= $suggest6['tahun']; ?></span>
        						</div>
        						<h5 class="product-overview mb-0">Deskripsi Singkat</h5>
        						<br>
								<?= $suggest6['deskripsi']; ?>
        						<div class="quickview-plus-minus">
        							<a class="btn-style mt-30" href="<?= base_url('home/konfirmasi/').$suggest6['id']; ?>">SAYA RENTAL INI</a>
        						</div>
        						<div class="product-categories">
        							<h5 class="pd-sub-title">Detail Lainnya</h5>
        							<ul>
        								<li>
        									<?= $suggest6['bahan_bakar']; ?> / <?= number_format($suggest6['jarak_tempuh']); ?> KM / <?= $suggest6['transmisi']; ?> / <?= $suggest6['besar_cc']; ?> CC
        								</li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>











        <!-- all js here -->
        <script src="<?= base_url('assets/'); ?>js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/popper.js"></script>
        <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/isotope.pkgd.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/jquery.counterup.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/waypoints.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/moment-with-locales.js"></script>
		<script src="<?= base_url('assets/'); ?>js/bootstrap-datetimepicker.js"></script>
        <script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/plugins.js"></script>
		<script src="<?= base_url('assets/'); ?>js/main.js"></script>
		<script type="text/javascript" src="<?= base_url('assets/'); ?>js/bootstrap-material-datetimepicker.js"></script>
		<script>
		$(function () {
			$('#tgl1').datetimepicker({
				format: 'YYYY/MM/DD',
				ignoreReadonly: true
			});

			$('#tgl2').datetimepicker({
				useCurrent: false,
				format: 'YYYY/MM/DD',
				ignoreReadonly: true
			});

			$('#tgl1').on("dp.change", function (e) {
				$('#tgl2').data("DateTimePicker").minDate(e.date);
			});

			$('#tgl2').on("dp.change", function (e) {
				$('#tgl1').data("DateTimePicker").maxDate(e.date);
				CalcDiff()
			});

		});

		function CalcDiff() {
			var a = $('#tgl1').data("DateTimePicker").date();
			var b = $('#tgl2').data("DateTimePicker").date();
			var timeDiff = 0
			if (b) {
				timeDiff = (b - a) / 1000;
			}

			$('#selisih').val(Math.floor(timeDiff / (86400))+' Hari');
		}

	</script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$.material.init()
		});
		</script>
        </body>

        </html>
