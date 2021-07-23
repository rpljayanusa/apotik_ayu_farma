<?php
class Laporan extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Laporanmodel');
}


	

		function lap_stok()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->tampil_stok($th);
		    $this->load->view('lap_stok',$v);
		}


		function lap_penjualan_perbulan()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_penjualan_perbulan($th);
		    $this->load->view('lap_penjualan_perbulan',$v);
		}


		function lap_penjualan_pertahun()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_penjualan_pertahun($th);
		    $this->load->view('lap_penjualan_pertahun',$v);
		}
		function lap_barangmasuk_perhari()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_barangmasuk_perhari($th);
		    $this->load->view('lap_barangmasuk_perhari',$v);
		}

		function lap_barangmasuk_perbulan()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_barangmasuk_perbulan($th);
		    $this->load->view('lap_barangmasuk_perbulan',$v);
		}
		function lap_barangmasuk_pertahun()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_barangmasuk_pertahun($th);
		    $this->load->view('lap_barangmasuk_pertahun',$v);
		}


function FORM_LAPORAN(){
		$x['isi'] = $this->load->view('FORM_LAPORAN','',true);
		$this->load->view('home',$x);
	}

	
	
		function lap_kategori_obat()	
		{
			
			$v['cth']=$this->Laporanmodel->lap_kategori_obat();
		    $this->load->view('lap_kategori_obat',$v);
		}
		function lap_jenis_obat()	
		{
			
			$v['cth']=$this->Laporanmodel->lap_jenis_obat();
		    $this->load->view('lap_jenis_obat',$v);
		}

	

	

}
?>