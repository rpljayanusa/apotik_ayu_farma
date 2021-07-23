<?php
class M_kategori extends CI_Model
{
	function tampil_kategori()
	{
		
		$hsl=$this->db->query("select * from tb_kategori");
		return $hsl;
	}

	function simpan_kategori($kode,$kategori,$keterangan)
	{
		$hsl=$this->db->query("INSERT INTO tb_kategori VALUES ('$kode','$kategori','$keterangan')");
		return $hsl;
	}
	function hapus_kategori($kode){
		$hsl=$this->db->query("DELETE FROM tb_kategori where kode='$kode'");
		return $hsl;
	}
	function update_kategori($kode,$kategori,$keterangan){
		$hsl=$this->db->query("UPDATE tb_kategori set kategori='$kategori',keterangan='$keterangan' where kode='$kode'");
		return $hsl;
	}
}
?>