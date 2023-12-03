<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){ 
		parent::__construct(); 
		if($this->session->userdata('status') != "login_admin"){
			redirect('Login/log_cek');
		}
	}

	public function index(){
		$nama = $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$data['total_akun'] = $this->M_pesan->total_akun();
		$data['total_order'] = $this->M_pesan->total_order();
		$data['total_pembelian'] = $this->M_pesan->total_pembelian();
		$data['total_pembelian_akun'] = $this->M_pesan->total_pembelian_akun();
		$data['total_pembelian_tanggal'] = $this->M_pesan->total_pembelian_tanggal();
		// var_dump($data['total_pembelian_akun'] = $this->M_pesan->total_pembelian_akun());
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/templates/footerD', $data);

	}

	public function Akun_User(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['user'] = $this->M_pesan->tampil_data_user();
		$this->load->view('admin/user',$data);
	}

	public function Akun_Admin(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['admin'] = $this->M_absen->tampil_data_admin();
		$this->load->view('admin/admin',$data);
	}

	public function Laporan_Pesanan(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['laporan'] = $this->M_pesan->tampil_laporan();
		$this->load->view('admin/laporan',$data);
	}

	public function Cetak_Laporan(){
		$dateA		= $this->input->post('tglA');
		$dateB		= $this->input->post('tglB');
		//untuk menampilkan data yang ada pada database
		$data['pesan'] = $this->M_pesan->cetak_laporan_admin($dateA, $dateB);
		$data['total_pembelian'] = $this->M_pesan->total_pembelian();
		$this->load->view('admin/cetak_laporan',$data);
	}

	public function Tambah_User(){
		$nama		= $this->input->post('nama'); 
		$passwordd	= $this->input->post('password');
		$password 	= md5($passwordd);
		$alamat 		= $this->input->post('alamat');
		$nomor_telepon 		= $this->input->post('nomor_telepon');
		$npwp 		= $this->input->post('npwp');
		$ktp 		= $this->input->post('ktp');

		$where = array('nama'=>$nama);
		$cek = $this->M_pesan->cari_akun($where);
		if($cek>0){
			redirect('Admin/Akun_User');
		}else{
		//data yang dikirim harus bertipe array
		$data = array(
		'nama'=>$nama,
		'password'=>$password,
		'alamat'=>$alamat,
		'nomor_telepon'=>$nomor_telepon,
		'npwp'=>$npwp,
		'ktp'=>$ktp
		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_pesan->input_data('pengguna', $data);
		redirect('Admin/Akun_User');
	}
	}

	public function tambah_admin(){
		$nama		= $this->input->post('nama');
		$password	= $this->input->post('password');
		
		$data = array(
		'nama'=>$nama,
		'password'=>$password
		);
		$this->M_absen->input_data('admin', $data);
		redirect('Admin/Akun_Admin');
	}

	//fungsi untuk memperbaharui/mengupdate data dari database
	public function Update_User(){
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$passwordd 	= $this->input->post('password');
		$password = md5($passwordd);
		$alamat 		= $this->input->post('alamat');
		$nomor_telepon 		= $this->input->post('nomor_telepon');
		$npwp 		= $this->input->post('npwp');
		$ktp 		= $this->input->post('ktp');

		$where = array('nama'=>$nama);
		$cek = $this->M_pesan->cari_akun($where);
		if($cek>0){
			redirect('Admin/Akun_User');
		}else{
			
		$data = array(
		'nama'=>$nama,
		'password'=>$password,
		'alamat'=>$alamat,
		'nomor_telepon'=>$nomor_telepon,
		'npwp'=>$npwp,
		'ktp'=>$ktp
		);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_pesan->update_data($id,$data,'pengguna');
		redirect('Admin/Akun_User');
		}
		
	}

	public function Update_Admin(){
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$passwordd 	= $this->input->post('password');
		$password = md5($passwordd);
		$data = array(
		'nama'=>$nama,
		'password'=>$password
		);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_absen->update_data($id,$data,'admin');
		redirect('Admin/Akun_Admin');
	}


	//fungsi untuk menghapus data
	public function Hapus_User($id){

		//method yang nanti akan digunakan di model
		//untuk menghapus data dari database
		$this->M_pesan->hapus_data($id, 'pengguna');
		redirect('Admin/Akun_User');
	}

	public function Hapus_Admin($id){

		$this->M_absen->hapus_data($id, 'admin');
		redirect('Admin/Akun_Admin');
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

}