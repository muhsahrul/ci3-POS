<?php

class admin extends CI_Controller {
	public function __construct() {
		parent:: __construct();

		if ($this->session->userdata('status') != 'login' && $this->session->userdata('level') != 'admin') {
			redirect('login');
		}
	}

	public function index() {
		$data['user'] = $this->data_model->get_user()->result();

		$this->load->view('template/header');
		$this->load->view('page/admin/admin_view', $data);
		$this->load->view('template/footer');
	}

	public function bahan() {
		$data['title'] = "Data Bahan";
		$data['bahan'] = $this->data_model->get_bahan()->result();

		$this->load->view('template/header');
		$this->load->view('page/admin/bahan_view', $data);
		$this->load->view('template/footer');
	}

	public function input_bahan() {
		$data['id_bahan'] = $this->data_model->id_bahan()->row();
		$data['supplier'] = $this->data_model->get_supplier()->result();
		$data['title'] = "Input Bahan";

		$this->load->view('template/header');
		$this->load->view('page/admin/input_bahan_view', $data);
		$this->load->view('template/footer');
	}

	public function insert_bahan() {
		$this->input_model->insert_bahan();
	}

	public function edit_bahan($id_bahan) {
		$data['edit_bahan'] = $this->data_model->edit_bahan($id_bahan)->result();
		$data['supplier'] = $this->data_model->get_supplier()->result();
		$data['id_bahan'] = $id_bahan;
		$data['title'] = "Edit Bahan (".$id_bahan.")";

		$this->load->view('template/header');
		$this->load->view('page/admin/edit_bahan_view', $data);
		$this->load->view('template/footer');
	}

	public function update_bahan() {
		$this->input_model->update_bahan();
	}

	public function delete_bahan($id_bahan) {
		$this->input_model->delete_bahan($id_bahan);
	}

	public function supplier() {
		$data['title'] = "Data Supplier";
		$data['supplier'] = $this->data_model->get_supplier()->result();

		$this->load->view('template/header');
		$this->load->view('page/admin/supplier_view', $data);
		$this->load->view('template/footer');	
	}

	public function input_supplier() {
		$data['id_supplier'] = $this->data_model->id_supplier()->row();
		$data['title'] = "Input Supplier";

		$this->load->view('template/header');
		$this->load->view('page/admin/input_supplier_view', $data);
		$this->load->view('template/footer');
	}

	public function insert_supplier() {
		$this->input_model->insert_supplier();
	}

	public function edit_supplier($id_supplier) {
		$data['edit_supplier'] = $this->data_model->edit_supplier($id_supplier)->result();
		$data['id_supplier'] = $id_supplier;
		$data['title'] = "Edit Supplier (".$id_supplier.")";

		$this->load->view('template/header');
		$this->load->view('page/admin/edit_supplier_view', $data);
		$this->load->view('template/footer');
	}

	public function update_supplier() {
		$this->input_model->update_supplier();
	}

	public function delete_supplier($id_supplier) {
		$this->input_model->delete_supplier($id_supplier);
	}

	public function pembelian() {
		$data['pembelian'] = $this->data_model->get_pembelian()->result();
		$data['title'] = 'Data Pembelian';

		$this->load->view('template/header');
		$this->load->view('page/admin/pembelian_view', $data);
		$this->load->view('template/footer');
	}

	public function input_pembelian() {
		$data['title'] = "Input Pembelian";
		$data['supplier'] = $this->data_model->get_supplier()->result();
		$data['id_pembelian'] = $this->data_model->id_pembelian()->row();

		$this->load->view('template/header');
		$this->load->view('page/admin/input_pembelian_view', $data);
		$this->load->view('template/footer');
	}

	public function insert_pembelian() {
		$this->input_model->insert_pembelian();
	}

	public function get_bahan(){
		if (isset($_GET['term'])) {
		  	$result = $this->data_model->search_bahan($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'			=> $row->nama_bahan,
					'description'	=> $row->id_bahan,
					'harga'			=> $row->harga,
					'satuan'		=> $row->satuan
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}	

	public function input_detail_pembelian($no_nota_pembelian) {
		$data['no_nota_pembelian'] = $no_nota_pembelian;
		$data['title'] = "Input Detail Pembelian (".$no_nota_pembelian.")";
		//$data['coba'] = $this->input_model->coba();

		$this->load->view('template/header');
		$this->load->view('page/admin/input_detail_pembelian_view', $data);
		$this->load->view('template/footer');
	}

	public function insert_detail_pembelian() {
		$this->input_model->insert_detail_pembelian();
	}

	public function detail_pembelian($no_nota_pembelian = null) {
		$data['detail_pembelian'] = $this->data_model->get_detail_pembelian($no_nota_pembelian)->result();
		$data['title'] = 'Data Detail Pembelian';
		$data['no_nota_pembelian'] = $no_nota_pembelian;

		$this->load->view('template/header');
		$this->load->view('page/admin/detail_pembelian_view', $data);
		$this->load->view('template/footer');		
	}

	public function penggunaan() {
		$data['penggunaan'] = $this->data_model->get_penggunaan()->result();
		$data['title'] = 'Data Penggunaan';

		$this->load->view('template/header');
		$this->load->view('page/admin/penggunaan_view', $data);
		$this->load->view('template/footer');			
	}

	public function input_penggunaan() {
		$data['title'] = "Input Penggunaan";
		$data['menu'] = $this->data_model->get_menu()->result();
		$data['id_penggunaan'] = $this->data_model->id_penggunaan()->row();

		$this->load->view('template/header');
		$this->load->view('page/admin/input_penggunaan_view', $data);
		$this->load->view('template/footer');
	}

	public function insert_penggunaan() {
		$this->input_model->insert_penggunaan();
	}

	public function edit_penggunaan($id_penggunaan) {
		$data['edit_penggunaan'] = $this->data_model->edit_penggunaan($id_penggunaan)->result();
		$data['id_penggunaan'] = $id_penggunaan;
		$data['title'] = "Edit Penggunaan (".$id_penggunaan.")";

		$this->load->view('template/header');
		$this->load->view('page/admin/edit_penggunaan_view', $data);
		$this->load->view('template/footer');
	}

	public function update_penggunaan() {
		$this->input_model->update_penggunaan();
	}

	public function user_profile() {
		$data['user'] = $this->data_model->get_user()->result();

		$this->load->view('template/header');
		$this->load->view('page/user_profile', $data);
		$this->load->view('template/footer');	
	}

	public function nota_pembelian($no_nota_pembelian) {
		$data['detail_pembelian'] = $this->data_model->get_detail_pembelian($no_nota_pembelian)->result();
		$data['no_nota_pembelian'] = $no_nota_pembelian;
		$data['pembelian'] = $this->data_model->get_pembelian_where($no_nota_pembelian)->row();

		$this->load->library('pdf');

	    $this->pdf->setPaper('A6', 'potrait');
	    $this->pdf->filename = "Nota Pembelian ".$no_nota_pembelian.".pdf";
	    $this->pdf->load_view('page/admin/nota_pembelian', $data);
	}
}