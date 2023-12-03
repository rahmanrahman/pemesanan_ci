
<?php //Loading navbar.php
  $this->load->view('pengguna/templates/head');
?>

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Laporan Pemesanan</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Data Pemesanan</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Atas Nama</th>
													<th>Nama Proyek</th>
													<th>Tanggal</th>
													<th>Harga</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Atas Nama</th>
													<th>Nama Proyek</th>
													<th>Tanggal</th>
													<th>Harga</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
											<tbody>
											<tbody>
												 <?php
                  $no = 1;
                  foreach($detail as $dtl) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $this->session->userdata('nama'); ?></td>
                    <td><?php echo $dtl->nama_proyek ?></td>
                    <td><?php echo $dtl->tanggal ?></td>
                    <td><?php echo $dtl->harga ?></td>
                    <td>
                    	<div class="form-button-action">
														<a href="<?php echo base_url('Pengguna/Cetak_Laporan/'.$dtl->id)?>" class="btn btn-link btn-warning btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-print"></i>
                                                    </a>
															<a href="<?php echo base_url('Pengguna/Hapus_Pemesanan/'.$dtl->id)?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" onclick="javascript: return  confirm('Anda  yakin  hapus?')">
																<i class="fa fa-times"></i>
															</a>
															<a href="#modalDetail<?php echo $dtl->id?>" data-toggle="modal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
														
														</div>
                    </td>

                  </tr>
                  <?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			
		</div>





                  <?php
                  foreach($detail as $e) : ?>
<div class="modal fade" id="modalEdit<?php echo $e->id?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Edit Pemesanan
                </h1>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('Pengguna/Update_Pesanan'); ?>" method="post">
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Atas Nama</label>
                                <input type="hidden" name="id" value="<?php echo $e->id ?>">
                                <input id="an" type="text" class="form-control" placeholder="Nama" name="an" value="<?php echo $e->an?>">
                               
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label for="nama_proyek">nama proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" placeholder="Nama Proyek" name="nama_proyek" value="<?php echo $e->nama_proyek?>">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                 <label for="jenis">Jenis Pengecoran</label>
                    <select class="form-control" id="jenis" name="jenis">
                      <option value="<?php echo $e->jenis?>"><?php echo $e->jenis?></option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                 <label for="metode">metode Pengecoran</label>
                    <select class="form-control" id="metode" name="metode">
                      <option value="<?php echo $e->metode?>"><?php echo $e->metode?></option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $e->alamat; ?>" placeholder="<?php echo $e->alamat; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tanggal">tanggal</label>
                   <label for="tanggal">tanggal</label>
                    <input type="datetime-local" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" value="<?php echo $e->tanggal; ?>">
                            </div>
                        </div>
                    <div class="col-md-12">
                            <div class="form-group">
                               <label for="kontak">kontak</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" value="<?php echo $e->kontak; ?>" placeholder="<?php echo $e->kontak; ?>">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                 <label for="pembayaran">pembayaran</label>
                    <select class="form-control" id="pembayaran" name="pembayaran">
                      <option value="<?php echo $e->pembayaran?>"><?php echo $e->pembayaran?></option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                 <label for="kualitas">kualitas</label>
                    <select class="form-control" id="kualitas" name="kualitas">
                      <option value="<?php echo $e->kualitas?>" id="kualitas"><?php echo $e->kualitas?></option>
                      <option value="2" id="kualitas">2</option>
                      <option value="3" id="kualitas">3</option>
                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="volume">volume</label>
                    <input type="text" class="form-control" id="volume" name="volume" value="<?php echo $e->volume; ?>" placeholder="<?php echo $e->volume; ?>">
                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group">
                               <label for="harga">harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $e->harga; ?>" placeholder="<?php echo $e->harga; ?>" readonly>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" id="addRowButton" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

                  <?php
                  foreach($detail as $d) : ?>
<div class="modal fade" id="modalDetail<?php echo $d->id?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Detail Pemesanan
                </h1>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('Pengguna/Update_Pesanan'); ?>" method="post">
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Atas Nama</label>
                                <input type="hidden" name="id" value="<?php echo $d->id ?>">
                                <input id="an" type="text" class="form-control" placeholder="Nama" name="an" value="<?php echo $d->an?>" readonly>
                               
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label for="nama_proyek">nama proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" placeholder="Nama Proyek" name="nama_proyek" value="<?php echo $d->nama_proyek?>" readonly>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                 <label for="jenis">Jenis Pengecoran</label>
                    <select class="form-control" id="jenis" name="jenis" readonly >
                      <option value="<?php echo $d->jenis?>" readonly><?php echo $d->jenis?></option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                 <label for="metode">metode Pengecoran</label>
                    <select class="form-control" id="metode" name="metode" readonly>
                      <option value="<?php echo $d->metode?>" readonly><?php echo $d->metode?></option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $d->alamat; ?>" placeholder="<?php echo $d->alamat; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tanggal">tanggal</label>
                   <label for="tanggal">tanggal</label>
                    <input type="datetime-local" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" value="<?php echo $d->tanggal; ?>" readonly>
                            </div>
                        </div>
                    <div class="col-md-12">
                            <div class="form-group">
                               <label for="kontak">kontak</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" value="<?php echo $d->kontak; ?>" placeholder="<?php echo $d->kontak; ?>" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                 <label for="pembayaran">pembayaran</label>
                    <select class="form-control" id="pembayaran" name="pembayaran" readonly>
                      <option value="<?php echo $d->pembayaran?>" readonly><?php echo $d->pembayaran?></option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                 <label for="kualitas">kualitas</label>
                    <select class="form-control" name="kualitas" readonly>
                      <option value="<?php echo $d->kualitas?>" readonly><?php echo $d->kualitas?></option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="volume">volume</label>
                    <input type="text" class="form-control" name="volume" value="<?php echo $d->volume; ?>" placeholder="<?php echo $d->volume; ?>" readonly>
                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group">
                               <label for="harga">harga</label>
                    <input type="text" class="form-control" name="harga" value="<?php echo $d->harga; ?>" placeholder="<?php echo $d->harga; ?>" readonly>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>






<?php //Loading navbar.php
  $this->load->view('pengguna/templates/footer');
?>