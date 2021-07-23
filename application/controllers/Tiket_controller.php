<?php
class Tiket_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('tiket_model');
$this->load->model('jadwal_model');
$this->load->model('M_kategori');
$this->load->model('Pembayaran_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->tiket_model->tampil_tiket();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_tiket',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}
	function lap_tiket_pertanggal()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_tiket_pertanggal($th);
		    $this->load->view('lap_tiket_pertanggal',$v);
		}

	function tampil_data_peruser()
	{
		if($this->session->userdata('masuk')==true){
			// $kode=$this->session->set_userdata('kode_tiket',$this->input->post('kode_tiket'));
		$data = $this->tiket_model->tampil_tiket();
	
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_tiket_user',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}



function form_tiket()
	{
		if($this->session->userdata('masuk')==true){
		$d['tampil_jadwal']= $this->jadwal_model->tampil_jadwal();    
		$d['tampil_kategori']= $this->M_kategori->tampil_kategori();    
		  
		$x['isi'] = $this->load->view('form_input_tiket',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

function form_tiket_user()
	{
		if($this->session->userdata('masuk')==true){
		$d['tampil_jadwal']= $this->jadwal_model->tampil_jadwal();    
		$d['tampil_kategori']= $this->M_kategori->tampil_kategori();    
		  
		$x['isi'] = $this->load->view('form_input_tiket_user',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

	function form_pembayaran()
{
	if($this->session->userdata('masuk')==true){
	$d['tampil_notin']= $this->Pembayaran_model->tampil_notin();    
 
	  
	$x['isi'] = $this->load->view('form_input_pembayaran',$d,true);
	$this->load->view('home',$x);

	 }else{
echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
}
}

function form_edit_tiket()
	{
		if($this->session->userdata('masuk')==true){
			$kode=$this->uri->segment(3);
		$d['tampil']= $this->tiket_model->edit_Tiket($kode);      
		$d['tampil_jadwal']= $this->jadwal_model->tampil_jadwal();    
		$d['tampil_kategori']= $this->M_kategori->tampil_kategori();    
		  
		$x['isi'] = $this->load->view('form_edit_tiket',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}


function tambah_tiket()
	{	

		$kode_tiket=$this->input->post('kode_tiket');
		$nama_penumpang=$this->input->post('nama_penumpang');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$nohp=$this->input->post('nohp');

		$tanggal=$this->input->post('tanggal');	
		
		$kategori=$this->input->post('kategori');
		$id_jadwal=$this->input->post('id_jadwal');
		// $bangku=$this->input->post('bangku');
		// $tanggalpesan=date('Y-m-d');

		$keterangan=$this->input->post('keterangan');	
		$id_bus=$this->input->post('id_bus');	
		$harga=$this->input->post('harga');	
		// $kodesopir=$this->input->post('kodesopir');	
		/*$harga=$this->input->post('harga');*/	
		// $harga_tiket=str_replace('.', '', $this->input->post('harga_tiket'));
		/*
		$this->tiket_model->simpan_tiket($kode_tiket,$tanggal,$nama_penumpang,$kategori,$id_jadwal,$bangku,$tanggalpesan,$keterangan,$harga_tiket,$kodesopir,$harga);*/

		$this->db->query("INSERT INTO tb_tiket VALUES ('$kode_tiket','$nama_penumpang','$alamat','$jenis_kelamin','$nohp','$tanggal',
		'$kategori','$id_jadwal','$keterangan','1','$id_bus','$harga')");
		redirect('tiket_controller/');	
	}



	function tambah_tiket_user()
	{	

		$kode_tiket=$this->input->post('kode_tiket');
		$nama_penumpang=$this->input->post('nama_penumpang');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$nohp=$this->input->post('nohp');

		$tanggal=$this->input->post('tanggal');	
		
		$kategori=$this->input->post('kategori');
		$id_jadwal=$this->input->post('id_jadwal');
		// $bangku=$this->input->post('bangku');
		// $tanggalpesan=date('Y-m-d');

		$keterangan=$this->input->post('keterangan');	
		$id_bus=$this->input->post('id_bus');	
		$harga=$this->input->post('harga');	
		// $kodesopir=$this->input->post('kodesopir');	
		/*$harga=$this->input->post('harga');*/	
		// $harga_tiket=str_replace('.', '', $this->input->post('harga_tiket'));
		/*
		$this->tiket_model->simpan_tiket($kode_tiket,$tanggal,$nama_penumpang,$kategori,$id_jadwal,$bangku,$tanggalpesan,$keterangan,$harga_tiket,$kodesopir,$harga);*/

		$this->db->query("INSERT INTO tb_tiket VALUES ('$kode_tiket','$nama_penumpang','$alamat','$jenis_kelamin','$nohp','$tanggal',
		'$kategori','$id_jadwal','$keterangan','1','$id_bus','$harga')");
		redirect('tiket_controller/tampil_data_peruser');	
	}




function hapus_tiket()
	{
		$kode_tiket=$this->input->post('kode_tiket');
		$this->tiket_model->hapus_tiket($kode_tiket);
		redirect('tiket_controller/');
	}


function update_tiket()
	{	
		$kode_tiket=$this->input->post('kode_tiket');
		$tanggal=$this->input->post('tanggal');	
		$nama_penumpang=$this->input->post('nama_penumpang');
		$kategori=$this->input->post('kategori');
		$id_jadwal=$this->input->post('id_jadwal');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$nohp=$this->input->post('nohp');

		$tanggal=$this->input->post('tanggal');	

		$keterangan=$this->input->post('keterangan');	
		$status=$this->input->post('status');	
		// $harga_tiket=$this->input->post('harga_tiket');	
		// $kodesopir=$this->input->post('kodesopir');	
		/*$harga=$this->input->post('harga');*/	
		$harga=$this->input->post('harga');
		
		
		$this->db->query("UPDATE tb_tiket set
		kode_tiket='$kode_tiket',
		tanggal='$tanggal',
	   nama_penumpang='$nama_penumpang',
	   kategori='$kategori',
	   id_jadwal='$id_jadwal',
	   keterangan='$keterangan',
	   alamat='$alamat',
	   jenis_kelamin='$jenis_kelamin',
	   nohp='$nohp',
	   harga='$harga',
   
	   status='$status'
		where kode_tiket='$kode_tiket'");
		redirect('tiket_controller/');
	}
}
?>