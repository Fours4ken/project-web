            <div class="breadcrumb-area pt-255 pb-170"
            	style="background-image: url(<?= base_url('assets'); ?>/img/slider/bg2.webp)">
            	<div class="container-fluid">
            		<div class="breadcrumb-content text-center">
            			<h2>checkout page</h2>
            			<ul>
            				<li>
            					<a href="#">home</a>
            				</li>
            				<li>checkout page</li>
            			</ul>
            		</div>
            	</div>
            </div>
            <!-- checkout-area start -->
            <div class="checkout-area pt-130 pb-100">
            	<div class="container">
            		<div class="row">
            			<div class="col-lg-4 col-md-12 col-12">
            				<form action="<?= base_url('home/testis'); ?>" method="post" id="form1" name="form1">
            					<div class="checkbox-form">
            						<h3>Billing Details</h3>
            						<div class="row">
            							<div class="col-md-12">
            								<label>Tanggal Awal</label>
            								<div class="input-group date table-bordered" id="tgl1">
            									<input type="text" name="start" class="form-control-plaintext" readonly />
            									<span class="input-group-addon"><span
            											class="glyphicon-calendar glyphicon"> <i
            												class="ti-calendar"></i>
            										</span></span>
            								</div>
            							</div>
            							<div class="col-md-12 mt-10">
            								<label>Tanggal Akhir</label>
            								<div class="input-group date table-bordered" id="tgl2">
            									<input type="text" name="end" class="form-control-plaintext" readonly/>
            									<span class="input-group-addon"><span
            											class="glyphicon-calendar glyphicon"><i
            												class="ti-calendar"></i></span></span>
            								</div>
										</div>
										<div class="col-md-12 mt-10">
            								<label>Waktu Ambil & Kembali</label>
            								<div class="input-group date table-bordered">
            									<input type="text" class="form-control floating-label"  id="time">
            									<span class="input-group-addon"><span
            											class="glyphicon-calendar glyphicon"><i
            												class="ti-timer"></i></span></span>
            								</div>
            							</div>
            							<div class="col-md-12 mt-10">
            								<label>Selisih Hari</label>
            								<input type="text" class="form-control" id="selisih" onfocus="startCalculate()" onblur="stopCalc()"/>
										</div>
										<div class="col-md-12 mt-10">
            								<label>Bayar</label>
            								<input type="text" class="form-control" id="harga" value="200000" onfocus="startCalculate()" onblur="stopCalc()"/>
            							</div>
										<div class="col-md-12 mt-10">
            								<label>Bayar</label>
            								<input type="text" class="form-control" id="total" onfocus="startCalculate()" onblur="stopCalc()"/>
            							</div>
            							<div class="col-md-12 mt-10">
            								<div class="country-select">
            									<label>Country <span class="required">*</span></label>
            									<select>
            										<option value="volvo">Bank Transfer</option>
            										<option value="saab">Tunai di Tempat</option>
            										<option value="mercedes">Your Epay</option>
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
													<button type="submit">Input</button>
            							</div>
            						</div>
            					</div>
            				</form>
            			</div>
            			<div class="col-lg-8 col-md-12 col-12">
            				<div class="your-order">
            					<h3>Your order # 0001-0001</h3>
            					<div class="your-order-table table-responsive">
            						<table>
            							<thead>
            								<tr>
            									<th class="product-name">Nama Pelanggan</th>
            									<th class="product-total">Rin Kasuragi</th>
            								</tr>
            							</thead>
            							<tbody>
            								<tr class="cart_item">
            									<td class="product-name">
            										Kendaraan Yang Di Rental
            									</td>
            									<td class="product-total">
            										<span class="amount">Honda Beat 2010</span>
            									</td>
            								</tr>
            								<tr class="cart_item">
            									<td class="product-name">
            										Harga Sewa
            									</td>
            									<td class="product-total">
            										<span class="amount font-weight-bold">Rp. 200,000</span> / 24 Jam
            									</td>
            								</tr>
            								<tr class="cart_item">
            									<td class="product-name">
            										Jangka Waktu
            									</td>
            									<td class="product-total">
            										<span class="amount font-weight-bold">2 Hari</span>
            									</td>
            								</tr>
            							</tbody>
            							<tfoot>
            								<tr class="cart-subtotal">
            									<th>Beban Tagihan</th>
            									<td><span class="amount">Rp. 1</span></td>
            								</tr>
            								<!-- <tr class="cart-subtotal">
                                                <th>Potongan Harga</th>
                                                <td><span class="amount">1</span></td>
                                            </tr> -->
            								<tr class="order-total">
            									<th>Total Tagihan</th>
            									<td><strong><span class="amount">Rp. 400,001</span></strong>
            									</td>
            								</tr>
            							</tfoot>
            						</table>
            					</div>
            					<div class="payment-method mt-40">
            						<div class="payment-accordion">
            							<!-- <div class="panel-group" id="faq">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                                </div>
                                                <div id="payment-1" class="panel-collapse collapse show">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                                </div>
                                                <div id="payment-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                                </div>
                                                <div id="payment-3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
            							<div class="order-button-payment">
            								<input type="submit" value="Place order" />
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- checkout-area end -->
