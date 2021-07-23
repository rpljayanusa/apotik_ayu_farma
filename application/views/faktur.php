<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Faktur </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <body onload="window.print()">
    <link rel="stylesheet" href="<?php echo base_url('asset/cetak.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:700px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<tr>

   
          <td width="90" rowspan="3" align="center"><img src="<?php echo base_url().'assets/logo_ayu.png'?>" style="width:90px;height:90px"></td>  
         
          </div></td>
          <!--<td width="90" rowspan="3" align="center"><img src="<?php echo base_url().'assets/logo.'?>" style="width:90px;height:90px"></td>
        -->
        </tr>
         <td align="center">

			<font color="black" face="Times New Roman" size="5"><b><h2>APOTEK AYU FARMA</h2></b></font>
          	<h5>PASAR DURIAN KILANGAN, KINALI KAB PASAMAN BARAT, SUMATERA BARAT  </h5> 

			<h5>Telp.0751-28984 / Email : www.apotekayufarma.ac.id</h5>

 <!-- <td width="90" rowspan="3" align="center"><img src="<?php echo base_url().'assets/logo_ayu.png'?>" style="width:90px;height:90px"></td> -->
          </td>
     
</tr>
</table>



                       
</table>
<?php 
    $b=$tampil->row_array();
?>
<table border="0" align="center" style="width:700px;border:none;">
        <tr>
            <th style="text-align:left;">No Faktur</th>
            <th style="text-align:left;">: <?php echo $b['kode_transaksi'];?></th>
            <th style="text-align:left;">Harga</th>
          
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['harga_jual']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Tanggal</th>
            <th style="text-align:left;">: <?php echo $b['tanggal'];?></th>
            <th style="text-align:left;">Tunai</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['bayar']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Nama obat</th>
            <th style="text-align:left;">: <?php echo $b['nama_obat'];?></th>
            <th style="text-align:left;">Kembalian</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['kembalian']).',-';?></th>
        </tr>
</table>

<table border="1" align="center" style="width:700px;margin-bottom:20px;">
<thead>

    <tr>
        <th style="width:50px;">No</th>
        <th>Faktur</th>
        <th>nama obat</th>
        <th>stok</th>
        
        <th>jumlah bayar</th>
        <th>kembalian</th>
        <th>Subtotal</th>
    </tr>
</thead>
<tbody>
<?php 
$jumlah = 0;
$no=0;
    foreach ($tampil->result_array() as $i) {
        $no++;
        $jumlah += $i['total'];
        
        $kode_transaksi=$i['kode_transaksi'];
        $nama_obat=$i['nama_obat'];
        
        $stok=$i['stok'];
       $total=$i['total'];
        $bayar=$i['bayar'];
        $kembalian=$i['kembalian'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:center;"><?php echo $kode_transaksi;?></td>
        <td style="text-align:center;"><?php echo $nama_obat;?></td>
        <td style="text-align:center;"><?php echo $stok;?></td>
     
      
        <td style="text-align:center;"><?php echo 'Rp '.number_format($bayar);?></td>
        <td style="text-align:center;"><?php echo 'Rp '.number_format($kembalian);?></td>
           <td style="text-align:center;"><?php echo 'Rp '.number_format($total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="6" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:center;"><b><?php echo 'Rp '.number_format($jumlah);?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Padang, <?php echo date('d-M-Y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="right">( <?php echo $this->session->userdata('ses_nama');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>