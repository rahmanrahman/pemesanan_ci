<?php 
/**
 * 
 */
class M_pesan extends CI_Model{
	//method yang dibuat di controller (Admin.php)
	public function tampil_laporan(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('pesanan')->result();
	}

	public function tampil_data_user(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('pengguna')->result();
	}

	public function total_akun(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('pengguna')->num_rows();
	}

	public function total_order(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('pesanan')->num_rows();
	}

	public function total_pembelian(){
		$this->db->select('harga, SUM(harga) as total');
	return $this->db->get('pesanan')->result();
	}

	public function total_pembelian_akun(){
		$this->db->select('an');
		$this->db->select('harga, SUM(harga) as total');
		$this->db->group_by('an');
		$this->db->order_by('total', 'desc');
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('pesanan')->result();
	}

	public function total_pembelian_tanggal(){
		$this->db->select('tanggal');
		$this->db->select('harga, SUM(harga) as total');
		$this->db->group_by('tanggal');
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('pesanan')->result();
	}


	public function tampil_data_admin(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('admin')->result();
	}
	
	//method yang dibuat di controller (Admin.php)
	public function input_data($tabel,$data){
		//memasukan data inputan ke tabel tb_mahasiswa
		$this->db->insert($tabel, $data);
	}

	public function get_foto($id){
		$this->db->select('foto');
		$this->db->from('pengguna');
		$this->db->where('id',$id);
	return $this->db->get()->row(); 
	}

	//method yang dibuat di controller (Admin.php) untuk menghapus data
	public function hapus_data($id, $tabel){
		$this->db->where('id',$id);
		//menghapus data dari tabel tb_mahasiswa
		$this->db->delete($tabel);
	}

	//method yang dibuat di controller (Admin.php) untuk merubah data 
	public function get_data($id, $table){
		//merubah data dari tabel tb_mahasiswa
		//$this->db->from();
		$this->db->where('id',$id);
	return $this->db->get($table)->row();
	}
	
	//method yang dibuat di controller (Admin.php) untuk mengupdate data 
	public function update_data($id,$data,$table){
		$this->db->where('id',$id);
		//mengupdate data dari tabel tb_mahasiswa
		$this->db->update($table,$data);
	}
	//method yang dibuat di controller (Admin.php dan C_Mahasiswa) untuk menampilkan detail data 
	public function detail_data($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->row(); 
	}

	public function cari_akun($where){
		$this->db->where($where);
	return $this->db->get('pengguna')->num_rows(); 
	}

	public function total_pesan($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->num_rows(); 
	}

	public function total_harga($where, $tabel){
		$this->db->select('harga, SUM(harga) as total');
		$this->db->where($where);
	return $this->db->get($tabel)->result();
	}

	public function laporan($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->result(); 
	}


    	 public function cetak_laporan_admin($dateA, $dateB)
    {
    	// $this->db->select('*, SUM(harga) as total');
        $this->db->from('pesanan');
        $this->db->where('tanggal >=',$dateA);
       $this->db->where('tanggal <=', $dateB);
        $query = $this->db->get();
        return $query->result();
    }

        	 




}

//end of file M_mahasiswa.php
//location application\model