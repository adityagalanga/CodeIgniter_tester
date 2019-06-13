<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
		$data = $this->mymodel->GetMahasiswa();
		$this->load->view('table',array('data'=>$data));
	}
	public function add_data(){
		echo "Tambah Data";
		$this->load->view('tambah_data');
	}
	public function do_insert(){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$data_insert = array(
			'nim' => $nim,
			'nama' => $nama,
			'alamat' => $alamat
		);
		$res = $this->db->insert('mahasiswa',$data_insert);
		if($res>=1){
			echo "Data berhasil ditambahkan<br />";
			echo "<a href= ".base_url()."index.php/crud/>Kembali</a>";
		}else{
			echo "Data Gagal ditambahkan <br />";
			echo "<a href= ".base_url()."index.php/crud/>Kembali</a>";
		}
	}
	public function do_delete($nim){
		$where = array('nim' => $nim);
		$res = $this->mymodel->DeleteData('mahasiswa',$where);
		if($res>=1){
			echo "Data berhasil Didelete<br/>";
			echo "<a href= ".base_url()."index.php/crud/>Kembali</a>";
			redirect('crud/index');
		}else{
			echo "Data Gagal didelete <br/>";
			echo "<a href= ".base_url()."index.php/crud/>Kembali</a>";
		}
	}
	public function edit_data($nim){
		$mhs=$this->mymodel->GetMahasiswa("where nim = '$nim'");
		$data = array(
			"nim"=> $mhs[0]['nim'],
			"nama"=> $mhs[0]['nama'],
			"alamat"=> $mhs[0]['alamat'],
		);
		$this->load->view('edit_data',$data);
	}
}
