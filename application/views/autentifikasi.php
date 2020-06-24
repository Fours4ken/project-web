<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(<?= base_url('assets'); ?>/img/slider/bg2.webp)">
	<div class="container-fluid">
		<div class="breadcrumb-content text-center">
			<h2>login / register</h2>
			<ul>
				<li>
					<a href="<?= base_url(); ?>">home</a>
				</li>
				<li>login register</li>
			</ul>
		</div>
	</div>
</div>

<div class="login-register-area ptb-130">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 ml-auto mr-auto">
				<div class="login-register-wrapper">
					<div class="login-register-tab-list nav">
						<a class="active" data-toggle="tab" href="#lg1">
							<h4> login </h4>
						</a>
						<a data-toggle="tab" href="#lg2">
							<h4> register </h4>
						</a>
					</div>
					<div class="tab-content">
						<div id="lg1" class="tab-pane active">
							<div class="login-form-container">
								<div class="login-form">
									<form action="<?= base_url('auth/cek_auth'); ?>" method="post">
										<input type="text" name="email" placeholder="Email">
										<input type="password" name="password" placeholder="Password">
										<div class="button-box">
											<div class="login-toggle-btn">
												<a href="<?= base_url('auth/lupa_pass'); ?>">Forgot Password?</a>
											</div>
											<button type="submit" class="btn-style cr-btn"><span>Login</span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div id="lg2" class="tab-pane">
							<div class="login-form-container">
								<div class="login-form">
									<form action="<?= base_url('auth/daftar'); ?>" method="post">
										<input type="text" name="nama" placeholder="Nama Lengkap">
										<input type="text" name="email" placeholder="Email">
										<input type="password" name="password" placeholder="Password">
										<div class="button-box">
											<button type="submit"
												class="btn-style cr-btn"><span>Register</span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
