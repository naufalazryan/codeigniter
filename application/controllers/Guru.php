<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/userguide3/general/urls.html
	*/
	public function __construct()
	{
		parent::__construct();
		$this->load->model("guru_model");
		$this->load->library("form_validation");
	}

	public function index()
	{
		$data['judul'] = 'Halaman Guru';
		$data['guru'] = $this->guru_model->getAll();

		$this->load->view('templates/header.php',$data);
		$this->load->view('tampil_guru', $data);
		$this->load->view('templates/footer.php',$data);

	}

	public function save()
	{

		$data['judul'] = 'Tambah Guru';

		$this->load->view('templates/header.php',$data);
		$this->load->view('tambah_guru',$data);
		$this->load->view('templates/footer.php',$data);

		$guru = $this->guru_model; // objek model
		$validasi = $this->form_validation; // objek form validation
		$validasi->set_rules($guru->rules()); // menerapkan rules ke form

		if ($validasi->run()) { //eksekusi validasi
			$insert = $guru->simpan(); // simpan data ke db
			if ($insert) {
				echo '<script> alert("Sukses! Data Berhasil Di Simpan");window.location.href="' . site_url('guru') . '";</script>';
			} else {
				echo "<script> alert('Maaf! Data Yang Anda Masukkan Salah, Ulangi Kembali') </script>";
				die(redirect('Registration', 'refresh'));
			} // untuk menampilkan pesan berhasil disimpan
		}
	}

	public function edit($nip=null)
	{
		
		if (!isset($nip)) redirect('tampil_guru');
		
		$guru = $this->guru_model;//objek model
		$validasi = $this->form_validation;//objek form validation
		$validasi->set_rules($guru->rules());//menerapkan rules ke form 

		if ($validasi->run()) {//menjalankan validasi
			$update = $guru->ubah();//ubah data ke db
			 if ($update) {
                echo'<script>alert("Sukses Data Berhasil Diubah.");window.location.href="'.site_url('guru').'";</script>';
            } else{
                echo "<script> alert('Maaf Data yang anda ubah salah, tolong diulangi.') </script>";
                die(redirect('guru/save'));
            }
		}
		$data['guru'] = $this->guru_model->getByNip($nip);//pemangilan function data berdasarkan nip
		if(!$data['guru'])show_404();
		$this->load->view("ubah_guru" ,$data);//menampilkan halaman ubah guru beserta data berdasarkan nip diatas
		
	}
	public function delete($nip=null)
	{
		if (!isset($nip)) show_404(); // menampilkan halaman error 404 jika nis tidak ditemukan

		if ($this->guru_model->hapus($nip)) {

				echo '<script> alert("Sukses! Data Berhasil Di Hapus");window.location.href="' . site_url('guru') . '";</script>';
			} else {
				echo "<script> alert('Maaf! Data Yang Anda Masukkan Salah, Ulangi Kembali') </script>";
				die(redirect('guru/save'));
		}
	}
}