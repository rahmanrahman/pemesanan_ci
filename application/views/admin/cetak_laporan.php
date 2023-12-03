
<?php //Loading navbar.php
  $this->load->view('admin/templates/head_cetak');
?>

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Laporan</h4>
                                    
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
                  $total = 0;
                  $total1 = 0;
                  foreach($pesan as $dtl) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dtl->an ?></td>
                    <td><?php echo $dtl->nama_proyek ?></td>
                    <td><?php echo $dtl->tanggal ?></td>
                    <td><?php echo $dtl->harga ?></td>
                    

                  </tr>
                  <?php $total = $dtl->harga ; ?>
                  <?php $total1 += $total ; ?> 
                  <?php endforeach; ?>

											</tbody>
                                            <tr>
                                                <td>Total Pembelian : </td>
                                                <td>:</td>
                                                <td>Rp. <?php echo $total1 ?>
                                                  
                                                    </td>
                                            </tr>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			
		</div>





<?php //Loading navbar.php
  $this->load->view('admin/templates/footer');
?>