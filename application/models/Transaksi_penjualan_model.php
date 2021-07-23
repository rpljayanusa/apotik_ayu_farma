<?php
class Transaksi_penjualan_model extends CI_Model
{
	function tampil_transaksi_penjualan()
	{
		$hsl=$this->db->query("select * from tb_transaksi_penjualan order by kode_transaksi ASC");
		return $hsl;
	}
	function tampil_edit_transaksi_penjualan($kode)
	{
		$hsl=$this->db->query("select * from tb_transaksi_penjualan where kode_transaksi='$kode'");
		return $hsl;
	}	
	function faktur($kode)
	{
		$hsl=$this->db->query("select * from tb_transaksi_penjualan where kode_transaksi='$kode' order by kode_transaksi desc");
		return $hsl;
	}	
	function simpan_transaksi_penjualan($kode_transaksi,$tanggal,$kode_obat,$nama_obat,$harga_jual,$stok,$bayar,$kembalian,$total)
	{
		$hsl=$this->db->query("INSERT INTO tb_transaksi_penjualan VALUES ('$kode_transaksi','$tanggal','$kode_obat','$nama_obat','$harga_jual','$stok','$bayar','$kembalian','$total')");
		return $hsl;
	}
	function hapus_transaksi_penjualan($kode_transaksi){
		$hsl=$this->db->query("DELETE FROM tb_transaksi_penjualan where kode_transaksi='$kode_transaksi'");
		return $hsl;
	}
	function update_transaksi_penjualan($kode_transaksi,$tanggal,$kode_obat,$nama_obat,$harga_jual,$stok,$bayar,$kembalian,$total){
		$hsl=$this->db->query("UPDATE tb_transaksi_penjualan set nama_obat='$nama_obat',bayar='$bayar',kembalian='$kembalian',tanggal='$tanggal',kode_obat='$kode_obat',harga_jual='$harga_jual',stok='$stok',total='$total' where kode_transaksi='$kode_transaksi'");
		return $hsl;
	}
}
?>