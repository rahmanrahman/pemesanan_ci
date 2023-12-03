<?php //Loading navbar.php
  $this->load->view('pengguna/templates/head_cetak');
?>

  <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header text-center">
                  <h4 class="page-title">SURAT PESANAN(SO)</h4>
                  <h4 class="card-title"><b>PENGADAAN BETON READYMIX</b></h4>
                  <h5 class="card-title">NOMOR SALES ORDER</h5>
                  <h6 class="card-title"><b>SO000<?php echo $detail->id?></b></h6>
                </div>
                <div class="card-body">
                  <h4 class=""><b>Mohon dikirimkan Beton Readymix untuk :</b></h4>
                <table class="table"> 
                  <tr> 
                    <th>Nama Costumer</th>
                    <td>:</td>
                    <td><?php echo $detail->an ?></td> 
                  </tr> 
                  <tr> 
                    <th>Alamat</th> 
                    <td>:</td>
                    <td><?php echo $detail->alamat ?></td> 
                  </tr> 
                  <tr> 
                    <th>No. Telepon/HP</th> 
                    <td>:</td>
                    <td><?php echo $detail->kontak ?></td> 
                  </tr> 
                </table>
                 <h4 class=""><b>Beton Readymix dikirim ke :</b></h4>
                <table class="table"> 
                  <tr> 
                    <th>Nama Proyek</th> 
                    <td>:</td>
                    <td><?php echo $detail->nama_proyek ?></td> 
                  </tr> 
                  <tr> 
                    <th>Jenis Pengecoran</th> 
                    <td>:</td>
                    <td><?php echo $detail->jenis ?></td> 
                  </tr>
                  <tr> 
                    <th>Metode Pengecoran</th> 
                    <td>:</td>
                    <td><?php echo $detail->metode ?></td> 
                  </tr>
                  <tr> 
                    <th>Alamat Proyek</th> 
                    <td>:</td>
                    <td><?php echo $detail->alamat ?></td> 
                  </tr>
                  <tr> 
                    <th>Tanggal Pelaksanaan</th> 
                    <td>:</td>
                    <td><?php echo $detail->tanggal ?></td> 
                  </tr>
                  <tr> 
                    <th>Contact Person</th> 
                    <td>:</td>
                    <td><?php echo $detail->kontak ?></td> 
                  </tr>
                </table>
                <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kualitas</th>
                          <th>Volume</th>
                          <th>Harga</th>
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Kualitas</th>
                          <th>Volume</th>
                          <th>Harga</th>
                         
                        </tr>
                      </tfoot>
                      <tbody>
                      <tbody>
                  <tr>
                    <td>1</td>
                    <td><?php echo $detail->kualitas ?></td>
                    <td><?php echo $detail->volume ?></td> 
                     <td><?php echo $detail->harga ?></td>
</tr></tbody></tbody>
</table>
<p>Persyaratan Penjualan</p>
<p>1. Untuk setiap penambahan Slum dikenakan biaya tambahan Rp.50.000,00</p>
<p>2. Harga diatas adalah harga saat ini dan dapat berubah terhadap bahan baku</p>
<p>3. Pembayaran dilakukan atau transfer ke Bank Mandiri No. Rekening X an PT. Zein Baheera</p>
<p>4. Pengiriman minimal 4 m3, kurang dari minimum dikenakan biaya tambahan operasional</p>
<p>5. Test terhadap benda uji yang dilakukan diluar lab Zebe beton, biaya menjadi tanggung jawab pembeli</p>
<p>6. Kwitansi dibuat dengan sesuai yang tercantum diatas</p>
<p>7. Surat Pengadaan atau SO ini sebagai  dasar pengadaan dan pengiriman Beton dan penagihan atas nama bersangkutan</p>
<table class="table text-center">
  <tr>
    <th >Ditandatangani, Purwakarta <?php echo date('Y-m-d') ?><br>
    Pihak Pembeli</th>
    <th>Pihak Penjual</th>
  </tr>
    <tr>
    <td><br><br><br><br><br><?php echo $detail->an?></td>
    <td><br><br><br><br><br>ADE KRISNA</td>


  </tr>
</table>






              </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      
    </div>
  <!-- /.content-wrapper -->












