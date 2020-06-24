<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(<?= base_url('assets'); ?>/img/slider/bg2.webp)">
	<div class="container-fluid">
		<div class="breadcrumb-content text-center">
			<h2>login / register</h2>
			<ul>
				<li>
					<a href="<?= base_url(); ?>">home</a>
				</li>
				<li>CHANGE PASSWORD</li>
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
							<h4> GANTI PASSWORD ANDA </h4>
						</a>
					</div>
					<div class="tab-content">
						<div id="lg1" class="tab-pane active">
							<div class="login-form-container">
								<div class="login-form">
									<form action="<?= base_url('auth/changePassword').'?email='.$email.'&'.'token='.$token; ?>" method="post">
                                        <input type="password" name="password1" placeholder="Email" required>
                                        <input type="password" name="password2" placeholder="Email" required>
										<div class="button-box">
											<button type="submit" class="btn-style cr-btn"><span>SUBMIT</span></button>
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
