<?php
class Obat_controler extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Obat_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Obat_model->tampil_obat();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_obat',$d,true);
		$this->load->view('home',$x);
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}


function tambah_obat()
	{	

	
		if($this->session->userdata('masuk')==true){
		$kode_jenis=$this->input->post('kode_jenis');
		$nama_jenis=$this->input->post('nama_jenis');	
	


		$this->Obat_model->simpan_obat($kode_jenis,$nama_jenis);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Obat_controler');</script>";
		// redirect('Obat_controler/');	
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function hapus_obat()
	{	if($this->session->userdata('masuk')==true){
		$kode_jenis=$this->input->post('kode_jenis');
		$this->Obat_model->hapus_obat($kode_jenis);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Obat_controler');</script>";

		redirect('Obat_controler/');
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function update_obat()
	{	
		if($this->session->userdata('masuk')==true){
		$kode_jenis=$this->input->post('kode_jenis');
		$nama_jenis=$this->input->post('nama_jenis');
	

		$this->Obat_model->update_obat($kode_jenis,$nama_jenis);
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Obat_controler');</script>";

		// redirect('Obat_controler/');
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
}
?>