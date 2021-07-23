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
              Edit Data Obat
            </h3>
          </div>
          <hr>



                          
          <div id="modal_data_obat" class="modal modal fade modal-xl" role="dialog" > 

<!-- konten modal--> 
<div class="modal-dialog modal-lg">
<div class="modal-content modal-lg"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Data Barang Masuk</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover"  id="dataTables-example" >


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
                    foreach ($tampil_barang->result_array() as $a):
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

<td><span class="btn btn-info btn-sm" type="button" onClick="

  document.getElementById('nama_obat').value ='<?php echo $nama_obat ?>';
  document.getElementById('jumlah').value ='<?php echo $jumlah ?>';
  document.getElementById('harga').value ='<?php echo $harga ?>';
  document.getElementById('suplier').value ='<?php echo $suplier ?>';

 $('#modal_data_obat').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
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

      
      <?php 
                    $no=0;
            

                    foreach ($tampil->result_array() as $a):
                        $no++;
                 
                        $kode_obat=$a['kode_obat'];
                        $jenis_obat=$a['jenis_obat'];
                        $nama_obat=$a['nama_obat'];
                        $harga=$a['harga'];
                        // $jumlah=$a['jumlah'];
                        $stok=$a['stok'];
                        $pemasok=$a['pemasok'];
                   
                        $kategori=$a['kategori'];
                        $tanggal_expired=$a['tanggal_expired'];

                       
                        
                ?>

      

      <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Data_obat_controller/update_data_obat'?>">
       
                <div class="card-body">
              
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Obat</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="nama_obat" id="nama_obat" value="<?php echo $nama_obat?>" placholder/>
                      <input class="form-control" type="hidden" name="kode_obat" value="<?php echo $kode_obat?>" />
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_data_obat"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pemasok</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="pemasok" id="suplier" value="<?php echo $pemasok?>" placholder/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                    <select name="kategori" class="form-control show-tick" required>
        <option value="">Pilih kategori</option>
    

<?php
        $kategori=$this->db->query("select* from tb_kategori");
        foreach($kategori->result_array() as $i){
        $kategori=$i['kategori'];
        if($a['kategori']==$i['kategori']){
          $cek="selected";
        }
        else{
          $cek="";
          }

          echo"<option value='$kategori' $cek>$kategori</option>";

        }
        echo"</select>";
        ?>


        </select>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Expired Date</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="date" name="tanggal_expired" value="<?php echo $tanggal_expired?>"  placholder/>
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis obat</label>
                    <div class="col-sm-10">
               

  <select name="jenis_obat" class="form-control show-tick" required>
        <option value="">Pilih jenis obat</option>
   

<?php
        $nama_jenis=$this->db->query("select* from tb_jenis_obat");
        foreach($nama_jenis->result_array() as $i){
        $nama_jenis=$i['nama_jenis'];
        if($a['jenis_obat']==$i['nama_jenis']){
          $cek="selected";
        }
        else{
          $cek="";
          }

          echo"<option value='$nama_jenis' $cek>$nama_jenis</option>";

        }
        echo"</select>";
        ?>

        </select>


                      
                    </div>
                  </div>

              
        

                         <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="">
                      <input class="form-control" type="number" name="harga" id="harga"  value="<?php echo $harga?>"   style="width:80px;"  placholder/>
                          </td>
                        
                        </tr>

                      </table>
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="">
                      <input class="form-control" type="number" name="stok" id="jumlah"value="<?php echo $stok?>"   style="width:80px;"  placholder/>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>

                <!-- /.col-lg-12 -->
            </div>
            </div>
            
            <?php endforeach;?>
              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon  
glyphicon-floppy-saved"></span> Edit</button> 
            <a href="<?php echo base_url().'index.php/Surat_jalan_controller'?>" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->

        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
                    </form>
  <script src="<?php echo base_url().'asset/jquery/jquery-2.2.3.min.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.js'?>"></script>
  <script src="<?php echo base_url().'asset/ckeditor/ckeditor.js'?>"></script>
  <script type="text/javascript">
    $(function () {
      CKEDITOR.replace('ckeditor');
    });
  </script>
</body>
</html>