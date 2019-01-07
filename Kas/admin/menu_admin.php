       	   <div id="left">
	   
            <ul id="menu" class="collapse" >
                <li class="panel active"><a href="start.php"><i class="icon-home"></i> Dashboard</a></li>
                <li><a href="?menu=kas_masuk"><i class="icon-paper-clip"> </i> Kas Masuk</a></li>
                <li><a href="?menu=kas_keluar"><i class="icon-paper-clip"></i> Kas Keluar</a></li>
                <li><a href="?menu=rekapitulasi"><i class="icon-paper-clip"></i> Kas Rekapitulasi</a></li>
                <li><a href="?menu=cetakpertanggal_masuk"><i class="icon-paper-clip"></i> Laporan Kas Masuk</a></li>
                <li><a href="?menu=cetakpertanggal_keluar"><i class="icon-paper-clip"></i> Laporan Kas Keluar</a></li>
                <!-- <li><a href="?menu=laporanrekapitulasi"><i class="icon-paper-clip"></i> Laporan Rekapitulasi</a></li> -->

                <!-- <li><a href="?menu=user"><i class="icon-user "></i> Daftar User</a></li> -->
            </ul>
        </div>
		<div id="content">

                    <div class="col-lg-12">
			<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">

					<tr>
					<tr bgcolor='LightSalmon' align='center' >
					<th><h2><center> "My Money Activity" </center></h2></th>
					</tr>

				</table>
					
					
					<!--<h1>
					<span><center>Uangku Tabunganku</center></span>
					</h1> -->
						<!-- <h1>Uangku Tabunganku</h1> -->
                    </div>
                <hr/>
                 <!--BLOCK SECTION -->

                    <div class="col-lg-12">
						<?php
						if($_GET["menu"]){
							include_once("load.php");
						}else{
							echo "<div class='col-lg-12'>
										<div class='panel panel-default'>
												<div class='tab-content'>
													<div class='tab-pane fade in active' id='home' style='text-align:center;'>
													<h4> 
													Hello guys..... Selamat datang di ''My Pocket Apps''
													<br/>
													<br/>
													Nikmati kemudahan pengelolaan uangmu dengan aplikasi ini :>
													<br/>
													 </h4>
													<br/>
                          <image src='../img/nabung.jpg' style='width:200px;height:200px;'>";
						}
						?>
					</div>
					<br/>
					<footer class="main-footer">
					<br/>
        <marquee>*** Uang Bukanlah Segalanya, Tapi Segalanya Membutuhkan Uang ***</marquee>
		</footer>
		</br>
		
                </div>
                  <!--END BLOCK SECTION -->
            </div>
        </div>
