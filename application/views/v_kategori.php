<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah kategori</a></div>&nbsp
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>Kode kategori</th>
									<th>Kategori</th>
                                    <th>Keterangan</th>
                               
                                   
                                   <!-- <th>kode qr</th>-->
									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
              
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $kode=$a['kode'];
                        $kategori=$a['kategori'];
                        $keterangan=$a['keterangan'];
                        // $warnakategori=$a['warnakategori'];
                        // $jumlahkursi=$a['jumlahkursi'];
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kode;?></td>
                        <td><?php echo $kategori;?></td>
                        <td><?php echo $keterangan;?></td>
                
                        <!--<td><img style="width: 100px;" src="<?php echo base_url().'assets/img/'.$a->barcode;?>"></td>-->
                        
                       <!-- <td  style="width: 100px;"class="text-center"><a href="javascript:void(0)" onclick="foto('<?php echo $a['kode']?>')"><img width="100" height="70" src="<?php echo base_url();?>assets/img/<?php echo $a['barcode']?>" class="img-thumbnail" alt="kode qr"></a> </td>  
                        -->
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $kode?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $kode?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                                </tbody>
                            </table>
                            
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <!-- /.box -->        
		
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah kategori</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/kategori_controler/tambah_kategori'?>">
                <div class="modal-body">

					<!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Kode kategori</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="kode" class="form-control" type="text" required>
                        </div>
						</div>
                    </div> -->

					<div class="form-group">
                        <label class="control-label col-xs-3" >Kategori</label>
                        <div class="col-xs-9">
						<div class="form-line">
                          <input type="text" name="kategori" class="form-control">
                            <!-- <select name="kategori"  class="form-control" id=""required>
                                <option value="">=Pilih Kategori=</option>
                                <option value="Anak-anak">Anak-anak</option>
                                <option value="Dewasa">Dewasa</option>
                            </select> -->
                        </div>
						</div>
                    </div>
				
                   
                       

                            <div class="form-group">
                        <label class="control-label col-xs-3" >keterangan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="keterangan" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                      
                        

                 
                        </div>
						
                    
					
					
                

                <div class="modal-footer">
                   <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <!-- ============ MODAL EDIT =============== -->
					<?php
                    foreach ($tampil->result_array() as $a) {
                        $kode=$a['kode'];
                        $kategori=$a['kategori'];
                        $keterangan=$a['keterangan'];
                      
                    ?>
                <div id="modalEditPelanggan<?php echo $kode?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit kategori</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/kategori_controler/update_kategori'?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $kode;?>">
						
                    <div class="form-group">
                        <label class="control-label col-xs-3" >kategori</label>
                        <div class="col-xs-9"><div class="form-line">
                        <input name="kategori" class="form-control" type="text" placeholder="" value="<?php echo $kategori;?>"  required>
                        <!-- <select name="kategori" class="form-control">
                                    <option>= Pilih Kategori =</option>
                                    <option value="Anak-anak" <?php if (  $kategori=$a['kategori'] == 'Anak-anak'){echo "selected";}?>>Anak-anak</option>
                                     <option value="Dewasa" <?php if (  $kategori=$a['kategori'] == 'Dewasa'){echo "selected";}?>>Dewasa</option>
                                </select> -->
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >keterangan</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="keterangan" class="form-control" type="text" placeholder="keterangan..." value="<?php echo $keterangan;?>"  required>
                        </div></div>
                    </div> 

               
                    
                </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

        <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($tampil->result_array() as $a) {
                        $kode=$a['kode'];
                        $kategori=$a['kategori'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $kode?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus kategori</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/kategori_controler/hapus_kategori'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kode" type="hidden" value="<?php echo $kode; ?>">
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
