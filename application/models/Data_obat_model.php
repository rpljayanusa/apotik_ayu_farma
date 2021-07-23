<?php
class Data_obat_model extends CI_Model
{
	function tampil_obat()
	{
		$hsl=$this->db->query("select * from tb_obat");
		return $hsl;
	}
	function tampil_edit_obat($kode)
	{
		$hsl=$this->db->query("select * from tb_obat where kode_obat='$kode'");
		return $hsl;
	}

	function simpan_data_obat($kode_obat,$jenis_obat,$nama_obat,$harga,$stok,$pemasok,$kategori,$tanggal_expired)
	{
		$hsl=$this->db->query("INSERT INTO tb_obat VALUES ('$kode_obat','$jenis_obat','$nama_obat','$harga','$stok','$pemasok','$kategori','$tanggal_expired')");
		return $hsl;
	}
	function hapus_data_obat($kode_obat){
		$hsl=$this->db->query("DELETE FROM tb_obat where kode_obat='$kode_obat'");
		return $hsl;
	}
	function update_data_obat($kode_obat,$jenis_obat,$nama_obat,$harga,$stok,$pemasok,$kategori,$tanggal_expired){
		$hsl=$this->db->query("UPDATE tb_obat set jenis_obat='$jenis_obat',nama_obat='$nama_obat',harga='$harga',stok='$stok',pemasok='$pemasok',kategori='$kategori',tanggal_expired='$tanggal_expired' where kode_obat='$kode_obat'");
		return $hsl;
	}
}
?>