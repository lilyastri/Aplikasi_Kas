<?php

include "../library/koneksi.php";
include "fungsi.php";
include_once("tglindo.php");
?>
<?php


$tgl=date('Y-m-d');
$tglorder=$_POST['tanggal'];
$sql=mysql_query("select * from kas
where tgl like '$_POST[tanggal]%' and jenis='Masuk' order by kode asc") or die
(mysql_error());
?>


<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
 <body > 
 <h2 align="center" class="style2"><font color="White">Laporan Uang Masuk </h2>       
					<table width="100%">
					<tr>
					<td><div align="center">
					</td>
					</tr>
					</table>
                        </div>
						<form name="sda" role="form" method="post">
                        <div class="panel-body">
						 <div class="col-lg-12">
                        	<div class="row">
										   <div class="dataTable_wrapper"><font color="DarkRed">
                                <table width="100%" border="1"  class='table table-bordered table-striped'>
                                    <thead>
										<tr bgcolor='LightSalmon' align='center'>
                                            <th>No</th>
											<th>Tanggal</th>
                                            <th>Keterangan</th>
											<th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										$no1=1;
										$total=0;

										while($data=mysql_fetch_array($sql)){
										?>

										<tr>
											<td ><?php echo $no1; ?></td>
											<td><?php echo TanggalIndo($data['tgl']);?></td>
											 <td><?php echo $data['keterangan']; ?></td>
											 <td><?php echo  "Rp.".number_format($data['jumlah']).",-" ?></td>

										</tr>
										<?php
											$no1++;
											$total=$total+$data['jumlah'];
										}
										?>
										<Tr>
										<th colspan="3">Total Keseluruhaan</th>
										<Td colspan="1"><b>Rp.<?php echo number_format($total) ; ?>,-</b></td>
										</tr>
                                    </tbody>
                                </table>
                            </div>
							</div>
						  </div>

<br>
</form>

                            <!-- /.row (nested) -->
