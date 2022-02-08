<?php

class input_model extends CI_Model {
	public function insert_menu() {
		$data = array(
			'id_menu' => $this->input->post('id_menu'),
			'nama_menu' => $this->input->post('nama_menu'),
			'kategori' => $this->input->post('kategori'),
			'satuan' => $this->input->post('satuan'),
			'harga' => $this->input->post('harga')
		);

		$insert = $this->db->insert('tb_menu', $data);

		if ($insert) {
			$this->session->set_flashdata('input_menu', 'Input Berhasil ('.$this->input->post('id_menu').')');
			redirect('kasir/menu');
		}
	}

	public function update_menu() {
		$data = array(
			'nama_menu' => $this->input->post('nama_menu'),
			'kategori' => $this->input->post('kategori'),
			'satuan' => $this->input->post('satuan'),
			'harga' => $this->input->post('harga')
		);

		$this->db->where('id_menu', $this->input->post('id_menu'));
		$update = $this->db->update('tb_menu', $data);

		if ($update) {
			$this->session->set_flashdata('edit_menu', 'Edit Berhasil ('.$this->input->post('id_menu').')');
			redirect('kasir/menu');
		}
	}

	public function delete_menu($id_menu) {
		$this->db->where('id_menu', $id_menu);
		$query = $this->db->delete('tb_menu');

		if ($query) {
			$this->session->set_flashdata('delete_menu', 'Delete Berhasil ('.$id_menu.')');
			redirect('kasir/menu');
		}

	}

	public function insert_pelanggan() {
		$data = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'jk' => $this->input->post('jenis_kelamin'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat')
		);

		$insert = $this->db->insert('tb_pelanggan', $data);

		if ($insert) {
			$this->session->set_flashdata('input_pelanggan', 'Input Berhasil ('.$this->input->post('id_pelanggan').')');
			redirect('kasir/pelanggan');
		}
	}

	public function update_pelanggan() {
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'jk' => $this->input->post('jenis_kelamin'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat')
		);

		$this->db->where('id_pelanggan', $this->input->post('id_pelanggan'));
		$update = $this->db->update('tb_pelanggan', $data);

		if ($update) {
			$this->session->set_flashdata('edit_pelanggan', 'Edit Berhasil ('.$this->input->post('id_pelanggan').')');
			redirect('kasir/pelanggan');
		}
	}

	public function insert_bahan() {
		$data = array(
			'id_bahan' => $this->input->post('id_bahan'),
			'nama_bahan' => $this->input->post('nama_bahan'),
			'jenis' => $this->input->post('jenis'),
			'stok' => 0,
			'satuan' => $this->input->post('satuan'),
			'harga' => $this->input->post('harga'),
			'id_supplier' => $this->input->post('id_supplier')
		);

		$insert = $this->db->insert('tb_bahan', $data);

		if ($insert) {
			$this->session->set_flashdata('input_bahan', 'Input Berhasil ('.$this->input->post('id_bahan').')');
			redirect('admin/bahan');
		}
	}

	public function update_bahan() {
		$data = array(
			'nama_bahan' => $this->input->post('nama_bahan'),
			'jenis' => $this->input->post('jenis'),
			'satuan' => $this->input->post('satuan'),
			'harga' => $this->input->post('harga'),
			'id_supplier' => $this->input->post('id_supplier')
		);

		$this->db->where('id_bahan', $this->input->post('id_bahan'));
		$update = $this->db->update('tb_bahan', $data);

		if ($update) {
			$this->session->set_flashdata('edit_bahan', 'Edit Berhasil ('.$this->input->post('id_bahan').')');
			redirect('admin/bahan');
		}
	}

	public function delete_bahan($id_bahan) {
		$this->db->where('id_bahan', $id_bahan);
		$query = $this->db->delete('tb_bahan');

		if ($query) {
			$this->session->set_flashdata('delete_bahan', 'Delete Berhasil ('.$id_bahan.')');
			redirect('admin/bahan');
		}

	}

