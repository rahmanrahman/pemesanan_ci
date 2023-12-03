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
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $detail->id?>">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $this->session->userdata('nama');?>" placeholder="<?php echo $this->session->userdata('nama');?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="password">password</label>
                    <input type="text" class="form-control" id="password" placeholder="password" name="password" value="<?php echo $detail->password?>" >
                  </div>
                          
                  <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $detail->alamat; ?>" placeholder="<?php echo $detail->alamat; ?>" >
                  </div>
                  
                  <div class="form-group">
                    <label for="nomor_telepon">nomor_telepon</label>
                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $detail->nomor_telepon; ?>" placeholder="<?php echo $detail->nomor_telepon; ?>" >
                  </div> 
                                                           
                  <div class="form-group">
                    <label for="npwp">npwp</label>
                    <input type="text" class="form-control" id="npwp" placeholder="npwp" name="npwp" >
                  </div> 
                  <div class="form-group">
                    <label for="ktp">ktp</label>
                    <input type="text" class="form-control" id="ktp" placeholder="ktp" name="ktp" >
                  </div> 

                </div>
                <div class="card-action">
                  <button class="btn btn-success" type="submit">Submit</button>
                                  </form>
                  <button class="btn btn-danger" type="reset">Cancel</button>

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