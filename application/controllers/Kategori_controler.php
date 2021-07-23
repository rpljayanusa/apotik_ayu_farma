<?php
class Kategori_controler extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('M_kategori');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->M_kategori->tampil_Kategori();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_Kategori',$d,true);
		$this->load->view('home',$x);
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}
function tambah_Kategori()
	{	
		if($this->session->userdata('masuk')==true){

		$kode=$this->input->post('kode');
		$kategori=$this->input->post('kategori');	
		$keterangan=$this->input->post('keterangan');
	


		$this->M_kategori->simpan_Kategori($kode,$kategori,$keterangan);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Kategori_controler');</script>";
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function hapus_Kategori()
	{	if($this->session->userdata('masuk')==true){
		$kode=$this->input->post('kode');
		$this->M_kategori->hapus_Kategori($kode);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Kategori_controler');</script>";
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function update_Kategori()
	{	
		if($this->session->userdata('masuk')==true){
		$kode=$this->input->post('kode');
		$kategori=$this->input->post('kategori');
		$keterangan=$this->input->post('keterangan');
	
		$this->M_kategori->update_Kategori($kode,$kategori,$keterangan);
		
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Kategori_controler');</script>";
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
}
?>