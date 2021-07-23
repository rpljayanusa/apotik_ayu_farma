<?php
class Obat_model extends CI_Model
{
	function tampil_obat()
	{
		$hsl=$this->db->query("select * from tb_jenis_obat");
		return $hsl;
	}
	
	function simpan_obat($kode_jenis,$nama_jenis)
	{
		$hsl=$this->db->query("INSERT INTO tb_jenis_obat VALUES ('$kode_jenis','$nama_jenis')");
		return $hsl;
	}
	function hapus_obat($kode_jenis){
		$hsl=$this->db->query("DELETE FROM tb_jenis_obat where kode_jenis='$kode_jenis'");
		return $hsl;
	}
	function update_obat($kode_jenis,$nama_jenis){
		$hsl=$this->db->query("UPDATE tb_jenis_obat set nama_jenis='$nama_jenis' where kode_jenis='$kode_jenis'");
		return $hsl;
	}
}
?>