
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<body onload="window.print()">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan kategori obat </title>
</head>
<link href="<?php echo base_url().'asset/cetak.css';?>" rel="stylesheet" type="text/css" /><body >
<br>
<br>
<?php 
    $b=$cth->row_array();

?>
<div id="page-SP">
<table align="center" width="70%" style="border-collapse:collapse" border="1">
<tr><td><br>

	<table align="center" width="696" border="0" cellpadding="0" cellspacing="0">
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
      </table>
   	<table align="center" width="97%" border="0">
		<tr><td colspan="5"><hr></td></tr>
		<tr>
			<td colspan="5" align="center"><u><h3>LAPORAN KATEGORI</h3></u></td>
		</tr>
		<!--
		<tr>
			<td colspan="5" align="center"><h2>Tahun  2019/2020</h2></td>
		</tr>-->

<tr>
<td> <b>Periode : 

	  <?php if ($b == null){echo '<p>Tidak Ada Data</p>';}else{?>
                                   <?php echo date("d F Y");?>
                                <?php }?>
                                </b> </td>
				 </tr>
				 
			
		<table  align="center" width="1200px" style="border-collapse:collapse" border="1">
			<thead>
				<tr>
				<th bgcolor="#CCCCCC">No</th>
	
									
									<th bgcolor="#CCCCCC">Kode kategori</th>
									<th bgcolor="#CCCCCC">Kategori</th>
                                    <th bgcolor="#CCCCCC">Keterangan</th>
									
                                   
				
					
				</tr>
			</thead>
			<tbody>
				<tr>



					<?php
						
						$jumlah = 0;
						$nomor=0;
					foreach ($cth->result_array() as $a) {
						$nomor++;
						$kode=$a['kode'];
                        $kategori=$a['kategori'];
                        $keterangan=$a['keterangan'];

						
					?>

					<td><center><?php echo $nomor; ?></center></td>
					<td><?php echo $kode;?></td>
                        <td><?php echo $kategori;?></td>
                        <td><?php echo $keterangan;?></td>


           
      
				</tr>
				<?php } ?>
				 <!-- <tr>
        <td colspan="9" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($jumlah);?></b></td>
    </tr> -->
     
			</tbody>
			<table align="center" width="97%" style="border-collapse:collapse" border="0">
			<tr>
				<td colspan="3" align="right" width="75%">&nbsp;</td>
				<td align="left" colspan="2">Padang, <?php echo date('d M Y')?></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="4" align="right"></td>
				<td colspan="2">Admin ,</td>
			</tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="3" rowspan="5" align="right"></td>
				<td align="left" colspan="2"><b></b></td>
			</tr>
			<tr>
				<td align="left" colspan="2"><b><?php echo $this->session->userdata('ses_nama');?></b></td>
			</tr>
		</table>
		</table>
	</table>
</br>
</td>
</tr>
</table>
</div>
</body>
</html>