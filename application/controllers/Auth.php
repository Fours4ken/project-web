<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function cek_auth()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$cocok = [
					'email' => $email,
					'password' => $pass
		];
		$this->load->model('ModelUser');
		$user = $this->ModelUser->getUser( $cocok );

		if ( $user ) {
			if ( $user['is_active'] == 1 ) {
				$session = ['id' => $user['id'], 'nama' => $user['nama'], 'email' => $user['email'], 'telp' => $user['no_telp']];
				$this->session->set_userdata($session);
				redirect();
			}
			else {
				echo"
				<script>
					alert('User Tidak Aktif. Hubungi CS.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
			}
		}
		else {
			echo"
				<script>
					alert('User Tidak Terdaftar');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
		}
	}
	/** */
	public function logout()
	{
		session_destroy();
		redirect();
    }
    /** */
    public function daftar()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $cocok = ['email' => $email];
        $tambah = ['nama' => $nama, 'email' => $email, 'password' => $pass, 'is_active' => 1, 'foto' => 'default.jpg'];

        $this->load->model('ModelUser');
        $user = $this->ModelUser->getUser( $cocok );
        
        if ( $user ) {
            echo"
				<script>
					alert('Email Sudah Terdaftar.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
        }
        else {
            $this->ModelUser->addUser( $tambah );
            echo"
				<script>
					alert('Berhasil Daftar. Silahkan Login.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
        }
    }

	public function lupa_pass()
	{
		session_destroy();
		$this->load->view('templates/header_beranda');
        $this->load->view('frm_lupa_pass');
		$this->load->view('templates/footer_beranda');
	}

	public function new_pass()
	{
		$data['email'] = $this->input->get('email');
        $data['token'] = $this->input->get('token');
		$this->load->view('templates/header_beranda', $data);
        $this->load->view('frm_new_pass', $data);
		$this->load->view('templates/footer_beranda', $data);
	}

	public function changePassword(){
        //Proses Ubah Password dan Verifikasi
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $pass1 = $this->input->post('password1');
        $pass2 = $this->input->post('password2');
        if ( $pass1 == $pass2 ) {
            $email = $this->input->get('email');
            $token = $this->input->get('token');
            $newpas = $this->input->post('password1');
			$this->load->model('ModelUser');
			$query = $this->ModelUser->updatePassword( $newpas,$email );
			
            if ($query > 0 ) {
				$this->ModelUser->deleteToken($token);
                echo"
				<script>
					alert('Password Terlah di Perbarui.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
                            }
            else {
                echo"
				<script>
					alert('Password Gagal Di Perbarui.');
				window.history.back();</script>";
            }

            
        }
        else {
            echo"<script>alert('Password Tidak Sama.');
            window.history.back();</script>";
        }

    }

	public function resetPassword()
    {
        // Setelah User Memasukan Email akan di Cek disini
        $email = $this->input->post('email');
        $this->load->model('ModelUser');
        $cek = $this->ModelUser->getUser(['email' => $email]);
        if ( $cek ) {
            $token = bin2hex(openssl_random_pseudo_bytes(32));
                $user_token = [
                        'email' => $email,
                        'token' => $token,
                ];
            $this->load->model('ModelUser');
            $buatToken = $this->ModelUser->createToken( $user_token );

            $this->_kirimEmail( $token );

        }
        else {
            echo"
				<script>
					alert('Email Tidak Terdaftar.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
        }
        
    }

	private function _kirimEmail( $token )
    {
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'wpubsi.noreply@gmail.com';
        $config['smtp_pass'] = 'asu123asu';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");

        $this->load->library('email', $config);

        $this->email->from('wpubsi.noreply@gmail.com', 'Admin yourental.com');
        $this->email->to( $this->input->post('email') );
        $this->email->subject('Reset Password');
        $this->email->message('Click Link To Reset Your Password : <a href="'.base_url() . 'auth/new_pass?email=' . $this->input->post('email') . '&token=' . urlencode( $token ) .'">Reset Password</a>');

        if($this->email->send() == TRUE) {
            echo"
				<script>
					alert('Link Reset Password Sudah Terkirim. Cek Email Anda.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
        }
        else {
           echo"
				<script>
					alert('Terjadi Kendala. Coba Lagi Nanti.');
					window.location = 'http://localhost/project-web/home/autentifikasi';
				</script>";
        }
	}
	

}