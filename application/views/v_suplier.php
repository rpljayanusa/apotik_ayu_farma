<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah Suplier</a></div>&nbsp
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Suplier
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                    foreach ($tampil->result_array() as $a):
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
                 
                     
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info btn-circle" href="#modalEditSuplier<?php echo $kode_suplier?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> </a>
                            <a class="btn btn-xs btn-danger btn-circle" href="#modalHapusSuplier<?php echo $kode_suplier?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span></a>

                          
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Suplier</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Suplier_controller/tambah_Suplier'?>">
                <div class="modal-body">
               
					<div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
						<div class="form-line">
                      <input type="text" class="form-control" name="nama_suplier">
                        </div>
						</div>
                    </div>

					<div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
						<div class="form-line">
                        <input type="text" class="form-control" name="alamat">
                        </div>
						</div>
                    </div>

					<div class="form-group">
                        <label class="control-label col-xs-3" >Notelp</label>
                        <div class="col-xs-9">
						<div class="form-line">
                        <input type="text" class="form-control" name="notelp">
                        </div>
						</div>
                    </div>


                        <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                           
                     <input type="text" name="email" class="form-control" required>
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
                        $kode_suplier=$a['kode_suplier'];
                        $nama_suplier=$a['nama_suplier'];
                        $alamat=$a['alamat'];
                        $notelp=$a['notelp'];
                        $email=$a['email'];
                   
                    ?>
                <div id="modalEditSuplier<?php echo $kode_suplier?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Suplier</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Suplier_controller/update_Suplier'?>">
                        <div class="modal-body">
                            <input name="kode_suplier" type="hidden" value="<?php echo $kode_suplier;?>">
                           
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Suplier</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input type="text" name="nama_suplier" class="form-control" value="<?php echo $nama_suplier?>">
                        </div></div>
                    </div> 
                   
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
						<div class="form-line">
                        <input type="text" name="alamat" class="form-control" value="<?php echo $alamat?>">
                        </div>
						</div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-xs-3" >Notelp</label>
                        <div class="col-xs-9">
						<div class="form-line">
                        <input type="text" name="notelp" class="form-control" value="<?php echo $notelp?>">
 
                        </div>
						</div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                           
                     <input type="email" name="email" value="<?php echo $email?>" class="form-control" required>
                        </div>
                        </div>
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
                        $kode_suplier=$a['kode_suplier'];
                       
                    ?>
                <div id="modalHapusSuplier<?php echo $kode_suplier?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus Suplier</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Suplier_controller/hapus_Suplier'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kode_suplier" type="hidden" value="<?php echo $kode_suplier; ?>">
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
