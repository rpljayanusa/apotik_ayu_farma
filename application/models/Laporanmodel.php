<?php
class Laporanmodel extends CI_Model
{
	function tampil_stok($tanggal_expired)
	{
		$hsl=$this->db->query("SELECT * FROM tb_obat WHERE `tanggal_expired`='$tanggal_expired'");
		return $hsl;
	}

	function lap_kategori_obat()
	{
		$hsl=$this->db->query("select * from tb_kategori");
		return $hsl;
	}
	function lap_jenis_obat()
	{
		$hsl=$this->db->query("select * from tb_jenis_obat");
		return $hsl;
	}

	
	function lap_penjualan_perbulan($bulan)
	{
		$hsl=$this->db->query("SELECT * FROM tb_transaksi_penjualan WHERE  DATE_FORMAT(tanggal,'%Y-%m')='$bulan'  ");
		return $hsl;
	}

	function lap_penjualan_pertahun($tahun)
	{
		$hsl=$this->db->query("SELECT * FROM tb_transaksi_penjualan WHERE  DATE_FORMAT(tanggal,'%Y')='$tahun'  ");
		return $hsl;
	}

	function lap_barangmasuk_perhari($tanggal)
	{
		$hsl=$this->db->query("SELECT * FROM tb_barangmasuk WHERE  tanggal='$tanggal'  ");
		return $hsl;
	}

	function lap_barangmasuk_perbulan($bulan)
	{
		$hsl=$this->db->query("SELECT * FROM tb_barangmasuk WHERE DATE_FORMAT(tanggal,'%Y-%m')='$bulan'   ");
		return $hsl;
	}
	function lap_barangmasuk_pertahun($tahun)
	{
		$hsl=$this->db->query("SELECT * FROM tb_barangmasuk WHERE DATE_FORMAT(tanggal,'%Y')='$tahun'   ");
		return $hsl;
	}

	
	function get_bulan_jual(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(jadwalkeberangkatan,'%M %Y') AS bulan FROM pembayaran");
		return $hsl;
	}
	function get_tahun_jual(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(jadwalkeberangkatan) AS tahun FROM pembayaran");
		return $hsl;
	}

	
	function cetak_perhari($th)
	{
		$hsl=$this->db->query("SELECT `kodebayar`,`kodepelanggan`,`namasopir`,`nomormobil`,`jadwalpemesanan`,
DATE_FORMAT(`jadwalkeberangkatan`, '%d %M %Y') AS tanggalberangkat,DAYNAME(jadwalkeberangkatan)AS hari,
`jumlahbayar`,`totalbayar`,kembalian  FROM pembayaran WHERE jadwalkeberangkatan='$th'");
		return $hsl;
	}

function cetak_perbulan($bulan,$tahun)
	{
		$hsl=$this->db->query("SELECT `kodebayar`,`kodepelanggan`,`namasopir`,`nomormobil`,`jadwalpemesanan`,
DATE_FORMAT(`jadwalkeberangkatan`, '%d %M %Y') AS tanggalberangkat,DATE_FORMAT(`jadwalkeberangkatan`, '%M %Y') AS tanggalberangkat1,
`jumlahbayar`,`totalbayar`,kembalian  FROM pembayaran WHERE MONTH(`jadwalkeberangkatan`)='$bulan' AND YEAR(`jadwalkeberangkatan`)='$tahun'");
		return $hsl;
	}
	function Cetak_tahun($tahun)
	{
		$hsl=$this->db->query("SELECT `kodebayar`,`kodepelanggan`,`namasopir`,`nomormobil`,`jadwalpemesanan`,
DATE_FORMAT(`jadwalkeberangkatan`, '%d %M %Y') AS tanggalberangkat,DATE_FORMAT(`jadwalkeberangkatan`, '%Y')AS tahun,
`jumlahbayar`,`totalbayar`,kembalian  FROM pembayaran WHERE DATE_FORMAT(`jadwalkeberangkatan`, '%Y')='$tahun'");
		return $hsl;
	}



	function cetak_Karyawan()
	{
		$hsl=$this->db->query("SELECT * FROM admin; ");
		return $hsl;
	}

	function cetak_mobil()
	{
		$hsl=$this->db->query("SELECT * FROM mobil");
		return $hsl;
	}

	function cetak_jadwal()
	{
		$hsl=$this->db->query("SELECT * FROM tb_jadwal");
		return $hsl;
	}

	function cetak_kategori()
	{
		$hsl=$this->db->query("SELECT * FROM tb_kategori");
		return $hsl;
	}
	function lap_tiket_perbulan($bulan)
	{
		$hsl=$this->db->query("SELECT  `tb_tiket`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_kategori`.`nama`,
		`tb_bus`.`nama` AS nama_bus,
		`tb_kategori`.`harga`
		FROM tb_jadwal, tb_kategori,tb_tiket,tb_bus
		WHERE tb_tiket.id_jadwal = tb_jadwal.id_jadwal
		AND tb_tiket.`kategori` = tb_kategori.`id_kategori`
		AND tb_tiket.id_bus = tb_bus.id_bus
		AND DATE_FORMAT(tanggal,'%Y-%m')='$bulan'
		ORDER BY `kode_tiket` DESC");
		return $hsl;
	}
	function lap_tiket_pertanggal($bulan)
	{
		$hsl=$this->db->query("SELECT  `tb_tiket`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_kategori`.`nama`,
		`tb_bus`.`nama` AS nama_bus,
		`tb_kategori`.`harga`
		FROM tb_jadwal, tb_kategori,tb_tiket,tb_bus
		WHERE tb_tiket.id_jadwal = tb_jadwal.id_jadwal
		AND tb_tiket.`kategori` = tb_kategori.`id_kategori`
		AND tb_tiket.id_bus = tb_bus.id_bus
		AND DATE_FORMAT(tanggal,'%Y-%m-%d')='$bulan'
		ORDER BY `kode_tiket` DESC");
		return $hsl;
	}

	function lap_pengiriman_perbulan($bulan)
	{
		$hsl=$this->db->query("SELECT * FROM tb_pengiriman_barang WHERE DATE_FORMAT(tanggal,'%Y-%m')='$bulan'");
		return $hsl;
	}

	function Lap_pengiriman_pertanggal($bulan)
	{
		$hsl=$this->db->query("SELECT * FROM tb_pengiriman_barang WHERE DATE_FORMAT(tanggal,'%Y-%m-%d')='$bulan'");
		return $hsl;
	}


	function get_total_tiket_pertahun($tahun){
		$hsl=$this->db->query("SELECT kode_tiket,   DATE_FORMAT(tanggal,'%Y') AS tahun, DATE_FORMAT(tanggal,'%M %Y') 
		AS bulan ,SUM(`harga`) AS harga FROM  tb_tiket WHERE YEAR(tanggal)='$tahun'  GROUP BY kode_tiket DESC
		");
		return $hsl;
	}

	
	function get_tiket_pertahun($tahun){
		$hsl=$this->db->query("
		SELECT   kode_tiket, DATE_FORMAT(tanggal,'%Y') AS tahun,DATE_FORMAT(tanggal,'%M %Y') 
				AS bulan ,harga FROM  tb_tiket WHERE  YEAR(tanggal)='$tahun'   GROUP BY kode_tiket DESC
		");
		return $hsl;
	}

	
}
?>