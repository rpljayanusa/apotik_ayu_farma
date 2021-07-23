<?php
class Suplier_model extends CI_Model
{
	function tampil_suplier()
	{
		$hsl=$this->db->query("select * from tb_suplier");
		return $hsl;
	}

	function simpan_suplier($kode_suplier,$nama_suplier,$alamat,$notelp,$email)
	{
		$hsl=$this->db->query("INSERT INTO tb_suplier VALUES ('$kode_suplier','$nama_suplier','$alamat','$notelp','$email')");
		return $hsl;
	}
	function hapus_suplier($kode_suplier){
		$hsl=$this->db->query("DELETE FROM tb_suplier where kode_suplier='$kode_suplier'");
		return $hsl;
	}
	function update_suplier($kode_suplier,$nama_suplier,$alamat,$notelp,$email){
		$hsl=$this->db->query("UPDATE tb_suplier set nama_suplier='$nama_suplier',alamat='$alamat',notelp='$notelp',email='$email' where kode_suplier='$kode_suplier'");
		return $hsl;
	}
}
?>