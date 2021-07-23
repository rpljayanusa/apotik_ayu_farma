<?php
class Barangmasuk_model extends CI_Model
{
	function tampil_barangmasuk()
	{
		$hsl=$this->db->query("select * from tb_barangmasuk");
		return $hsl;
	}
	function tampil_edit_barangmasuk($kode)
	{
		$hsl=$this->db->query("select * from tb_barangmasuk where kode_obat='$kode'");
		return $hsl;
	}

	function simpan_barangmasuk($kode_obat,$tanggal,$nama_obat,$suplier,$jumlah,$satuan,$harga,$total)
	{
		$hsl=$this->db->query("INSERT INTO tb_barangmasuk VALUES ('$kode_obat','$tanggal','$nama_obat','$suplier','$jumlah','$satuan','$harga','$total')");
		return $hsl;
	}
	function hapus_barangmasuk($kode_obat){
		$hsl=$this->db->query("DELETE FROM tb_barangmasuk where kode_obat='$kode_obat'");
		return $hsl;
	}
	function update_barangmasuk($kode_obat,$tanggal,$nama_obat,$suplier,$jumlah,$satuan,$harga,$total){
		$hsl=$this->db->query("UPDATE tb_barangmasuk set nama_obat='$nama_obat',tanggal='$tanggal',suplier='$suplier',jumlah='$jumlah',satuan='$satuan',harga='$harga',total='$total' where kode_obat='$kode_obat'");
		return $hsl;
	}
}
?>