<div align="right">
 <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah obat</a></div>&nbsp -->
 <a href="<?php echo base_url('Data_obat_controller/form_obat')?>" class="btn btn-sm btn-primary" >Tambah obat</a></div>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data obat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                     
                                    <th>Kode obat</th>
                                    <th>Pemasok</th>
                                    <th>Jenis Obat</th>
									<th>Nama obat</th>
									<th>Harga</th>
                                    <th>Stok</th>
                                 
                                    <th>Kategori</th>
                                    <th>Tanggal expired</th>
                                    <th>Status expired</th>
                             
                                 
                                   

									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kode_obat;?></td>
                        <td><?php echo $pemasok;?></td>
                        <td><?php echo $jenis_obat;?></td>
                        <td><?php echo $nama_obat;?></td>
                        <td><?php echo $harga;?></td>
                        <td><?php echo $stok;?></td>
                        <td><?php echo $kategori;?></td>
                        <td><?php echo $tanggal_expired;?></td>

                        <td><?php


$awal  = strtotime(date("Y-m-d"));
$akhir = strtotime($tanggal_expired); // waktu sekarang
$diff  =$akhir - $awal;
$hari= floor($diff / (60 * 60 * 24));
    // $awal = new DateTime(date("Y-m-d"));
    // $akhir = new DateTime($tanggal_expired);
    // $diff = $akhir->diff($awal)->days + 1;
   


$tgl_now=date("Y-m-d");
$tgl_exp="$tanggal_expired";//tanggal expired


if ($tgl_now >=$tgl_exp )
{
 echo"  <button class='btn btn-danger' title='EXPIRED'>
 </i>  EXPIRED</button>";
}
else
echo  "  <button class='btn btn-primary' title='MASIH BERLAKU'>
</i>  EXPIRED   $hari Hari Lagi </button>";
{
?>
<!--ISIKAN SCRIPT INDEXNYA DISINI-->
<?php
}
?></td>
                       
                            
                  
                     
                        
                        <td style="text-align:center;">
                        <a class="btn btn-xs btn-info" href="<?php echo site_url('Data_obat_controller/form_edit_data_obat/'.$kode_obat)?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                        <!-- <a class="btn btn-xs btn-info btn-circle" href="<?php echo base_url() .'index.php/Data_obat_controller/faktur/'.$kode_obat;?>" data-toggle="modal" title="cetak" target="_blank" ><span class="fa fa-print"></span> </a> -->
                            <a class="btn btn-xs btn-danger" href="#modalHapusobat<?php echo $kode_obat?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
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
                        $jenis_obat=$a['jenis_obat'];
                    ?>
                <div id="modalHapusobat<?php echo $kode_obat?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus obat</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Data_obat_controller/hapus_data_obat'?>">
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

     <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/rupiah.js'?>"></script>
 
  



    <!-- /.container -->
	
           
</script>
    </section>
