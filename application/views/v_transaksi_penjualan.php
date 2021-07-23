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
              Input transaksi penjualan
            </h3>
          </div>
          <hr>
<br><br>
 


                          
<div id="modal_obat" class="modal modal fade modal-xl" role="dialog" > 

<!-- konten modal--> 
<div class="modal-dialog modal-lg">
<div class="modal-content modal-lg"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Data Obat</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover"  id="dataTables-example" >


<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                        <th>Kode obat</th>
                                 
									<th>Nama obat</th>
									<th>Harga</th>
                                    <th>Stok</th>
                                 
                                   
                                    <th>Tanggal expired</th>
                                    <th>Status expired</th>
                             
                                   
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_obat->result_array() as $a):
                        $no++;
                        $kode_obat=$a['kode_obat'];
                        $jenis_obat=$a['jenis_obat'];
                        $nama_obat=$a['nama_obat'];
                        $harga=$a['harga'];
                        // $stok=$a['stok'];
                        $stok=$a['stok'];
                        $pemasok=$a['pemasok'];
                   
                        $kategori=$a['kategori'];
                        $tanggal_expired=$a['tanggal_expired'];

                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                      
						<td><?php echo $kode_obat;?></td>
                       
                        <td><?php echo $nama_obat;?></td>
                        <td><?php echo $harga;?></td>
                        <td><?php echo $stok;?></td>
                      
                        <td><?php echo $tanggal_expired;?></td>

                        <td><?php


$awal  = strtotime(date("Y-m-d"));
$akhir = strtotime($tanggal_expired); // waktu sekarang
$diff  =$akhir - $awal;
$hari= floor($diff / (60 * 60 * 24));


$tgl_now=date("Y-m-d");
$tgl_exp="$tanggal_expired";//tanggal expired


if ($tgl_now >=$tgl_exp )
{
 echo"  <button class='btn btn-danger' title='EXPIRED'>
 </i>  EXPIRED</button>";
}
else
echo "  <button class='btn btn-primary' title='MASIH BERLAKU'>
</i>  EXPIRED   $hari  Hari Lagi </button>";
{
?>
<!--ISIKAN SCRIPT INDEXNYA DISINI-->
<?php
}
?></td>

<td><span class="btn btn-info btn-sm" type="button" onClick="

  document.getElementById('kode_obat').value ='<?php echo $kode_obat ?>';
  document.getElementById('nama_obat').value ='<?php echo $nama_obat ?>';
  document.getElementById('harga').value ='<?php echo $harga ?>';


 $('#modal_obat').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
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
   one=document.formS.stok.value;
two=document.formS.harga.value;
bayar=document.formS.bayar.value;

total=document.formS.total.value= (two*1)*(one*1);
document.formS.kembalian.value= bayar - total ;


}
function stopCalc(){clearInterval(interval)}

</script>



      <form class="form-horizontal" method="post" name="formS" action="<?php echo base_url().'index.php/Transaksi_penjualan_controller/tambah_transaksi_penjualan'?>">
       
                <div class="card-body">
               

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal </label>
                    <div class="col-sm-3">
                      <input class="form-control" type="text" name="tanggal" id="" value="<?php echo date('Y-m-d')?>" placholder/>
                    </div>
                  </div>

                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode obat</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="kode_obat" id="kode_obat" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_obat"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Obat</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_obat"id="nama_obat"  class="form-control" cols="30" rows="3"></input>
                    </div>
                  </div>
                  
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga  (Rp)</label>
                    <div class="col-sm-10">
                  
                    <input name="harga_jual" id="harga" onFocus="startCalc();" onBlur="stopCalc();" onBlur="stopCalc();"style="width:335px;" class="form-control" type="number" required >
                           
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                    <input name="stok"    onFocus="startCalc();"  onBlur="stopCalc();" style="width:335px;"class="form-control" type="number" required >
                            
                    </div>
                  </div>


                 


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Total  (Rp)</label>
                    <div class="col-sm-10">
                    <input name="total" onkeyup="convertToRupiah(this);" id="total" style="width:335px;" class="form-control" type="text" required >
                            <!-- <input name="keterangan"value="2" class="form-control" type="hidden" > -->
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">bayar</label>
                    <div class="col-sm-10">
                    <input name="bayar"   id="bayar" onFocus="startCalc();"  onBlur="stopCalc();" style="width:335px;"class="form-control" type="number" required >
                            
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kembalian  (Rp)</label>
                    <div class="col-sm-10">
                    <input name="kembalian" onkeyup="convertToRupiah(this);" id="kembalian" style="width:335px;" class="form-control" type="text" required >
                            <!-- <input name="kembali"value="2" class="form-control" type="hidden" > -->
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

        </div>
      </div>
   <br>

   </form>   
           

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Transaksi Penjualan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>

                                        <th style="text-align:center;width:3px;">No</th>
									<th>Kode Transaksi</th>
									<th>Kode obat</th>
									<th>Tanggal</th>
									<th>Nama obat</th>
									<th>Harga jual</th>
                                    <th>stok</th>
                                  
                                 
                                    <th>Total</th>
                                           
                                
									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;

                      
                        $kode_transaksi=$a['kode_transaksi'];
                        $kode_obat=$a['kode_obat'];
                        $tanggal=$a['tanggal'];
                        $nama_obat=$a['nama_obat'];
                        $harga_jual=$a['harga_jual'];
                        $stok=$a['stok'];
                    
                  
                        $total=$a['total'];
                       
                ?>
             

                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kode_transaksi;?></td>
						<td><?php echo $kode_obat;?></td>
						<td><?php echo $tanggal;?></td>
						<td><?php echo $nama_obat;?></td>
						<td><?php echo $harga_jual;?></td>
                        <td><?php echo $stok;?></td>
                    
                        <td><?php echo $total;?></td>
                 
                     
                        
                        <td style="text-align:center;">
                        <a class="btn btn-xs btn-info btn-circle"  href="<?php echo base_url() .'index.php/Transaksi_penjualan_controller/edit_transaksi_penjualan/'.$kode_transaksi;?>"   title="Edit"><span class="fa fa-edit"></span> </a>
                            
                            <a class="btn btn-xs btn-danger btn-circle" href="#modalHapusTransaksi_penjualan<?php echo $kode_transaksi?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span></a>

                          
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
                        $kode_transaksi=$a['kode_transaksi'];
                       
                    ?>
                <div id="modalHapusTransaksi_penjualan<?php echo $kode_transaksi?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus transaksi penjualan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Transaksi_penjualan_controller/hapus_transaksi_penjualan'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kode_transaksi" type="hidden" value="<?php echo $kode_transaksi; ?>">
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
