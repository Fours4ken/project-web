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
            			<div class="col-lg col-md-12 col-12">
            				<div class="your-order">
            					<h3 class="text-center">PESANAN ANDA | <span class="text-warning"><?= $check['status_bayar']; ?></span></h3>
            					<div class="your-order-table table-responsive">
            						<table>
            							<tbody>
                                            <tr>
            									<td class="product-name text-left">Nama Pelanggan</td>
            									<td class="product-total text-left"><span class="amount font-weight-bold"><?= $this->session->userdata('nama'); ?></span></td>
            									<td class="product-name text-left">
            										No. Telephone / HP
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= $this->session->userdata('telp'); ?></span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name text-left">
            										Email
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= $this->session->userdata('email'); ?></span>
                                                </td>            									
                                                <td class="product-name text-left">
            										Merk Kendaraan
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= $detail['pabrikan']; ?> <?= $detail['merk']; ?></span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name text-left">
            										Detail Lainnya
            									</td>
            									<td class="product-total text-left">
            										<span class="amount"><?= $detail['bahan_bakar']; ?> | <?= $detail['transmisi']; ?> | <?= $detail['tahun']; ?> | <?= number_format($detail['jarak_tempuh']); ?> KM</span>
            									</td>
            									<td class="product-name text-left">
            										Harga Sewa
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= rupiah($detail['harga_perhari']); ?> / 24 Jam</span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name text-left">
            										Tanggal Awal Sewa
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= date('d - M - y',strtotime($check['tgl_awal'])); ?></span>
            									</td>
            									<td class="product-name text-left">
            										Tanggal Pengembalian
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= date('d - M - y', strtotime($check['tgl_akhir'])); ?></span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name text-left">
            										Lama Hari
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= $check['lama_hari']; ?></span>
            									</td>
            									<td class="product-name text-left">
            										Sub Total Harga
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= rupiah($check['lama_hari'] * $detail['harga_perhari']); ?></span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name text-left">
            										Beban Tagihan
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold"><?= $check['ppn']; ?></span>
            									</td>
            									<td class="product-name text-left font-weight-bold text-info">
            										Total Bayar
            									</td>
            									<td class="product-total text-left">
            										<span class="amount font-weight-bold text-info"><?= rupiah($check['lama_hari']*$detail['harga_perhari']+$check['ppn']) ?></span>
            									</td>
                                            </tr>
                                            <tr class="cart_item">
            									<td class="product-name text-left conte" colspan="4">
            										<center><img src="<?= base_url('assets/'); ?>img/product/<?= $detail['gambar']; ?>" class="w-25" alt=""></center>
            									</td>
                                            </tr>
                                            <?php if( $check['status_bayar'] == 'MENUNGGU PEMBAYARAN' ){ ?>
                                            <tr>
                                                <td colspan ="4" class="order-button-payment"><a class="btn-style" href="<?= base_url('home/cek_pesanan/'); ?>">Perbarui Status Pesanan</a></td>
                                            </tr>
											<tr>
												<td colspan="4"><a href="<?= base_url('home/cancel_rental/').$check['id']; ?>" class="btn btn-outline-danger">Klik Disini Jika Batal Rental...</a></td>
											</tr>
                                            <?php } ?>
            							</tbody>
            						</table>
            					</div>
                            </div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- checkout-area end -->
