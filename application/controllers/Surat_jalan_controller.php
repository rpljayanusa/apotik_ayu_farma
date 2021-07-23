<?php
class Surat_jalan_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Surat_jalan_model');
$this->load->model('Jadwal_model');
$this->load->model('M_kategori');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Surat_jalan_model->tampil_Surat_jalan();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_Surat_jalan',$d,true);
		$this->load->view('home',$x);
	}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}

	function form_surat_jalan()
	{
		if($this->session->userdata('masuk')==true){
	

		$d['tampil'] = $this->Surat_jalan_model->notin();    
		$d['tampil_jadwal'] = $this->Jadwal_model->tampil_jadwal();    
		$x['isi'] = $this->load->view('form_input_surat_jalan',$d,true);
		$this->load->view('home',$x);
	 }else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}

	function form_surat_edit()
	{
		if($this->session->userdata('masuk')==true){

			$id=$this->uri->segment(3);
			$d['tampil_surat']=$this->Surat_jalan_model->tampil_edit($id);
		$x['isi'] = $this->load->view('form_edit_surat_jalan',$d,true);
		$this->load->view('home',$x);
	 }else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}


function tambah_surat_jalan()
	{	
		if($this->session->userdata('masuk')==true){
		
		$kode=$this->input->post('kode');
		$tanggal=$this->input->post('tanggal');	
		$nama_sopir=$this->input->post('nama_sopir');	
		$tujuan=$this->input->post('tujuan');
		$jumlah_penumpang=$this->input->post('jumlah_penumpang');
		$jumlah_barang=$this->input->post('jumlah_barang');
	

		$this->Surat_jalan_model->simpan_Surat_jalan($kode,$tanggal,$nama_sopir,$tujuan,$jumlah_penumpang,$jumlah_barang);
		redirect('Surat_jalan_controller/cetak_faktur');
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
			
	}
function hapus_Surat_jalan()
	{
		if($this->session->userdata('masuk')==true){
		$kode=$this->input->post('kode');
		$this->Surat_jalan_model->hapus_Surat_jalan($kode);
		redirect('Surat_jalan_controller/');
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function update_surat_jalan()
	{	
		if($this->session->userdata('masuk')==true){
			$kode=$this->input->post('kode');
			$tanggal=$this->input->post('tanggal');	
			$nama_sopir=$this->input->post('nama_sopir');	
			$tujuan=$this->input->post('tujuan');
			$jumlah_penumpang=$this->input->post('jumlah_penumpang');
			$jumlah_barang=$this->input->post('jumlah_barang');

		$this->Surat_jalan_model->update_surat_jalan($kode,$tanggal,$nama_sopir,$tujuan,$jumlah_penumpang,$jumlah_barang);
		echo "<script>alert('Data Berhasil Di Ubah');location.href=('http://localhost/Web_PT_HPS/index.php/Surat_jalan_controller');</script>";
	

		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}

	function faktur(){
		if($this->session->userdata('masuk')==true){
			$id=$this->uri->segment(3);
			$data['tampil']=$this->Surat_jalan_model->faktur($id);
			$this->load->view('Surat_jalan',$data);
			
		}
		else
			  echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	function cetak_faktur()
	{

		$data['tampil'] = $this->Surat_jalan_model->tampil_surat_jalan();
		$x['isi'] = $this->load->view('elert/cetak_faktur_jalan',$data,true);
		$this->load->view('home',$x);
	
		
	}



}
?>