<?php
class Transaksi_penjualan_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Transaksi_penjualan_model');
$this->load->model('Data_obat_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$d['tampil']= $this->Transaksi_penjualan_model->tampil_transaksi_penjualan();    
		$d['tampil_obat']= $this->Data_obat_model->tampil_obat();    
	  
		$x['isi'] = $this->load->view('v_transaksi_penjualan',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

function edit_transaksi_penjualan()
	{
		if($this->session->userdata('masuk')==true){
		$kode=$this->uri->segment(3);
		$d['tampil_edit']= $this->Transaksi_penjualan_model->tampil_edit_transaksi_penjualan($kode);  
		$d['tampil']= $this->Transaksi_penjualan_model->tampil_transaksi_penjualan();    
		$d['tampil_obat']= $this->Data_obat_model->tampil_obat();    
		$x['isi'] = $this->load->view('v_edit_transaksi_penjualan',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}






	
function tambah_transaksi_penjualan()
	{	
		
	
		$kode_transaksi=$this->input->post('kode_transaksi');
		$tanggal=$this->input->post('tanggal');
		$kode_obat=$this->input->post('kode_obat');
		$nama_obat=$this->input->post('nama_obat');
		$harga_jual=$this->input->post('harga_jual');
		$stok=$this->input->post('stok');
		$total=$this->input->post('total');
		$bayar=$this->input->post('bayar');
		$kembalian=$this->input->post('kembalian');
		$this->Transaksi_penjualan_model->simpan_transaksi_penjualan($kode_transaksi,$tanggal,$kode_obat,$nama_obat,$harga_jual,$stok,$bayar,$kembalian,$total);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Transaksi_penjualan_controller/cetak_faktur');</script>";
	}


function hapus_transaksi_penjualan()
	{
		$kode_transaksi=$this->input->post('kode_transaksi');
		$this->Transaksi_penjualan_model->hapus_transaksi_penjualan($kode_transaksi);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Transaksi_penjualan_controller/');</script>";
	}
function update_transaksi_penjualan()
	{	

		
		$kode_transaksi=$this->input->post('kode_transaksi');
		$tanggal=$this->input->post('tanggal');
		$kode_obat=$this->input->post('kode_obat');
		$nama_obat=$this->input->post('nama_obat');
		$harga_jual=$this->input->post('harga_jual');
		$stok=$this->input->post('stok');
		$total=$this->input->post('total');
		$bayar=$this->input->post('bayar');
		$kembalian=$this->input->post('kembalian');
	
		$this->Transaksi_penjualan_model->update_transaksi_penjualan($kode_transaksi,$tanggal,$kode_obat,$nama_obat,$harga_jual,$stok,$bayar,$kembalian,$total);
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_apotik_ayu_farma/index.php/Transaksi_penjualan_controller/');</script>";
	}



	function faktur(){
		if($this->session->userdata('masuk')==true){
			$id=$this->uri->segment(3);
			$data['tampil']=$this->Transaksi_penjualan_model->faktur($id);
			$this->load->view('faktur',$data);
			
		}
		else
			  echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

		
	function cetak_faktur()
	{

		$data['tampil'] = $this->Transaksi_penjualan_model->tampil_transaksi_penjualan();   
		$x['isi'] = $this->load->view('elert/cetak_faktur',$data,true);
		$this->load->view('home',$x);
	
		
	}

	
}
?>