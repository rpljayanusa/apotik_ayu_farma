<?php
class Suplier_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Suplier_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Suplier_model->tampil_suplier();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_suplier',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}



	function v_suplier_user()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Suplier_model->tampil_suplier();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_suplier_user',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}


	
function tambah_suplier()
	{	

	
		$kode_suplier=$this->input->post('kode_suplier');
		$nama_suplier=$this->input->post('nama_suplier');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$email=$this->input->post('email');
		$this->Suplier_model->simpan_suplier($kode_suplier,$nama_suplier,$alamat,$notelp,$email);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Suplier_controller/');</script>";
	}


function hapus_suplier()
	{
		$kode_suplier=$this->input->post('kode_suplier');
		$this->Suplier_model->hapus_suplier($kode_suplier);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Suplier_controller/');</script>";
	}
function update_suplier()
	{	
		$kode_suplier=$this->input->post('kode_suplier');
		$nama_suplier=$this->input->post('nama_suplier');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$email=$this->input->post('email');
		
	
		$this->Suplier_model->update_suplier($kode_suplier,$nama_suplier,$alamat,$notelp,$email);
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Suplier_controller/');</script>";
	}
}
?>