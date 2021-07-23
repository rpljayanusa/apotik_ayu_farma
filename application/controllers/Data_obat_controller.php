<?php
class Data_obat_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Data_obat_model');


$this->load->model('Barangmasuk_model');
// $this->load->model('Kategori_model');
// $this->load->model('data_obat_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$d['tampil']= $this->Data_obat_model->tampil_obat();    
	
		// $d['tampil_jenis_obat']= $this->jenis_obat_model->tampil_jenis_obat();    
		// $d['tampil_kategori']= $this->kategori_model->tampil_kategori();    
	  
		$x['isi'] = $this->load->view('v_data_obat',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

	function form_obat()
	{
		if($this->session->userdata('masuk')==true){
			$d['tampil']= $this->Barangmasuk_model->tampil_barangmasuk();    
			$x['isi'] = $this->load->view('form_input_data_obat',$d,true);	
			$this->load->view('home',$x);
		}
	}

function form_edit_data_obat()
	{
		if($this->session->userdata('masuk')==true){
		$kode_obat=$this->uri->segment(3);
		$d['tampil_barang']= $this->Barangmasuk_model->tampil_barangmasuk();  
		$d['tampil']= $this->Data_obat_model->tampil_edit_obat($kode_obat);    
		// $d['tampil_jenis_obat']= $this->jenis_obat_model->tampil_jenis_obat();    
		$x['isi'] = $this->load->view('form_edit_data_obat',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}



	function v_data_obat_user()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Data_obat_model->tampil_data_obat();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_data_obat_user',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}


	
function tambah_data_obat()
	{	


		$kode_obat=$this->input->post('kode_obat');
		$nama_obat=$this->input->post('nama_obat');
		$jenis_obat=$this->input->post('jenis_obat');
		$harga=$this->input->post('harga');
		$stok=$this->input->post('stok');
		$pemasok=$this->input->post('pemasok');
		$kategori=$this->input->post('kategori');
		$tanggal_expired=$this->input->post('tanggal_expired');
		$this->Data_obat_model->simpan_data_obat($kode_obat,$jenis_obat,$nama_obat,$harga,$stok,$pemasok,$kategori,$tanggal_expired);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Data_obat_controller/');</script>";
	}


function hapus_data_obat()
	{
		$kode_obat=$this->input->post('kode_obat');
		$this->Data_obat_model->hapus_data_obat($kode_obat);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Data_obat_controller/');</script>";
	}
function update_data_obat()
	{	
		
		$kode_obat=$this->input->post('kode_obat');
		$nama_obat=$this->input->post('nama_obat');
		$jenis_obat=$this->input->post('jenis_obat');
		$harga=$this->input->post('harga');
		$stok=$this->input->post('stok');
		$pemasok=$this->input->post('pemasok');
		$kategori=$this->input->post('kategori');
		$tanggal_expired=$this->input->post('tanggal_expired');

		$this->Data_obat_model->update_data_obat($kode_obat,$jenis_obat,$nama_obat,$harga,$stok,$pemasok,$kategori,$tanggal_expired);
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Data_obat_controller/');</script>";
	}
}
?>