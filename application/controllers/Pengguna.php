<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Pengguna extends CI_Controller{
	
	function __construct(){ 
		parent::__construct(); 
		if($this->session->userdata('status') != "login_user"){
			redirect('Login/pengguna');
		}
	}
	public function index(){
	 	$nama =  $this->session->userdata('nama');
		$where = array('an' => $nama);
		$total_pesan = $this->M_pesan->total_pesan($where,'pesanan');
		$total_harga = $this->M_pesan->total_harga($where,'pesanan'); 
		$data['total_pesan'] = $total_pesan;
		$data['total_harga'] = $total_harga;
		$this->load->view('pengguna/dashboard', $data);
		}

	public function Pemesanan(){
		$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$detail = $this->M_pesan->detail_data($where,'pengguna'); 
		$data['detail'] = $detail; 
		// var_dump($data['detail']);
		$this->load->view('pengguna/pesan', $data);
	}

	public function Input_Pemesanan(){
		$an = $this->input->post('an');
		$nama_proyek = $this->input->post('nama_proyek');
		$jenis = $this->input->post('jenis');
		$metode = $this->input->post('metode');
		$alamat = $this->input->post('alamat');
		$tanggal = $this->input->post('tanggal');
		$kontak = $this->input->post('kontak');
		$pembayaran = $this->input->post('pembayaran');
		$kualitas = $this->input->post('kualitas');
		$volume = $this->input->post('volume');
		$harga = $this->input->post('harga');
		// $tgl = date('Y-m-d');
		// $cek = $this->M_absen->cond($nip, $tgl, 'absen_masuk');

		$data = array(
		'an'=>$an,
		'nama_proyek'=>$nama_proyek,
		'jenis'=>$jenis,
		'metode'=>$metode,
		'alamat'=>$alamat,
		'tanggal'=>$tanggal,
		'kontak'=>$kontak,
		'pembayaran'=>$pembayaran,
		'kualitas'=>$kualitas,
		'volume'=>$volume,
		'harga'=>$harga

		);
		$this->M_pesan->input_data('pesanan', $data);
		$data['cond2'] = 'Pesanan Berhasil';
		redirect('Pengguna/Pemesanan', $data);
		
	}


	public function Update_Pesanan(){
		$id = $this->input->post('id');
		$an = $this->input->post('an');
		$nama_proyek = $this->input->post('nama_proyek');
		$jenis = $this->input->post('jenis');
		$metode = $this->input->post('metode');
		$alamat = $this->input->post('alamat');
		$tanggal = $this->input->post('tanggal');
		$kontak = $this->input->post('kontak');
		$pembayaran = $this->input->post('pembayaran');
		$kualitas = $this->input->post('kualitas');
		$volume = $this->input->post('volume');
		$harga = $this->input->post('harga');
			
		$data = array(
		'an'=>$an,
		'nama_proyek'=>$nama_proyek,
		'jenis'=>$jenis,
		'metode'=>$metode,
		'alamat'=>$alamat,
		'tanggal'=>$tanggal,
		'kontak'=>$kontak,
		'pembayaran'=>$pembayaran,
		'kualitas'=>$kualitas,
		'volume'=>$volume,
		'harga'=>$harga
		);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_pesan->update_data($id,$data,'pesanan');
		redirect('Pengguna/laporan');
	}


	public function Laporan(){
		$nama =  $this->session->userdata('nama');
		$where = array('an' => $nama);
		$detail = $this->M_pesan->laporan($where,'pesanan'); 
		$data['detail'] = $detail;
		$this->load->view('pengguna/laporan', $data);
	}

	public function Cetak_Laporan($id){
		$where = array('id' => $id);
		$detail = $this->M_pesan->detail_data($where,'pesanan'); 
		$data['detail'] = $detail;
		$this->load->view('pengguna/cetak_laporan', $data);
	}

	public function Profil(){
		$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$detail = $this->M_pesan->detail_data($where,'pengguna'); 
		$data['detail'] = $detail;
		$this->load->view('pengguna/profil', $data);
	}

	public function Edit_Profil(){
		$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$detail = $this->M_pesan->detail_data($where,'pengguna'); 
		$data['detail'] = $detail;
		$this->load->view('pengguna/edit_profil', $data);
	}

	public function Update_User(){
		$id 		= $this->input->post('id');
		$passwordd 	= $this->input->post('password');
		$password 	= md5($passwordd);
		$alamat 		= $this->input->post('alamat');
		$nomor_telepon 		= $this->input->post('nomor_telepon');
		$npwp 		= $this->input->post('npwp');
		$ktp 		= $this->input->post('ktp');

		$data = array(
		'password'=>$password,
		'alamat'=>$alamat,
		'nomor_telepon'=>$nomor_telepon,
		'npwp'=>$npwp,
		'ktp'=>$ktp
		);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_pesan->update_data($id,$data,'pengguna');
		redirect('Pengguna/Profil');

	}

	public function Hapus_Pemesanan($id){
		
		$this->M_pesan->hapus_data($id, 'pesanan');
		redirect('Pengguna/Laporan');
	}
	

}