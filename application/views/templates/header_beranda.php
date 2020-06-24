<?php
    function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',',',');
	return $hasil_rupiah;
	}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oswan - eCommerce HTML5 Template</title>
	<meta name="description" content="yourental.com adalah Webiste Rental Kendaraan Online">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/favicon.png">

	<!-- all css here -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/chosen.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/icofont.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/meanmenu.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bundle.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-material-datetimepicker.css" />
	
	<script type="text/javascript">

function startCalculate(){
interval=setInterval("Calculate()",10);
}

function Calculate(){
var a=document.form1.harga.value;

var c=document.form1.selisih.value
document.form1.total.value=(a*c);
}

function stopCalc(){
clearInterval(interval);
}

</script>

</head>

<body>
	<div class="wrapper">
		<!-- header start -->
		<header>
			<div class="header-area transparent-bar ptb-55">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-4">
							<div class="logo-small-device">
								<a href="<?= base_url(); ?>"><img alt=""
										src="<?= base_url('assets/'); ?>img/logo/logo4.png"></a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-8">
							<div class="header-contact-menu-wrapper pl-45">
								<div class="header-contact">
									<p>PERLU BANTUAN? HUBUNGI (0123) 456 789</p>
								</div>
								<div class="menu-wrapper text-center">
									<button class="menu-toggle">
										<img class="s-open" alt=""
											src="<?= base_url('assets/'); ?>img/icon-img/menu1.png">
										<img class="s-close" alt=""
											src="<?= base_url('assets/'); ?>img/icon-img/menu1-close.png">
									</button>
									<div class="main-menu">
										<nav>
											<ul>
												<li><a href="<?= base_url(); ?>">home</a></li>
												<li><a href="<?= base_url('home/shop/0'); ?>">rental</a>
													<ul>
														<?php foreach ( $kategori as $kat) { ?>
														<li><a href="<?= base_url('home/shop/').$kat['id_kategori']; ?>"><?= $kat['nama_kategori']; ?></a></li>
														<?php } ?>
													</ul>
												</li>
												</li>
												<li><a href="contact.html">SKB</a></li>
												<li><a href="<?= base_url('home/contact/'); ?>">contact us</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<?php if ( $this->session->userdata('id')=='' ) { ?>
							<div class="header-cart cart-small-device">
								<button class="icon-cart">
									<i class="ti ti-user"></i>
									<span class="count-price-add"><a href="<?= base_url('home/autentifikasi'); ?>">Masuk</a></span>
								</button>
							</div>
							<?php } else { ?>					
							<div class="header-cart cart-small-device">
								<button class="icon-cart">
									<i class="ti ti-user"></i>
									<span class="count-price-add">Profile  ( <?php if( $booking_tmp == 0 ){ echo $booking; } elseif( $booking == 0 ) { echo $booking_tmp; } else { echo "0"; } ?> )</span>
								</button>
								<div class="shopping-cart-content">
									<ul>
										<li class="single-shopping-cart">
											<div class="shopping-cart-title">
												<center><img alt="" src="<?= base_url('assets/'); ?>img/user/<?= $user['foto']; ?>" width="100"></center>
												<h3><?= $this->session->userdata('nama'); ?>
												<span><a href="<?= base_url('home/cek_pesanan/'); ?>" class="btn btn-outline-primary col-lg text-left mt-10"><small>Pesanan Anda ( <?php if( $booking_tmp == 0 ){ echo $booking; } else { echo $booking_tmp; } ?> )</small></a></span>
												<span><a href="<?= base_url('home/profile/'); ?>" class="btn btn-outline-primary mtb-10 col-lg text-left"><small>Lihat Profil Anda </small></a></span>
											</div>
										</li>
									</ul>
									<!-- <div class="shopping-cart-total">
										<h4>total: <span>$550.00</span></h4>
									</div> -->
									<div class="shopping-cart-btn">
										<a class="btn-style cr-btn" href="<?= base_url('auth/logout'); ?>">Logout</a>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="mobile-menu-area col-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul class="menu-overflow">
										<li><a href="<?= base_url(); ?>">HOME</a></li>
										<li><a href="<?= base_url('home/shop/0'); ?>">rental</a>
											<ul>
												<?php foreach ( $kategori as $kat) { ?>
												<li><a href="<?= base_url('home/shop/').$kat['id_kategori']; ?>"><?= $kat['nama_kategori']; ?></a></li>
												<?php } ?>
											</ul>
										</li>
										<li><a href="contact.html">SKB</a></li>
										<li><a href="<?= base_url('home/contact/'); ?>">contact us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<?php

					if ( $this->session->userdata('id')=='' ) {
						
						?>
				<div class="header-cart-wrapper">
					<div class="header-cart">
						<button class="icon-cart">
							<i class="ti ti-user"></i>
							<span class="count-price-add"><a href="<?= base_url('home/autentifikasi'); ?>">Masuk</a></span>
						</button>
					</div>
				</div>
				<?php

					} else {
						
					?>
				<div class="header-cart-wrapper">
					<div class="header-cart">
						<button class="icon-cart">
							<i class="ti ti-user"></i>
							<span class="count-price-add">Profile   ( <?php if( $booking_tmp == 0 ){ echo $booking; } elseif($booking == 0) { echo $booking_tmp; } else { echo "0"; } ?> )</span>
						</button>
						<div class="shopping-cart-content">
							<ul>
								<li class="single-shopping-cart">
									<div class="shopping-cart-title">
										<center><img alt="" src="<?= base_url('assets/'); ?>img/user/<?= $user['foto']; ?>" width="100"></center>
										<h3><?= $this->session->userdata('nama'); ?>
												<span><a href="<?= base_url('home/cek_pesanan/'); ?>" class="btn btn-outline-primary col-lg text-left mt-10"><small>Pesanan Anda ( <?php if( $booking_tmp == 0 ){ echo $booking; } else { echo $booking_tmp; } ?> )</small></a></span>
												<span><a href="<?= base_url('home/profile/'); ?>" class="btn btn-outline-primary mtb-10 col-lg text-left"><small>Lihat Profil Anda </small></a></span>
									</div>
								</li>
							</ul>
							<!-- <div class="shopping-cart-total">
								<h4>total: <span>$550.00</span></h4>
							</div> -->
							<div class="shopping-cart-btn">
								<a class="btn-style cr-btn" href="<?= base_url('auth/logout'); ?>">Logout</a>
							</div>
						</div>
					</div>
				</div>
					<?php } ?>
			</div>
		</header>
		
