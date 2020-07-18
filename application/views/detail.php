
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                         
                    </div>
                    <?php foreach ($data->result() as $row) {
                        # code...
                    } ?>

                    <center>DATA ANGGOTA</center>
                    <br>
                    <hr>
                    <center>BIODATA</center>
                    <hr>
                    <table width="30%">
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><?php echo $row->nik ?></td>
                        </tr>
                         <tr>
                            <td>NO KK</td>
                            <td>:</td>
                            <td><?php echo $row->no_kk ?></td>
                        </tr>
                         <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><?php echo $row->nama_lengkap ?></td>
                        </tr>
                         <tr>
                            <td>Tempat Tgl Lahir</td>
                            <td>:</td>
                            <td><?php echo $row->ttl ?></td>
                        </tr>
                         <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $row->alamat ?></td>
                        </tr>
                         <tr>
                            <td>RT / RW</td>
                            <td>:</td>
                            <td><?php  ?></td>
                        </tr>
                         <tr>
                            <td>Kecamatan</td>
                            <td>:</td>
                            <td><?php echo $row->kecamatan ?></td>
                        </tr>
                         <tr>
                            <td>Jumlah Anak</td>
                            <td>:</td>
                            <td><?php echo $row->jumlah_anak ?></td>
                        </tr>
                         <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $row->email ?></td>
                        </tr>
                         <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php echo $row->status ?></td>
                        </tr>
                         <tr>
                            <td>No HP</td>
                            <td>:</td>
                            <td><?php echo $row->no_hp ?></td>
                        </tr>
                         <tr>
                            <td>Media Sosial</td>
                            <td>:</td>
                            <td><?php echo $row->media_sosial ?></td>
                        </tr>
                    </table>
                     <hr>
                    <center>PENDIDIKAN FORMAL</center>
                    <hr>
                    <?php echo $row->pendidikan_formal; ?>
                     <hr>
                    <center>PENDIDIKAN NONFORMAL</center>
                    <hr>
                    <?php echo $row->pendidikan_nonformal; ?>
                     <hr>
                    <center>PEKERJAAN</center>
                    <hr>
                    <?php echo $row->pekerjaan; ?>
                     <hr>
                    <center>PENGALAMAN KERJA</center>
                    <hr>
                    <?php echo $row->pengalaman_kerja; ?>
                     <hr>
                    <center>PENGALAMAN ORGANISASI</center>
                    <hr>
                    <?php echo $row->pengalaman_organisasi; ?>
                     <hr>
                    <center>BIDANG USAHA / LEMBAGA YANG DI KELOLA</center>
                    <hr>
                    <?php echo $row->bidang_usaha; ?>
                     <hr>
                    <center>AFILASI POLITIK</center>
                    <hr>
                    <?php echo $row->afiliasi_politik; ?>
                     <hr>
                    <center>KEANGGOTAAN</center>
                    <hr>
                    <?php echo $row->keanggotaan; ?>
                     <hr>
                    <center>JENJANG KODERISASI</center>
                    <hr>
                    <?php echo $row->jenjang_kaderisasi; ?>
                     <hr>
                    <center>JABATAN STRUKTURAL</center>
                    <hr>
                    <?php echo $row->jabatan_struktural; ?>
                </div> 
                 <!-- /. ROW  -->
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    