<?php //Loading navbar.php
  $this->load->view('pengguna/templates/head');
?>




    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Pemesanan</h4>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Pemesanan</div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <form action="<?php echo base_url('Pengguna/Update_User'); ?>" method="post">
                    <label for="an">Nama</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $detail->id?>" readonly>
                    <input type="text" class="form-control" id="an" name="an" value="<?php echo $this->session->userdata('nama');?>" placeholder="<?php echo $this->session->userdata('nama');?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="password">nama proyek</label>
                    <input type="text" class="form-control" id="password" placeholder="password" name="password" value="<?php echo $detail->password?>" readonly>
                  </div>
                          
                  <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $detail->alamat; ?>" placeholder="<?php echo $detail->alamat; ?>" readonly>
                  </div>
                  
                  <div class="form-group">
                    <label for="nomor_telepon">nomor_telepon</label>
                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $detail->nomor_telepon; ?>" placeholder="<?php echo $detail->nomor_telepon; ?>" readonly>
                  </div> 
                                                           
                  <div class="form-group">
                    <label for="npwp">npwp</label>
                    <input type="text" class="form-control" id="npwp" placeholder="npwp" name="npwp" value="<?php echo $detail->npwp?>" readonly>
                  </div> 
                  <div class="form-group">
                    <label for="ktp">ktp</label>
                    <input type="text" class="form-control" id="ktp" placeholder="ktp" name="ktp" value="<?php echo $detail->ktp?>" readonly>
                  </div> 

                </div>
               
              </div>

            </div>

          </div>
        </div>
      </div>
      
    </div>


<?php //Loading navbar.php
  $this->load->view('pengguna/templates/footer');
?>