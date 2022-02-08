<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index() {
		$this->load->view('login_view');
	}

	public function proses_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
		);

		$koneksi = $this->login_model->cek_login("tb_user", $where);
		
		$cek = $koneksi->num_rows();
		$query = $koneksi->result();

		foreach($query as $row) {
			$level = $row->level;
			$id_user = $row->id_user;
			$nama = $row->nama;
		}

		if ($cek > 0) {
			$data_session = array(
				'username' => $username,
				'status' => "login",
				'level' => $level,
				'id_user' => $id_user,
				'nama' => $nama
			);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('login_success', 'Anda Berhasil Login ('.$username.')');

			if ($level == "kasir") {
				redirect('kasir');	
			} else {
				redirect('admin');
			}
		} else {
			$this->session->set_flashdata('login_error', 'Username/Password Tidak Valid');
			redirect('login');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}

	public function timestamp() {
		$this->load->view('template/timestamp');
	}
}
