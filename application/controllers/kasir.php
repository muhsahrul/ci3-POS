<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kasir extends CI_Controller {
	public function __construct() {
		parent:: __construct();

		if ($this->session->userdata('status') != "login" && $this->session->userdata('level') != 'kasir') {
			redirect('login');
		}
	}
	
	public function index()	{
		$data['user'] = $this->data_model->get_user()->result();

		$this->load->view('template/header');
		$this->load->view('page/kasir/kasir_view', $data);
		$this->load->view('template/footer');
	}

	public function menu() {
		$data['menu'] = $this->data_model->get_menu()->result();
		$data['title'] = "Data Menu";

		$this->load->view('template/header');
		$this->load->view('page/kasir/menu_view', $data);
		$this->load->view('template/footer');
	}

	public function input_menu() {
		$data['id_menu'] = $this->data_model->id_menu()->row();
		$data['title'] = "Input Menu";

		$this->load->view('template/header');
		$this->load->view('page/kasir/input_menu_view', $data);
		$this->load->view('template/footer');
	}

	public function insert_menu() {
		$this->input_model->insert_menu();
	}

	public function edit_menu($id_menu) {
		$data['edit_menu'] = $this->data_model->edit_menu($id_menu)->result();
		$data['id_menu'] = $id_menu;
		$data['title'] = "Edit Menu (".$id_menu.")";

		$this->load->view('template/header');
		$this->load->view('page/kasir/edit_menu_view', $data);
		$this->load->view('template/footer');
	}

	public function update_menu() {
		$this->input_model->update_menu();
	}

	public function delete_menu($id_menu) {
		$this->input_model->delete_menu($id_menu);
	}

	public function pelanggan() {
		$data['pelanggan'] = $this->data_model->get_pelanggan()->result();
		$data['title'] = "Data Pelanggan";

		$this->load->view('template/header');
		$this->load->view('page/kasir/pelanggan_view', $data);
		$this->load->view('template/footer');
	}

	public function input_pelanggan() {
		$data['id_pelanggan'] = $this->data_model->id_pelanggan()->row();
		$data['title'] = "Input Pelanggan";

		$this->load->view('template/header');
		$this->load->view('page/kasir/input_pelanggan_view', $data);
		$this->load->view('template/footer');		
	}

	public function insert_pelanggan() {
		$this->input_model->insert_pelanggan();
	}

	public function edit_pelanggan($id_pelanggan) {
		$data['edit_pelanggan'] = $this->data_model->edit_pelanggan($id_pelanggan)->result();
		$data['id_pelanggan'] = $id_pelanggan;
		$data['title'] = "Edit Pelanggan (".$id_pelanggan.")";

		$this->load->view('template/header');
		$this->load->view('page/kasir/edit_pelanggan_view', $data);
		$this->load->view('template/footer');		
	}

	public function update_pelanggan() {
		$this->input_model->update_pelanggan();
	}

	public function penjualan() {
		$data['penjualan'] = $this->data_model->get_penjualan()->result();
		$data['title'] = 'Data Penjualan';

		$this->load->view('template/header');
		$this->load->view('page/kasir/penjualan_view', $data);
		$this->load->view('template/footer');
	}

	public function input_penjualan() {
		$data['title'] = "Input Penjualan";
		$data['pelanggan'] = $this->data_model->get_pelanggan()->result();
		$data['id_penjualan'] = $this->data_model->id_penjualan()->row();
		$data['id_pelanggan'] = $this->data_model->id_pelanggan()->row();

		$this->load->view('template/header');
		$this->load->view('page/kasir/input_penjualan_view', $data);
		$this->load->view('template/footer');
	}

	public function insert_penjualan() {
		$this->input_model->insert_penjualan();
	}

	public function input_detail_penjualan($no_nota_penjualan) {
		$data['no_nota_penjualan'] = $no_nota_penjualan;
		$data['title'] = "Input Detail Penjualan (".$no_nota_penjualan.")";
		//$data['coba'] = $this->input_model->coba();

		$this->load->view('template/header');
		$this->load->view('page/kasir/input_detail_penjualan_view', $data);
		$this->load->view('template/footer');
	}

	public function get_menu(){		
	  	$result = $this->data_model->search_menu();
	  //  	if (count($result) > 0) {
	  //   foreach ($result as $row)
	  //    	$arr_result[] = array(
			// 	'nama_bahan'			=> $row->nama_bahan,
			// 	'id_bahan'	=> $row->id_bahan,
			// 	'harga'			=> $row->harga,
			// 	'stok_cangkir'		=> $row->stok_cangkir
			// );
	     	echo json_encode($result);
	     	// return $arr_result;
	   	// }		
	}

	public function cobacoba() {
		$this->input_model->coba();
	}

	public function insert_detail_penjualan() {
		$this->input_model->insert_detail_penjualan();
	}

	public function detail_penjualan($no_nota_penjualan = null) {
		$data['detail_penjualan'] = $this->data_model->get_detail_penjualan($no_nota_penjualan)->result();
		$data['title'] = 'Data Detail Penjualan';
		$data['no_nota_penjualan'] = $no_nota_penjualan;

		$this->load->view('template/header');
		$this->load->view('page/kasir/detail_penjualan_view', $data);
		$this->load->view('template/footer');		
	}

	public function nota_penjualan() {
		$no_nota_penjualan = $this->uri->segment(3);
		$data['bayar'] = $this->uri->segment(4);
		$data['kembalian'] = $this->uri->segment(5);
		$data['detail_penjualan'] = $this->data_model->get_detail_penjualan($no_nota_penjualan)->result();
		$data['no_nota_penjualan'] = $no_nota_penjualan;
		$data['penjualan'] = $this->data_model->get_penjualan_where($no_nota_penjualan)->row();

		$this->load->library('pdf');

	    $this->pdf->setPaper('A6', 'potrait');
	    $this->pdf->filename = "Nota Penjualan ".$no_nota_penjualan.".pdf";
	    $this->pdf->load_view('page/kasir/nota_penjualan', $data);
	}
}
