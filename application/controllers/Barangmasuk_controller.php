<?php
class barangmasuk_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Barangmasuk_model');
$this->load->model('Suplier_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$d['tampil']= $this->Barangmasuk_model->tampil_barangmasuk();    
		$d['tampil_suplier']= $this->Suplier_model->tampil_suplier();    
	  
		$x['isi'] = $this->load->view('v_barangmasuk',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

function edit_barangmasuk()
	{
		if($this->session->userdata('masuk')==true){
		$kode=$this->uri->segment(3);
		$d['tampil_edit']= $this->Barangmasuk_model->tampil_edit_barangmasuk($kode);  
		$d['tampil']= $this->Barangmasuk_model->tampil_barangmasuk();    
		$d['tampil_suplier']= $this->Suplier_model->tampil_suplier();    
		$x['isi'] = $this->load->view('v_editbarangmasuk',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}



	function v_barangmasuk_user()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Barangmasuk_model->tampil_barangmasuk();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_barangmasuk_user',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}


	
function tambah_barangmasuk()
	{	

	
		$kode_obat=$this->input->post('kode_obat');
		$nama_obat=$this->input->post('nama_obat');
		$suplier=$this->input->post('suplier');
		$jumlah=$this->input->post('jumlah');
		$satuan=$this->input->post('satuan');
		$harga=$this->input->post('harga');
		$total=$this->input->post('total');
		$tanggal=date('Y-m-d');

		$this->Barangmasuk_model->simpan_barangmasuk($kode_obat,$tanggal,$nama_obat,$suplier,$jumlah,$satuan,$harga,$total);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/barangmasuk_controller/');</script>";
	}


function hapus_barangmasuk()
	{
		$kode_obat=$this->input->post('kode_obat');
		$this->Barangmasuk_model->hapus_barangmasuk($kode_obat);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/barangmasuk_controller/');</script>";
	}
function update_barangmasuk()
	{	
		$kode_obat=$this->input->post('kode_obat');
		$nama_obat=$this->input->post('nama_obat');
		$suplier=$this->input->post('suplier');
		$jumlah=$this->input->post('jumlah');
		$satuan=$this->input->post('satuan');
		$harga=$this->input->post('harga');
		$total=$this->input->post('total');
		$tanggal=date('Y-m-d');
		
		// var_dump($_POST);
		
	
		$this->Barangmasuk_model->update_barangmasuk($kode_obat,$tanggal,$nama_obat,$suplier,$jumlah,$satuan,$harga,$total);
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/barangmasuk_controller/');</script>";
	}
}
?>