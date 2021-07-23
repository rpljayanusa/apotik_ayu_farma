<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah obat</a></div>&nbsp
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Jenis Obat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>Kode Jenis</th>
									<th>Jenis Obat</th>
                               
                                 

                                   
                                   <!-- <th>kode qr</th>-->
									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                             
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $kode_jenis=$a['kode_jenis'];
                        $nama_jenis=$a['nama_jenis'];
                 
                        // $warnaobat=$a['warnaobat'];
                        // $jumlahkursi=$a['jumlahkursi'];
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kode_jenis;?></td>
                        <td><?php echo $nama_jenis;?></td>
                 
                
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $kode_jenis?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $kode_jenis?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah jenis Obat</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/obat_controler/tambah_obat'?>">
                <div class="modal-body">

					<!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Obat</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="id_obat" class="form-control" type="text" required>
                        </div>
						</div>
                    </div> -->

					<div class="form-group">
                        <label class="control-label col-xs-3" >Nama Jenis Obat</label>
                        <div class="col-xs-9">
						<div class="form-line">

                        <input type="text" name="nama_jenis" class="form-control">
                           <!-- <select name="nama_jenis" id="" class="form-control">
<option value="Pulvis (serbuk)">Pulvis (serbuk)</option>
<option value="Pulveres">Pulveres</option>
<option value="Tablet (compressi)">Tablet (compressi)</option>
<option value="Pil (pilulae)">Pil (pilulae)</option>
<option value="Kapsul (capsule)">Kapsul (capsule)</option>
<option value="Kaplet (kapsul tablet)">Kaplet (kapsul tablet)</option>
<option value="Larutan (solutiones)">Larutan (solutiones)</option>
<option value="Suspensi (suspensiones)">Suspensi (suspensiones)</option>
<option value="Emulsi (elmusiones)">Emulsi (elmusiones)</option>
<option value="Galenik">Galenik</option>
<option value="Ekstrak (extractum)">Ekstrak (extractum)</option>
<option value="Infusa">Infusa</option>
<option value="Imunoserum (immunosera)">Imunoserum (immunosera)</option>
<option value="Salep (unguenta)">Salep (unguenta)</option>
<option value="Suppositoria">Suppositoria</option>
<option value="Obat tetes (guttae)">Obat tetes (guttae)</option>
<option value="Injeksi (injectiones)">Injeksi (injectiones)</option>

                           
                           </select> -->

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
                        $kode_jenis=$a['kode_jenis'];
                        $nama_jenis=$a['nama_jenis'];
                     
                     
                    ?>
                <div id="modalEditPelanggan<?php echo $kode_jenis?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit jenis Obat</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/obat_controler/update_obat'?>">
                        <div class="modal-body">
                            <input name="kode_jenis" type="hidden" value="<?php echo $kode_jenis;?>">
						
                    <div class="form-group">
                    <label class="control-label col-xs-3" >Nama Jenis Obat</label>
                        <div class="col-xs-9"><div class="form-line">

                        <input type="text" class="form-control" name="nama_jenis" value="<?php echo $nama_jenis?>">
                               <!-- <select name="nama_jenis" class="form-control show-tick" required>
        <option value="">Pilih Sopir</option>
        <?php
        $jadwal=$this->db->query("select* from tb_jenis_obat");
        foreach($jadwal->result_array() as $i){
        $nama_jenis=$i['nama_jenis'];
        if($a['nama_jenis']==$i['nama_jenis']){
          $cek="selected";
        }
        else{
          $cek="";
          }

          echo"<option value='$nama_jenis' $cek>$nama_jenis</option>";

        }
        echo"</select>";
        ?> -->
                        </div></div>
                    </div> 
                    <!-- <div class="form-group">
                    <label class="control-label col-xs-3" >Plat No Obat</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="nama_jenis" class="form-control" type="text" placeholder="Nama obat..." value="<?php echo $nama_jenis;?>"  required>
                        </div></div>
                    </div>  -->

                 

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
                        $kode_jenis=$a['kode_jenis'];
                        $nama_jenis=$a['nama_jenis'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $kode_jenis?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus obat</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/obat_controler/hapus_obat'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kode_jenis" type="hidden" value="<?php echo $kode_jenis; ?>">
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
