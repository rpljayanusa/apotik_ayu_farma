<?php
	class Modeluser extends CI_Model
	{
		function data()
		{
			return $this->db->query("select * from tb_user1");
		}

		function hapus_admin($id){
		$hsl=$this->db->query("DELETE FROM tb_user1 where id='$id'");
		return $hsl;
	}
	

     public function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('tb_user1', $data);
  }
/*	public function insert($data)
  {
    $this->db->insert('tb_user1', $data);
  }*/
function insert($nama,$email,$username,$pass,$gambar,$level){
		$hsl=$this->db->query("INSERT INTO tb_user1 VALUES ('','$nama','$email','$username',md5('$pass'),'$gambar','$level')");
		return $hsl;
	}


    function resetpass($u,$pb)
    {
      $x=$this->db->query("update tb_user1 set pass=md5('$pb') where username='$u'");
      return $x;
    }

      function resetpassword($u,$pb)
    {
      $x=$this->db->query("update tb_penumpang set password='$pb' where username='$u'");
      return $x;
    }

  

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tb_user1');
  }

	}
?>