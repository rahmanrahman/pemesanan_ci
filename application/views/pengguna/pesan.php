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
                    <form action="<?php echo base_url('Pengguna/Input_Pemesanan'); ?>" method="post">
                    <label for="an">Kwitansi Atas Nama</label>
                    <input type="text" class="form-control" id="an" name="an" value="<?php echo $this->session->userdata('nama');?>" placeholder="<?php echo $this->session->userdata('nama');?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="nama_proyek">nama proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" placeholder="Nama Proyek" name="nama_proyek">
                  </div>
                  <div class="form-group">
                    <label for="jenis">Jenis Pengecoran</label>
                    <select class="form-control" id="jenis" name="jenis">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="metode">Metode Pengecoran</label>
                    <select class="form-control" id="metode" name="metode">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>                  
                  <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $detail->alamat; ?>" placeholder="<?php echo $detail->alamat; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="tanggal">tanggal</label>
                    <input type="datetime-local" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal">
                  </div>
                  <div class="form-group">
                    <label for="kontak">kontak</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" value="<?php echo $detail->nomor_telepon; ?>" placeholder="<?php echo $detail->nomor_telepon; ?>" readonly>
                  </div> 
                  <div class="form-group">
                    <label for="pembayaran">pembayaran </label>
                    <select class="form-control" id="pembayaran" name="pembayaran">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kualitas">kualitas </label>
                    <select class="form-control" id="kualitas" name="kualitas">
                      <option value="1" id="kualitas">1</option>
                      <option value="2" id="kualitas">2</option>
                      <option value="3" id="kualitas">3</option>
                    </select>
                  </div>                                                      
                  <div class="form-group">
                    <label for="volume">volume</label>
                    <input type="text" class="form-control" id="volume" placeholder="volume" name="volume">
                  </div> 
                  <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" readonly>
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




<script src="<?php echo base_url('assets/dist')?>/js/core/jquery.3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#volume").keyup(function() {
            var volume = $("#volume").val();
            var kualitas = $("#kualitas").val();

            if(kualitas == 1){
            var harga = parseInt(volume) * 250000;
            $("#harga").val(harga);
          } else if(kualitas == 2){
            var harga =parseInt(volume) * 500000;
            $("#harga").val(harga);
          } else {
            var harga =parseInt(volume) * 1000000;
            $("#harga").val(harga);
          }

        });
    });
</script>


<?php //Loading navbar.php
  $this->load->view('pengguna/templates/footer');
?>