	public function insert_supplier() {
		$data = array(
			'id_supplier' => $this->input->post('id_supplier'),
			'nama_supplier' => $this->input->post('nama_supplier'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat')
		);

		$insert = $this->db->insert('tb_supplier', $data);

		if ($insert) {
			$this->session->set_flashdata('input_supplier', 'Input Berhasil ('.$this->input->post('id_supplier').')');
			redirect('admin/supplier');
		}
	}

	public function update_supplier() {
		$data = array(
			'nama_supplier' => $this->input->post('nama_supplier'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat')
		);

		$this->db->where('id_supplier', $this->input->post('id_supplier'));
		$update = $this->db->update('tb_supplier', $data);

		if ($update) {
			$this->session->set_flashdata('edit_supplier', 'Edit Berhasil ('.$this->input->post('id_supplier').')');
			redirect('admin/supplier');
		}
	}

	public function delete_supplier($id_supplier) {
		$this->db->where('id_supplier', $id_supplier);
		$query = $this->db->delete('tb_supplier');

		if ($query) {
			$this->session->set_flashdata('delete_supplier', 'Delete Berhasil ('.$id_supplier.')');
			redirect('admin/supplier');
		}

	}

	public function insert_penjualan() {
		date_default_timezone_set("Asia/Jakarta");
		$data = array(
			'no_nota_penjualan' => $this->input->post('no_nota_penjualan'),
			'tgl_nota_penjualan' => date('Y-m-d'),
			'waktu_nota_penjualan' => date('H:i:s'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'total_menu' => 0,
			'total_harga' => 0,
			'id_user' => $this->session->userdata('id_user'),
			'status' => "nomenu"
		);

		$insert = $this->db->insert('tb_penjualan', $data);

		if ($insert) {
			$this->session->set_flashdata('input_penjualan', 'Input Berhasil ('.$this->input->post('no_nota_penjualan').')');
			redirect('kasir/penjualan');
		}		
	}

	public function insert_detail_penjualan() {
		$data3 = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'no_telepon' => $this->input->post('no_telepon')
		);

		$insert3 = $this->db->insert('tb_pelanggan', $data3);
		
		if ($insert3) {
			date_default_timezone_set("Asia/Jakarta");
			$data = array(
				'no_nota_penjualan' => $this->input->post('no_nota_penjualan'),
				'tgl_nota_penjualan' => date('Y-m-d'),
				'waktu_nota_penjualan' => date('H:i:s'),
				'id_pelanggan' => $this->input->post('id_pelanggan'),
				'total_menu' => 0,
				'total_harga' => 0,
				'id_user' => $this->session->userdata('id_user')
			);

			$insert = $this->db->insert('tb_penjualan', $data);

			if ($insert) {
				$data = array();

				for ($i = 1; $i <= $this->input->post('counter'); $i++) {
					if ($this->input->post('jumlah'.$i) != 0 && $this->input->post('nama_menu'.$i) != '') {
						$data[] = array(
							'no_nota_penjualan' => $this->input->post('no_nota_penjualan'),
							'id_bahan' => $this->input->post('nama_menu'.$i),
							'jumlah' => $this->input->post('jumlah'.$i)
						);

						$this->db->select('stok_cangkir,stok,id_bahan');
						$this->db->from('tb_bahan');
						$this->db->where('id_bahan', $this->input->post('nama_menu'.$i));
						$duta = $this->db->get()->row();

						$duta2 = array(
							// 'stok_cangkir' => $duta->stok_cangkir - $this->input->post('jumlah'.$i),
							'stok_cangkir' => $this->input->post('cangkirShow'.$i),
							'stok' => $duta->stok - ($this->input->post('jumlah'.$i) / 12),
						);

					$this->db->where('id_bahan', $this->input->post('nama_menu'.$i));
					$update = $this->db->update('tb_bahan', $duta2);




					}
				}

				$insert2 = $this->db->insert_batch('tb_detail_penjualan_new', $data);

				if ($insert2) {
					$this->db->select('sum(jumlah) as sum_jumlah, harga, sum(jumlah * harga) as sum_total');
					$this->db->from('tb_detail_penjualan');
					$this->db->join('tb_menu', 'tb_menu.id_menu = tb_detail_penjualan.id_menu');
					$this->db->where('no_nota_penjualan', $this->input->post('no_nota_penjualan'));
					$this->db->group_by('no_nota_penjualan');

				$diskon = $this->db->insert_batch('tb_detail_penjualan_new', $data);

				if ('sum_total'>=150000) {
					$this->db->select('sum(sum_total * 0.1) as diskon, sum(sum_total-diskon) as total_fix');
					$this->db->from('tb_detail_penjualan');
					$this->db->join('tb_menu', 'tb_menu.id_menu = tb_detail_penjualan.id_menu');
					$this->db->where('no_nota_penjualan', $this->input->post('no_nota_penjualan'));
					$this->db->group_by('no_nota_penjualan');
					$data = $this->db->get()->row();

					$data2 = array(
					'total_menu' => $data->sum_jumlah,
					'total_harga' => $data->total_fix,
					);
			}

					$this->db->where('no_nota_penjualan', $this->input->post('no_nota_penjualan'));
					$update = $this->db->update('tb_penjualan', $data2);

					if ($update) {

						$this->session->set_flashdata('input_detail_penjualan', 'Input Berhasil ('.$this->input->post('no_nota_penjualan').')');
						$no_nota_penjualan = $this->input->post('no_nota_penjualan');
						$bayar = $this->input->post('bayar');
						$kembalian = $this->input->post('kembalian');
						redirect('kasir/nota_penjualan/'.$no_nota_penjualan.'/'.$bayar.'/'.$kembalian);
					} else {}
				} else {}
			}
		}
	}

	public function coba() {
		$this->db->select('sum(jumlah) as sum_jumlah, harga, sum(jumlah * harga) as sum_total');
		$this->db->from('tb_detail_penjualan');
		$this->db->join('tb_menu', 'tb_menu.id_menu = tb_detail_penjualan.id_menu');
		$this->db->where('no_nota_penjualan', 'PJ2019060001');
		$this->db->group_by('no_nota_penjualan');
		$data = $this->db->get()->row();

		echo $data->sum_jumlah."<br>";
		echo $data->harga."<br>";
		echo $data->sum_total;
	}

	public function insert_pembelian() {
		date_default_timezone_set("Asia/Jakarta");
		// $counter = $this->input->post('counter');
		$data = array(
			'no_nota_pembelian' => $this->input->post('no_nota_pembelian'),
			'tgl_nota_pembelian' => date('Y-m-d'),
			'waktu_nota_pembelian' => date('H:i:s'),
			'id_supplier' => $this->input->post('id_supplier'),
			'total_bahan' => $this->input->post('totalJumlahAll'),
			'total_harga' => $this->input->post('totalHargaAll'),
			'id_user' => $this->session->userdata('id_user'),
			// 'status' => "nobahan"
		);

		$insert = $this->db->insert('tb_pembelian', $data);

		$data2 = array();

		for ($i = 1; $i <= 5; $i++) {
			if ($this->input->post('jumlah'.$i) != 0 && $this->input->post('id_bahan'.$i) != '') {
				$data2[] = array(
					'no_nota_pembelian' => $this->input->post('no_nota_pembelian'),
					'id_bahan' => $this->input->post('id_bahan'.$i),
					'jumlah' => $this->input->post('jumlah'.$i)
				);
			}
		}

		$insert2 = $this->db->insert_batch('tb_detail_pembelian', $data2);

		if ($insert2) {
			$this->db->select('sum(jumlah) as sum_jumlah, harga, sum(jumlah * harga) as sum_total');
			$this->db->from('tb_detail_pembelian');
			$this->db->join('tb_bahan', 'tb_bahan.id_bahan = tb_detail_pembelian.id_bahan');
			$this->db->where('no_nota_pembelian', $this->input->post('no_nota_pembelian'));
			$this->db->group_by('no_nota_pembelian');
			$data2 = $this->db->get()->row();

			$data2 = array(
				'total_bahan' => $data2->sum_jumlah,
				'total_harga' => $data2->sum_total,
				// 'status' => 'done'
			);

			$this->db->where('no_nota_pembelian', $this->input->post('no_nota_pembelian'));
			$update = $this->db->update('tb_pembelian', $data2);

			if ($update) {
				$this->db->select('*');
				$this->db->from('tb_detail_pembelian');
				$this->db->where('no_nota_pembelian', $this->input->post('no_nota_pembelian'));
				$query = $this->db->get()->result();

				foreach ($query as $row) {
					$convertCangkir = $row->jumlah * 12;
					$this->db->query("UPDATE tb_bahan SET stok = stok + ".$row->jumlah.", stok_cangkir = ".$convertCangkir." WHERE id_bahan = '".$row->id_bahan."'");
				}
			}

			if ($update) {
				$this->session->set_flashdata('input_detail_pembelian', 'Input Berhasil ('.$this->input->post('no_nota_pembelian').')');
				redirect('admin/pembelian');
			} else {}
		} else {}



		if ($insert) {
			$this->session->set_flashdata('input_pembelian', 'Input Berhasil ('.$this->input->post('no_nota_pembelian').')');
			redirect('admin/pembelian');
		}		
	}

	public function insert_detail_pembelian() {
		$data = array();

		for ($i = 1; $i <= 5; $i++) {
			if ($this->input->post('jumlah'.$i) != 0 && $this->input->post('id_bahan'.$i) != '') {
				$data[] = array(
					'no_nota_pembelian' => $this->input->post('no_nota_pembelian'),
					'id_bahan' => $this->input->post('id_bahan'.$i),
					'jumlah' => $this->input->post('jumlah'.$i)
				);
			}
		}

		$insert = $this->db->insert_batch('tb_detail_pembelian', $data);

		if ($insert) {
			$this->db->select('sum(jumlah) as sum_jumlah, harga, sum(jumlah * harga) as sum_total');
			$this->db->from('tb_detail_pembelian');
			$this->db->join('tb_bahan', 'tb_bahan.id_bahan = tb_detail_pembelian.id_bahan');
			$this->db->where('no_nota_pembelian', $this->input->post('no_nota_pembelian'));
			$this->db->group_by('no_nota_pembelian');
			$data = $this->db->get()->row();

			$data2 = array(
				'total_bahan' => $data->sum_jumlah,
				'total_harga' => $data->sum_total,
				'status' => 'done'
			);

			$this->db->where('no_nota_pembelian', $this->input->post('no_nota_pembelian'));
			$update = $this->db->update('tb_pembelian', $data2);

			if ($update) {
				$this->db->select('*');
				$this->db->from('tb_detail_pembelian');
				$this->db->where('no_nota_pembelian', $this->input->post('no_nota_pembelian'));
				$query = $this->db->get()->result();

				foreach ($query as $row) {
					$convertCangkir = $row->jumlah * 12;
					$this->db->query("UPDATE tb_bahan SET stok = stok + ".$row->jumlah.", stok_cangkir = stok + ".$convertCangkir." WHERE id_bahan = '".$row->id_bahan."'");
				}
			}

			if ($update) {
				$this->session->set_flashdata('input_detail_pembelian', 'Input Berhasil ('.$this->input->post('no_nota_pembelian').')');
				redirect('admin/pembelian');
			} else {}
		} else {}
	}

	public function insert_penggunaan() {
		date_default_timezone_set("Asia/Jakarta");
		$data = array(
			'id_penggunaan' => $this->input->post('id_penggunaan'),
			'tanggal_penggunaan' => date('Y-m-d'),
			'waktu_penggunaan' => date('H:i:s'),
			'id_bahan' => $this->input->post('id_bahan'),
			'jumlah' => $this->input->post('jumlah'),
			'id_user' => $this->session->userdata('id_user'),
		);

		$insert = $this->db->insert('tb_penggunaan', $data);

		if ($insert) {
			$this->db->where('id_bahan', $this->input->post('id_bahan'));
			$update = $this->db->query("UPDATE tb_bahan SET stok = stok - ".$this->input->post('jumlah')." WHERE id_bahan = '".$this->input->post('id_bahan')."' ");

			if ($insert) {
				$this->session->set_flashdata('input_penggunaan', 'Input Berhasil ('.$this->input->post('id_penggunaan').')');
				redirect('admin/penggunaan');
			}
		}		
	}

	public function update_penggunaan() {
		$data = array(
			'id_bahan' => $this->input->post('id_bahan'),
			'jumlah' => $this->input->post('jumlah')
		);

		$this->db->where('id_penggunaan', $this->input->post('id_penggunaan'));
		$update = $this->db->update('tb_penggunaan', $data);

		if ($update) {
			$this->session->set_flashdata('edit_penggunaan', 'Edit Berhasil ('.$this->input->post('id_penggunaan').')');
			redirect('admin/penggunaan');
		}
	}
}