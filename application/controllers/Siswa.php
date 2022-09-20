<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
		$this->load->model("siswa_model");
		$this->load->library("form_validation");
	}

	public function index()
	{
		$data['judul'] = 'Siswa';
		$data['siswa'] = $this->siswa_model->getAll();

		$this->load->view('templates/header.php', $data);
		$this->load->view('tampil_siswa', $data);
		$this->load->view('templates/footer.php');
	}

	public function save()
	{

		$data['judul'] = 'Tambah Siswa';

		$this->load->view('templates/header.php', $data);
		$this->load->view('tambah_siswa', $data);
		$this->load->view('templates/footer.php');

		$siswa = $this->siswa_model; // objek model
		$validasi = $this->form_validation; // objek form validation
		$validasi->set_rules($siswa->rules()); // menerapkan rules ke form

		if ($validasi->run()) { //eksekusi validasi
			$insert = $siswa->simpan(); // simpan data ke db
			if ($insert) {
				echo '<script> alert("Sukses! Data Berhasil Di Simpan");window.location.href="' . site_url('siswa') . '";</script>';
			} else {
				echo "<script> alert('Maaf! Data Yang Anda Masukkan Salah, Ulangi Kembali') </script>";
				die(redirect('Registration', 'refresh'));
			} // untuk menampilkan pesan berhasil disimpan
		}
	}

	public function edit($nis=null)
	{
		if (!isset($nis)) redirect('tampil_siswa'); // redirect jika nis tidak ditemukan di db 

		$siswa = $this->siswa_model; // objek model
		$validasi = $this->form_validation; // objek form validation
		$validasi->set_rules($siswa->rules()); // menerapkan rules ke form

		if ($validasi->run()) { //eksekusi validasi
			$update = $siswa->ubah(); // ubah data dari db
			if ($update) {
				echo '<script> alert("Sukses! Data Berhasil Di Ubah");window.location.href="' . site_url('siswa') . '";</script>';
			} else {
				echo "<script> alert('Maaf! Data Yang Anda Masukkan Salah, Ulangi Kembali') </script>";
				die(redirect('siswa/edit'));
			}
		}

		$data['siswa'] = $this->siswa_model->getByNis($nis); // pemanggilan fucntion data berdasarkan NIS
		if (!$data['siswa']) show_404(); 
		$this->load->view('ubah_siswa', $data); // menampilkan halaman ubah siswa beserta data berdasarkan NIS di atas
	}

	public function delete($nis=null)
	{
		if (!isset($nis)) show_404(); // menampilkan halaman error 404 jika nis tidak ditemukan

		if ($this->siswa_model->hapus($nis)) {

				echo '<script> alert("Sukses! Data Berhasil Di Hapus");window.location.href="' . site_url('siswa') . '";</script>';
			} else {
				echo "<script> alert('Maaf! Data Yang Anda Masukkan Salah, Ulangi Kembali') </script>";
				die(redirect('siswa/save'));
		}
	}
}