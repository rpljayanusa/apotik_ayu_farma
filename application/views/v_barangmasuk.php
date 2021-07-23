<!-- <div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah barangmasuk</a></div>&nbsp
<div class="row">
 -->


<!-- <h4><font f="Verdana">Form kategori Keluarga </font></h4><hr/>

 -->
          
 <section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">
              Input Barang Masuk
            </h3>
          </div>
          <hr>
<br><br>
 


                          
<div id="modal_suplier" class="modal modal fade modal-xl" role="dialog" > 

<!-- konten modal--> 
<div class="modal-dialog modal-lg">
<div class="modal-content modal-lg"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Data Suplier</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover"  id="dataTables-example" >


<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                    <th>Kode Suplier</th>
									<th>Nama</th>
									<th>Alamat</th>
                                    <th>Notelp</th>
                                    <th>Email</th>
                                   
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_suplier->result_array() as $a):
                        $no++;
                        $kode_suplier=$a['kode_suplier'];
                        $nama_suplier=$a['nama_suplier'];
                        $alamat=$a['alamat'];
                        $notelp=$a['notelp'];
                        $email=$a['email'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $kode_suplier;?></td>
						<td><?php echo $nama_suplier;?></td>
						<td><?php echo $alamat;?></td>
                        <td><?php echo $notelp;?></td>
                        <td><?php echo $email;?></td>

<td><span class="btn btn-info btn-sm" type="button" onClick="

  document.getElementById('nama_suplier').value ='<?php echo $nama_suplier ?>';

 $('#modal_suplier').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
aria- hidden="true"></i>PILIH</span> 
</td> 
</tr> 
   <?php endforeach;?>
</tbody> 
</table> 
</div> 
<!-- footer modal --> 
<div class="modal-footer"> 
</div> 
</form> 
</div>

        </div>
      </div>
      <script>

function startCalc()
{interval=setInterval("calc()",1)}
function calc()
{
   one=document.formS.jumlah.value;
two=document.formS.harga.value;
document.formS.total.value= (two*1)*(one*1)
}
function stopCalc(){clearInterval(interval)}

</script>

      <form class="form-horizontal" method="post" name="formS" action="<?php echo base_url().'index.php/Barangmasuk_controller/tambah_barangmasuk'?>">
       
                <div class="card-body">
               

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Obat </label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_obat" id="nama_obat"  placholder/>
                    </div>
                  </div>

                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Suplier</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="suplier" id="nama_suplier" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_suplier"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-10">
                      <input type="text" name="satuan"  class="form-control" cols="30" rows="3"></input>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                    <input name="jumlah"   id="jumlah" onFocus="startCalc();"  onBlur="stopCalc();" style="width:335px;"class="form-control" type="number" required >
                            
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">harga  (Rp)</label>
                    <div class="col-sm-10">
                  
                    <input name="harga" id="harga" onFocus="startCalc();" onBlur="stopCalc();" onBlur="stopCalc();"style="width:335px;" class="form-control" type="number" required >
                           
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Total  (Rp)</label>
                    <div class="col-sm-10">
                    <input name="total" onkeyup="convertToRupiah(this);" id="total" style="width:335px;" class="form-control" type="text" required >
                            <input name="keterangan"value="2" class="form-control" type="hidden" >
                    </div>
                  </div>




                <!-- /.col-lg-12 -->
            </div>
            </div>
            

              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon  
glyphicon-floppy-saved"></span> Simpan</button> 
            <!-- <a href="<?php echo base_url().'index.php/'?>" class="btn btn-default float-right">Cancel</a> -->
            <button type="reset" class="btn btn-warning " name="simpan" > <span class="glyphicon  
glyphicon-floppy-reset"></span> Batal</button>
          </div>
          <!-- /.card-footer -->
</form>
        </div>
      </div>
   <br>


           

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data barangmasuk
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>Kode obat</th>
									<th>Nama obat</th>
									<th>Suplier</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                           
                                
									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $kode_obat=$a['kode_obat'];
                        $nama_obat=$a['nama_obat'];
                        $suplier=$a['suplier'];
                        $jumlah=$a['jumlah'];
                        $satuan=$a['satuan'];
                        $harga=$a['harga'];
                        $total=$a['total'];
                       
                ?>
             

                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kode_obat;?></td>
						<td><?php echo $nama_obat;?></td>
						<td><?php echo $suplier;?></td>
                        <td><?php echo $jumlah;?></td>
                        <td><?php echo $satuan;?></td>
                        <td><?php echo $harga;?></td>
                        <td><?php echo $total;?></td>
                 
                     
                        
                        <td style="text-align:center;">
                        <a class="btn btn-xs btn-info btn-circle"  href="<?php echo base_url() .'index.php/Barangmasuk_controller/edit_barangmasuk/'.$kode_obat;?>"   title="Edit"><span class="fa fa-edit"></span> </a>
                            
                            <a class="btn btn-xs btn-danger btn-circle" href="#modalHapusbarangmasuk<?php echo $kode_obat?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span></a>

                          
                        </td>
                    </tr>
                <?php endforeach;?>
                                </tbody>
                            </table>
                            
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <!-- /.box -->        
		

        <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($tampil->result_array() as $a) {
                        $kode_obat=$a['kode_obat'];
                       
                    ?>
                <div id="modalHapusbarangmasuk<?php echo $kode_obat?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus barangmasuk</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/barangmasuk_controller/hapus_barangmasuk'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kode_obat" type="hidden" value="<?php echo $kode_obat; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

        <!--END MODAL-->

   

    <!-- /.container -->
	
           
</script>
    </section>
