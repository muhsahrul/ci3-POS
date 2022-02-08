<?php

class data_model extends CI_Model {
	public function get_menu() {
		return $this->db->get('tb_menu');
	}

	public function id_menu() {
		$this->db->select('id_menu');
		$this->db->from('tb_menu');
		$this->db->order_by('id_menu', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	public function edit_menu($id_menu) {
		return $this->db->get_where('tb_menu', array('id_menu' => $id_menu));
	}

	public function get_pelanggan() {
		return $this->db->get('tb_pelanggan');
	}

	public function id_pelanggan() {
		$this->db->select('id_pelanggan');
		$this->db->from('tb_pelanggan');
		$this->db->order_by('id_pelanggan', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	public function edit_pelanggan($id_pelanggan) {
		return $this->db->get_where('tb_pelanggan', array('id_pelanggan' => $id_pelanggan));
	}

	public function get_penjualan() {
		return $this->db->get('tb_penjualan');
	}

	public function get_bahan() {
		$this->db->select('*');
		$this->db->from('tb_bahan');
		$this->db->join('tb_supplier', 'tb_supplier.id_supplier = tb_bahan.id_supplier');
		return $this->db->get();
	}

	public function id_bahan() {
		$this->db->select('id_bahan');
		$this->db->from('tb_bahan');
		$this->db->order_by('id_bahan', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	public function edit_bahan($id_bahan) {
		return $this->db->get_where('tb_bahan', array('id_bahan' => $id_bahan));
	}

	public function get_supplier() {
		return $this->db->get('tb_supplier');
	}

	public function id_supplier() {
		$this->db->select('id_supplier');
		$this->db->from('tb_supplier');
		$this->db->order_by('id_supplier', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	public function edit_supplier($id_supplier) {
		return $this->db->get_where('tb_supplier', array('id_supplier' => $id_supplier));
	}

	public function id_penjualan() {
		$this->db->select('no_nota_penjualan');
		$this->db->from('tb_penjualan');
		$this->db->order_by('no_nota_penjualan', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	// public function search_menu($title){
	// 	$this->db->like('nama_menu', $title, 'both');
	// 	$this->db->order_by('nama_menu', 'ASC');
	// 	$this->db->limit(10);
	// 	return $this->db->get('tb_menu')->result();
	// }

	public function search_menu(){
		// $this->db->select('nama_bahan,id_bahan,harga,stok_cangkir');
		// $this->db->from('tb_bahan');
		// return $this->db->get();
		$hasil=$this->db->query("SELECT id_bahan, nama_bahan, harga, stok_cangkir FROM tb_bahan");
        return $hasil->result();

	}

	public function get_pembelian() {
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_supplier', 'tb_supplier.id_supplier = tb_pembelian.id_supplier');
		return $this->db->get();
	}

	public function get_detail_penjualan($no_nota_penjualan) {
		$this->db->select('*');
		$this->db->from('tb_detail_penjualan');
		$this->db->join('tb_menu', 'tb_menu.id_menu = tb_detail_penjualan.id_menu');
		$this->db->join('tb_penjualan', 'tb_penjualan.no_nota_penjualan = tb_detail_penjualan.no_nota_penjualan');
		$this->db->order_by('tgl_nota_penjualan','desc');
		if ($no_nota_penjualan != null) {
			$this->db->where('tb_detail_penjualan.no_nota_penjualan', $no_nota_penjualan);
		}
		return $this->db->get();
	}

	public function id_pembelian() {
		$this->db->select('no_nota_pembelian');
		$this->db->from('tb_pembelian');
		$this->db->order_by('no_nota_pembelian', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	public function search_bahan($title){
		$this->db->like('nama_bahan', $title, 'both');
		$this->db->order_by('nama_bahan', 'ASC');
		$this->db->limit(10);
		return $this->db->get('tb_bahan')->result();
	}

	public function get_detail_pembelian($no_nota_pembelian) {
		$this->db->select('*');
		$this->db->from('tb_detail_pembelian');
		$this->db->join('tb_bahan', 'tb_bahan.id_bahan = tb_detail_pembelian.id_bahan');
		$this->db->join('tb_pembelian', 'tb_pembelian.no_nota_pembelian = tb_detail_pembelian.no_nota_pembelian');
		$this->db->join('tb_supplier', 'tb_supplier.id_supplier = tb_pembelian.id_supplier');
		if ($no_nota_pembelian != null) {
			$this->db->where('tb_detail_pembelian.no_nota_pembelian', $no_nota_pembelian);
		}
		return $this->db->get();
	}

	public function get_penggunaan() {
		$this->db->select('*');
		$this->db->from('tb_penggunaan');
		$this->db->join('tb_bahan', 'tb_bahan.id_bahan = tb_penggunaan.id_bahan');
		return $this->db->get();
	}

	public function id_penggunaan() {
		$this->db->select('id_penggunaan');
		$this->db->from('tb_penggunaan');
		$this->db->order_by('id_penggunaan', 'desc');
		$this->db->limit(1);
		return $this->db->get();
	}

	public function edit_penggunaan($id_penggunaan) {
		$this->db->select('*');
		$this->db->from('tb_penggunaan');
		$this->db->join('tb_bahan', 'tb_bahan.id_bahan = tb_penggunaan.id_bahan');
		$this->db->where('id_penggunaan', $id_penggunaan);
		return $this->db->get();
	}

	public function get_user() {
		return $this->db->get_where('tb_user', array('id_user' => $this->session->userdata('id_user')));
	}

	public function filter($table, $start_date, $end_date){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('tb_penjualan', 'tb_penjualan.no_nota_penjualan = tb_detail_penjualan.no_nota_penjualan');
        $this->db->where('tgl_nota_penjualan >=',$start_date); 
        $this->db->where('tgl_nota_penjualan <=',$end_date);
        return $this->db->get()->result();
    }

    public function get_pembelian_where($no_nota_pembelian) {
    	$this->db->select('*');
    	$this->db->from('tb_pembelian');
    	$this->db->join('tb_supplier', 'tb_supplier.id_supplier = tb_pembelian.id_supplier');
    	$this->db->where('no_nota_pembelian', $no_nota_pembelian);
    	return $this->db->get();
    }

    public function get_penjualan_where($no_nota_penjualan) {
    	$this->db->select('*');
    	$this->db->from('tb_penjualan');
    	$this->db->where('no_nota_penjualan', $no_nota_penjualan);
    	return $this->db->get();
    }
}