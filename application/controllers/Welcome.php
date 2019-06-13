<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// $data = $this->db->query('select * from mahasiswa');
		// foreach($data->result_array() as $d){
		// 	echo "Nim : ".$d['nim']."<br/>";
		// 	echo "Nama : ".$d['nama']."<br/>";
		// 	echo "Alamat : ".$d['alamat']."<br/><hr/>";
		// }

		$data = $this->mymodel->GetMahasiswa();
		foreach($data as $d){
			echo "Nim : ".$d['nim']."<br/>";
			echo "Nama : ".$d['nama']."<br/>";
			echo "Alamat : ".$d['alamat']."<br/><hr/>";
		}
		$this->load->view('table',array('data'=>$data));
	}
	public function cetak($nama,$kelas)
	{
		//$this->load->view('welcome_message');
		echo "Saya function cetak ".$nama." kelas ".$kelas;
	}
	public function insert(){
		$res = $this->mymodel->InsertData('mahasiswa',array(
			"nim"=> "1324516790",
			"nama"=> "sassas",
			"alamat"=> "tester"
		));
		if($res >= 1){
			echo "Insert Data Sukses";
		}else{
			echo "Inser Data Gagal";
		}
	}
	public function update(){
		$res = $this->mymodel->UpdateData('mahasiswa',array(
			"alamat"=> "saia"
		),array('nim' => '1324516790'));
		if($res >= 1){
			echo "Update Data Sukses";
		}else{
			echo "Update Data Gagal";
		}
	}
	public function delete(){
		$res = $this->mymodel->DeleteData('mahasiswa',
		array('nim' => '1324516790'));
		if($res >= 1){
			echo "delete Data Sukses";
		}else{
			echo "Delete Data Gagal";
		}
	}
	public function panggil(){
		$data = $this->db->query("select * from mahasiswa");
		// echo"<pre>";
		// print_r($data);
		// echo "</pre>";
		echo "jumlah data = ".$data->num_rows();
		echo "<br/> <hr/>";
		foreach ($data->result() as $row){
			echo "NIM : ".$row->nim."<br/>";
			echo "Nama : ".$row->nim."<br/>";
			echo "Alamat : ".$row->nim."<br/>";
			echo "<hr/>";
		}
		$row = $data->row();
		echo "No Induk ".$row->nim."<br/>";
		echo "Nama ".$row->nama."<br/>";
		echo "Alamat ".$row->alamat."<br/>";
		// foreach ($data->result_array() as $row){
		// 	echo "NIM : ".$row['nim']."<br/>";
		// 	echo "Nama : ".$row['nim']."<br/>";
		// 	echo "Alamat : ".$row['nim']."<br/>";
		// 	echo "<hr/>";
		// }
	}
}
