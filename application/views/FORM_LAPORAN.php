
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <div class="panel panel-default">
          <div class="panel-body">
            <legend>Laporan</legend>
            <div class="row">
              

                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/clipboard.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Stok Obat</h3>
                  <p>Proses cetak laporan Stok Obat Pertanggal.</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_stok" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                  <input type="date" name="th" class="form-control">
                 <!--
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih hari -</option>
                  <option value="Sunday">Minggu</option>
                  <option value="Mondey">Senin</option>
                  <option value="Tuesday">Selasa</option>
                  <option value="Wednesday">Rabu</option>
                  <option value="Thursday">Kamis</option>
                  <option value="Friday">Jum'at</option>
                  <option value="Saturday">Sabtu</option>
           </select> -->
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>



 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'assets/img/icons/svg/map.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Penjualan perbulan </h3>
                  <p>Proses cetak penjualan perbulan .</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_penjualan_perbulan" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">

                 <input type="month" class="form-control" name="th">
         
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>
  
 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'assets/img/icons/svg/map.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Penjualan pertahun </h3>
                  <p>Proses cetak penjualan pertahun .</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_penjualan_pertahun" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">

                 <select data-toggle="select" name="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun -</option>
                      <?php
                      $now = date('Y');
                      for($a=2016;$a<=$now;$a++)
                      {
                        echo "<option value='$a'>$a</option>";
                      }
                      ?>
                    </select>
         
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>



 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'assets/img/icons/svg/map.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan barang masuk </h3>
                  <p>Proses cetak barang masuk perhari .</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_barangmasuk_perhari" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">

                 <input type="date" class="form-control" name="th">
                    <!-- <div class="col-lg-6">
                      <select data-toggle="select" name="bulan" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                              <option value="">- Pilih Bulan -</option>
                        <option value="01">Januari</option>
                          <option value="02">Februari</option>
                          <option value="03">Maret</option>
                          <option value="04">April</option>
                          <option value="05">Mai</option>
                          <option value="06">Juni</option>
                          <option value="07">Juli</option>
                          <option value="08">Agustus</option>
                          <option value="09">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                    </select>
                    </div>
                    <div class="col-lg-6">
                      <select data-toggle="select" name="tahun" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun -</option>
                      <?php
                      $now = date('Y');
                      for($a=2016;$a<=$now;$a++)
                      {
                        echo "<option value='$a'>$a</option>";
                      }
                      ?>
                    </select>
                    </div> -->
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>


  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/Book.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan barang masuk</h3>
                  <p>Proses cetak laporan barang masuk perbulan .</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_barangmasuk_perbulan" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                   <input type="month" class="form-control" name="th">
               
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/file-sharing.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan barang masuk </h3>
                  <p>Proses cetak laporan barang masuk pertahun.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/Laporan/lap_barangmasuk_pertahun" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                 <select data-toggle="select" name="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun -</option>
                      <?php
                      $now = date('Y');
                      for($a=2016;$a<=$now;$a++)
                      {
                        echo "<option value='$a'>$a</option>";
                      }
                      ?>
                    </select>
              
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>


              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap1.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan Kategori</h3>
                  <p>Proses cetak laporan Kategori.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_kategori_obat" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan jenis obat</h3>
                  <p>Proses cetak jenis obat.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_jenis_obat" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
            
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>

       

     




          






             
            
           

              

  