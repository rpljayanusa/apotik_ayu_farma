<?php
class surat_jalan_model extends CI_Model
{
	function tampil_surat_jalan()
	{
		$hsl=$this->db->query("SELECT * FROM tb_surat_jalan ORDER BY kode DESC");
		return $hsl;
	}

	function tampil_edit($kode)
	{
		$hsl=$this->db->query("select * from tb_surat_jalan where kode='$kode'");
		return $hsl;
	}


	function notin()
	{
		$hsl=$this->db->query("SELECT  `tb_tiket`.*, 
	
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`
		
		
		FROM tb_jadwal, tb_kategori,tb_tiket
		WHERE tb_tiket.id_jadwal = tb_jadwal.id_jadwal
		AND tb_tiket.`kategori` = tb_kategori.`id_kategori`
		AND tb_tiket.kode_tiket
		  NOT IN(SELECT `tb_surat_jalan`.`kode` FROM `tb_surat_jalan`)
		");
		return $hsl;
	}


	function simpan_surat_jalan($kode,$tanggal,$nama_sopir,$tujuan,$jumlah_penumpang,$jumlah_barang)
	{
		$hsl=$this->db->query("INSERT INTO tb_surat_jalan VALUES ('$kode','$tanggal','$nama_sopir','$tujuan','$jumlah_penumpang','$jumlah_barang')");
		return $hsl;
	}
	function hapus_surat_jalan($kode){
		$hsl=$this->db->query("DELETE FROM tb_surat_jalan where kode='$kode'");
		return $hsl;
	}
	function update_surat_jalan($kode,$tanggal,$nama_sopir,$tujuan,$jumlah_penumpang,$jumlah_barang){
		$hsl=$this->db->query("UPDATE tb_surat_jalan set tanggal='$tanggal',nama_sopir='$nama_sopir',tujuan='$tujuan',jumlah_penumpang='$jumlah_penumpang',jumlah_barang='$jumlah_barang' where kode='$kode'");
		return $hsl;
	}


	
	function faktur($faktur)
	{
		$hsl=$this->db->query("SELECT `kode`,`nama_sopir`,`tujuan`,`jumlah_penumpang`,`jumlah_barang`,
		DATE_FORMAT(`tanggal`, '%d %M %Y') AS tanggal FROM `tb_surat_jalan` WHERE kode='$faktur'");
		return $hsl;
	}


}
?>