            <div class="breadcrumb-area pt-255 pb-170"
            	style="background-image: url(<?= base_url('assets'); ?>/img/slider/bg2.webp)">
            	<div class="container-fluid">
            		<div class="breadcrumb-content text-center">
            			<h2>KONFIRMASI PESANAN</h2>
            			<ul>
            				<li>
            					<a href="#">home</a>
            				</li>
            				<li>konfirmasi</li>
            			</ul>
            		</div>
            	</div>
            </div>
            <!-- checkout-area start -->
            <div class="checkout-area pt-130 pb-100">
            	<div class="container">
            		<div class="row">
            			<div class="col-lg-4 col-md-12 col-12">
            				<form action="<?= base_url('home/konfirmasi_check/').$detail['id'].'/'.$this->session->userdata('id'); ?>" method="post" id="form1" name="form1">
            					<div class="checkbox-form">
            						<h3>Billing Details</h3>
            						<div class="row">
            							<div class="col-md-12">
            								<label>Tanggal Awal</label>
            								<div class="input-group date table-bordered" id="tgl1">
            									<input type="text" name="start" class="form-control-plaintext" readonly/>
            									<span class="input-group-addon"><span
            											class="glyphicon-calendar glyphicon"> <i
            												class="ti-calendar"></i>
            										</span></span>
            								</div>
            							</div>
            							<div class="col-md-12 mt-10">
            								<label>Tanggal Akhir</label>
            								<div class="input-group date table-bordered" id="tgl2">
            									<input type="text" name="end" class="form-control-plaintext"  readonly/>
            									<span class="input-group-addon"><span
            											class="glyphicon-calendar glyphicon"><i
            												class="ti-calendar"></i></span></span>
            								</div>
										</div>
										<div class="col-md-12 mt-10">
            								<label>Waktu Ambil & Kembali</label>
            								<div class="input-group date table-bordered">
            									<input type="text" class="form-control floating-label" name="time" id="time" value="10:00">
            									<span class="input-group-addon"><span
            											class="glyphicon-calendar glyphicon"><i
            												class="ti-timer"></i></span></span>
            								</div>
            							</div>
            							<div class="col-md-12 mt-10">
            								<div class="country-select">
            									<label>Media Bayar <span class="required">*</span></label>
            									<select name="pay">
            										<option value="Bank Transfer">Bank Transfer</option>
            										<option value="Tunai">Tunai</option>
            									</select>
            								</div>
            							</div>
            							<div class="col-md-12 mt-10">
            								<h5 class="text-danger">Mohon Diperhatikan</h5>
            								<p># Pembayaran Via Bank Maksimal 1 Jam Setelah Pemesanan.</p>
            								<p># Pembayaran Tunai Hanya Untuk Pengambilan Kendaraan di Bawah Jam 12
            									Siang.</p>
            								<p># Pembayaran Via <span class="text-info font-weight-bold">Your
													Epay</span> Maksimal 3 Jam Setelah Pemesanan.</p>
            							</div>
            						</div>
            					</div>
            				
            			</div>
            			<div class="col-lg-8 col-md-12 col-12">
            				<div class="your-order">
            					<h3>Your order</h3>
            					<div class="your-order-table table-responsive">
            						<table>
            							<thead>
            								<tr>
            									<th class="product-name">Nama Pelanggan</th>
            									<th class="product-total"><span class="amount font-weight-bold"><?= $this->session->userdata('nama'); ?></span></th>
            								</tr>
            							</thead>
            							<tbody>
                                            <tr class="cart_item">
            									<td class="product-name">
            										No. Telephone / HP
            									</td>
            									<td class="product-total">
            										<span class="amount font-weight-bold"><?= $this->session->userdata('telp'); ?></span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name">
            										Email
            									</td>
            									<td class="product-total">
            										<span class="amount font-weight-bold"><?= $this->session->userdata('email'); ?></span>
            									</td>
            								</tr>
            								<tr class="cart_item">
            									<td class="product-name">
            										Merk Kendaraan
            									</td>
            									<td class="product-total">
            										<span class="amount font-weight-bold"><?= $detail['pabrikan']; ?> <?= $detail['merk']; ?></span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name">
            										Detail Lainnya
            									</td>
            									<td class="product-total">
            										<span class="amount"><?= $detail['bahan_bakar']; ?> | <?= $detail['transmisi']; ?> | <?= $detail['tahun']; ?> | <?= number_format($detail['jarak_tempuh']); ?> KM</span>
            									</td>
            								</tr>
            								<tr class="cart_item">
            									<td class="product-name">
            										Harga Sewa
            									</td>
            									<td class="product-total">
            										<span class="amount font-weight-bold"><?= rupiah($detail['harga_perhari']); ?> / Hari</span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name">
            										Lama Sewa
            									</td>
            									<td class="product-total">
            										 <input type="text" class="form-control-plaintext text-center" name="gap" id="selisih" placeholder="0"/>
            									</td>
            								</tr>
            							</tbody>
            						</table>
            					</div>
            					<div class="payment-method mt-40">
            						<div class="payment-accordion">
            							<div class="order-button-payment">
            								<input type="submit" value="Lanjutkan" />
            							</div>
            						</div>
            					</div>
                            </div>
                            </form>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- checkout-area end -->
