<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	
	 */
	public function index()
	{
		$this->load->model('ModelUser');
		$data['kategori'] = $this->ModelUser->getKategori();
		$data['suggest1'] = $this->ModelUser->getSuggest1();
		$data['suggest2'] = $this->ModelUser->getSuggest2();
		$data['suggest3'] = $this->ModelUser->getSuggest3();
		$data['suggest4'] = $this->ModelUser->getSuggest4();
		$data['suggest5'] = $this->ModelUser->getSuggest5();
		$data['suggest6'] = $this->ModelUser->getSuggest6();
		$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
		$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
		$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
		
        $this->load->view('templates/header_beranda', $data);
        $this->load->view('beranda', $data);
        $this->load->view('templates/footer_beranda', $data);
	}
	/**  */
	public function shop()
	{
		$url = $this->uri->segment('3');
		$this->load->model('ModelUser');
		$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
		$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
		$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
		if( $url == 0 ) {
			$data['nk_murah'] = $this->ModelUser->NKmurah();
			$data['nk_mahal'] = $this->ModelUser->NKmahal();
			$data['nk_baru'] = $this->ModelUser->NKbaru();
			$data['nk_lama'] = $this->ModelUser->NKlama();
		}
		elseif( $url != 0) {
			$data['nk_murah'] = $this->ModelUser->WKmurah( $url );
			$data['nk_mahal'] = $this->ModelUser->WKmahal( $url );
			$data['nk_baru'] = $this->ModelUser->WKbaru( $url );
			$data['nk_lama'] = $this->ModelUser->WKlama( $url );
		}
		$data['kategori'] = $this->ModelUser->getKategori();
        $this->load->view('templates/header_beranda', $data);
        $this->load->view('shop', $data);
		$this->load->view('templates/footer_beranda', $data);
	}
	/** */
	public function detail()
	{
		$url = $this->uri->segment('3');
		$this->load->model('ModelUser');
		$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
		$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
		$data['kategori'] = $this->ModelUser->getKategori();
		$data['detail'] = $this->ModelUser->detailKendaraan ( $url );
		$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
        $this->load->view('templates/header_beranda', $data);
        $this->load->view('detail', $data);
        $this->load->view('templates/footer_beranda', $data);
	}
	/** */
	public function autentifikasi()
	{
		$this->load->model('ModelUser');
		$data['kategori'] = $this->ModelUser->getKategori();
		$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
		$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
		$this->load->view('templates/header_beranda', $data);
        $this->load->view('autentifikasi', $data);
        $this->load->view('templates/footer_beranda', $data);
	}
	/** */
	public function konfirmasi ()
	{
		if ( $this->session->userdata('id') == '' ) {
			echo"
				<script>
					alert('Anda Belum Login. Silahkan Login Terlebih Dahulu.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
		}
		else {
		$url = $this->uri->segment('3');
		$this->load->model('ModelUser');
		$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
		$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
		$data['kategori'] = $this->ModelUser->getKategori();
		$data['detail'] = $this->ModelUser->detailKendaraan ( $url );
		$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
		$this->load->view('templates/header_beranda', $data);
        $this->load->view('confirm', $data);
		$this->load->view('templates/footer_beranda', $data);
		}
	}
	/** */
	public function konfirmasi_check()
	{
		if ( $this->session->userdata('id') == '' ) {
			echo"
				<script>
					alert('Anda Belum Login. Silahkan Login Terlebih Dahulu.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
		}
		elseif ( $this->input->post('start') == '' OR $this->input->post('end') == '' ) {
					echo"<script>
							alert('Lengkapi Data Dengan Benar.');
  							window.history.back();
						</script>";
		}
		elseif ( $this->session->userdata('id') != '') {
			$this->load->model('ModelUser');
			$data['cek_bok_tmp'] = $this->ModelUser->get_booking_tmp ( $this->session->userdata('id') );
			$data['cek_bok'] = $this->ModelUser->get_booking ( $this->session->userdata('id') );
			
			if ( $data['cek_bok'] > 0 OR $data['cek_bok_tmp'] > 0 ) {
				echo"<script>
							alert('Masih Ada Transaksi Rental Yang Belum Anda Selesaikan.');
  							window.history.back();
						</script>";
			}
			else {
				$id_kend = $this->uri->segment('3');
				$id_user = $this->uri->segment('4');
				$exp = explode(" ", $this->input->post('gap'));
				$this->load->model('ModelUser');
				$data['kategori'] = $this->ModelUser->getKategori();
		
				if ( $exp[0] == 0 ) {
					$gap = 1;
				}
				else {
					$gap = $exp[0];
				};
				$tgl_start = $this->input->post('start');
				$tgl_end = $this->input->post('end');
				$time = $this->input->post('time');
				$pay = $this->input->post('pay');
				$ppn = 1;
				$data['detail'] = $this->ModelUser->detailKendaraan( $id_kend );
				$data['insert'] = [
					'id_user' => $this->session->userdata('id'),
					'id_kendaraan' => $id_kend,
					'tgl_awal' => $tgl_start,
					'tgl_akhir' => $tgl_end,
					'jam_ambil' => $time,
					'media_bayar' => $pay,
					'lama_hari' => $gap,
					'ppn' => $ppn,
					'total_bayar' => $data['detail']['harga_perhari'] * $gap + $ppn
					];
				
				$this->ModelUser->booking_tmp( $data['insert'] );
				$data['check'] = $this->ModelUser->get_booking_tmp( $id_user );
				$status = 'Booked';
				$this->ModelUser->up_st_kendaraan($data['check']['id_kendaraan'], $status);
				$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
				$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
				$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);

				$this->load->view('templates/header_beranda', $data);
        		$this->load->view('confirm-check', $data);
				$this->load->view('templates/footer_beranda', $data);
			}
		}
		else {
		echo"<script>
							alert('Terjadi Kendala di System Kami.');
  							window.history.back();
						</script>";
		}
	}

	public function cancel()
	{
		$id = $this->uri->segment('3');
		$id_user = $this->session->userdata('id');
		$status = 'Ready';
		$this->load->model('ModelUser');
		$data['check'] = $this->ModelUser->get_booking_tmp( $id_user );
		$this->ModelUser->up_st_kendaraan($data['check']['id_kendaraan'], $status);
		$this->ModelUser->cancel_book( $id );
		redirect('');
	}

	public function cancel_rental()
	{
		$id = $this->uri->segment('3');
		$id_user = $this->session->userdata('id');
		$status = 'Ready';
		$this->load->model('ModelUser');
		$data['check'] = $this->ModelUser->get_booking( $id_user );
		$this->ModelUser->up_st_kendaraan($data['check']['id_kendaraan'], $status);
		$this->ModelUser->cancel_rent( $id );
		redirect('');
	}
	

	public function booking()
    {
		$this->load->model('ModelUser');
		$id_user = $this->session->userdata('id');

		$get_tmp = $this->ModelUser->get_booking_tmp ( $id_user );
		$kend = $this->ModelUser->detailKendaraan( $get_tmp['id_kendaraan'] );
		
		$insert = [
			'id_user' => $get_tmp['id_user'],
			'id_kendaraan' => $get_tmp['id_kendaraan'],
			'tgl_awal' => $get_tmp['tgl_awal'],
			'tgl_akhir' => $get_tmp['tgl_akhir'],
			'jam_ambil' => $get_tmp['jam_ambil'],
			'media_bayar' => $get_tmp['media_bayar'],
			'lama_hari' => $get_tmp['lama_hari'],
			'ppn' => $get_tmp['ppn'],
			'total_bayar' => $kend['harga_perhari'] * $get_tmp['lama_hari'] + $get_tmp['ppn'],
			'status_bayar' => 'MENUNGGU PEMBAYARAN'
		];
		
		$this->ModelUser->finish_booking( $insert );
		$this->ModelUser->cancel_book( $get_tmp['id'] );
		

		if ( $insert['media_bayar'] == 'Your Epay' ) {
			$data['booking_dtl'] = $this->ModelUser->get_booking ( $this->session->userdata('id') );
			$data['epay'] = $this->ModelUser->get_epay($this->session->userdata('id'));
			if ( $data['epay']['saldo'] > $data['booking_dtl']['total_bayar'] ) {
				$newsaldo = $data['epay']['saldo'] - $data['booking_dtl']['total_bayar'];
				$new_stat = 'SUDAH DIBAYAR';

				$this->ModelUser->up_st_bayar( $this->session->userdata('id'), $new_stat );
				echo"
				<script>
					alert('Pembayaran Berhasil.');
					window.location = 'http://localhost/project-web/';
				</script>";
			}
			else {
				echo"
				<script>
					alert('Saldo Anda Tidak Cukup.y');
					window.location = 'http://localhost/project-web/home/';
				</script>";
			}
		}
		else {
			echo"
				<script>
					alert('Kendaraan Telah di Pesankan. Segera Lakukan Pembayaran.');
					window.location = 'http://localhost/project-web/';
				</script>";
		}
	}
	public function cek_pesanan ()
	{
		if ( $this->session->userdata('id') == '' ) {
			echo"
				<script>
					alert('Anda Belum Login. Silahkan Login Terlebih Dahulu.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
		}
		elseif ( $this->session->userdata('id') != '' ) {
			$this->load->model('ModelUser');
			$id_user = $this->session->userdata('id');
			$cek1 = $this->ModelUser->get_booking_tmp( $id_user );
			$cek2 = $this->ModelUser->get_booking( $id_user );
			$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
			$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
			if ( $cek1 == '' AND $cek2 == '' ) {
				echo"
				<script>
					alert('Anda Tidak Memiliki Pesanan.');
					window.location = 'http://localhost/project-web/';
				</script>";
			}
			else {
				if ( $cek1 == '' ) {
					$data['check'] = $this->ModelUser->get_booking( $id_user );
					$data['detail'] = $this->ModelUser->detailKendaraan( $data['check']['id_kendaraan'] );
					$data['kategori'] = $this->ModelUser->getKategori();
					$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
					$this->load->view('templates/header_beranda', $data);
        			$this->load->view('cek_booking', $data);
					$this->load->view('templates/footer_beranda', $data);
				}
				else {
					$data['check'] = $this->ModelUser->get_booking_tmp( $id_user );
					$data['detail'] = $this->ModelUser->detailKendaraan( $data['check']['id_kendaraan'] );
					$data['kategori'] = $this->ModelUser->getKategori();
					$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
					$this->load->view('templates/header_beranda', $data);
        			$this->load->view('cek_pesanan', $data);
					$this->load->view('templates/footer_beranda', $data);
				}
			}
		}
	}

	public function profile()
	{
		if ( $this->session->userdata('id') == '' ) {
			echo"
				<script>
					alert('Anda Belum Login. Silahkan Login Terlebih Dahulu.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
		}
		else {
		$data['kategori'] = $this->ModelUser->getKategori();
		$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
		$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
		$data['cekbok'] = $this->ModelUser->get_booking( $this->session->userdata('id') );
		$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
		$data['detail'] = $this->ModelUser->detailKendaraan( 1 );
		
        $this->load->view('templates/header_beranda', $data);
        $this->load->view('profile', $data);
		$this->load->view('templates/footer_beranda', $data);
		}
	}

	public function changeprofile()
	{
		$this->load->model('ModelUser');
		$id = $this->session->userdata('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$image = $_FILES['image']['name'];

		if ( $image == '' ) {
			$value = [
					'nama' => $nama,
					'alamat' => $alamat,
					'email' => $email,
					'no_telp' => $telp
					];
		$this->ModelUser->updateprofile($value, $id);
		redirect('home/profile');
		}
		else {
			$config['allowed_types']    =  'gif|jpg|JPEG|png';
			$config['max_size']         =  '2048';
			$config['upload_path']      =  './assets/img/user/';
			$this->load->library('upload', $config);
			$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
			$old_image = $data['user']['foto'];
			unlink(FCPATH . 'assets/img/user/' . $old_image);
			$this->upload->do_upload('image');
			$value = [
					'nama' => $nama,
					'alamat' => $alamat,
					'email' => $email,
					'no_telp' => $telp,
					'foto' => $image
					];
			$this->ModelUser->updateprofile($value, $id);
			
		}

		
	}

	public function contact()
		{
			$data['kategori'] = $this->ModelUser->getKategori();
		$data['booking_tmp'] = $this->ModelUser->count_booking_tmp ($this->session->userdata('id'));
		$data['booking'] = $this->ModelUser->count_booking ($this->session->userdata('id'));
		$data['cekbok'] = $this->ModelUser->get_booking( $this->session->userdata('id') );
		$data['user'] = $this->ModelUser->getUser(['id' => $this->session->userdata('id')]);
		$data['detail'] = $this->ModelUser->detailKendaraan( 1 );
		
        $this->load->view('templates/header_beranda', $data);
        $this->load->view('contact', $data);
		$this->load->view('templates/footer_beranda', $data);
		}

		public function save_message()
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$judul = $this->input->post('judul');
			$pesan = $this->input->post('pesan');

			$value = ['nama' => $nama, 'email' => $email, 'judul' => $judul, 'pesan' => $pesan];

			$this->load->model('ModelUser');
			$this->ModelUser->inser_contact($value);

			echo"
				<script>
					alert('Terimakasih Atas Pesan Yang Anda Berikan.');
					window.location = 'http://localhost/project-web/';
				</script>";
		}

}
