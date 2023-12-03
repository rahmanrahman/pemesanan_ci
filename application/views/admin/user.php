
<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>

    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Data Pengguna</h4>

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">User</h4><br>
                  <a href="#modalAdd" data-toggle="modal" title="" class="btn btn-primary btn-md" data-original-title="Edit Task">
                                                        Buat Akun
                                                    </a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Password</th>
                          <th>Alamat</th>
                          <th>Nomo Telepor</th>
                          <th>npwp</th>
                          <th>ktp</th>
                          <th>aksi</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Password</th>
                          <th>Alamat</th>
                          <th>Nomo Telepor</th>
                          <th>npwp</th>
                          <th>ktp</th>
                          <th>aksi</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      <tbody>
                         <?php
                  $no = 1;
                  foreach($user as $dtl) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dtl->nama ?></td>
                    <td><?php echo $dtl->password ?></td>
                    <td><?php echo $dtl->alamat ?></td>
                    <td><?php echo $dtl->nomor_telepon ?></td>
                    <td><?php echo $dtl->npwp ?></td>
                    <td><?php echo $dtl->ktp ?></td>
                    <td>
                      <div class="form-button-action">
                            <a href="#modalEdit<?php echo $dtl->id?>" data-toggle="modal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                              <a href="<?php echo base_url('Admin/Hapus_User/'.$dtl->id)?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" onclick="javascript: return  confirm('Anda  yakin  hapus?')">
                                <i class="fa fa-times"></i>
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



<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Tambah User
                </h1>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('Admin/Tambah_User'); ?>" method="post">
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Atas Nama</label>
                                <input id="nama" type="text" class="form-control" placeholder="Nama" name="nama" >                               
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label for="password">password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                   <label for="nomor_telepon">nomor_telepon</label>
                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
                            </div>
                        </div>
                    <div class="col-md-12">
                            <div class="form-group">
                               <label for="npwp">npwp</label>
                    <input type="text" class="form-control" id="npwp" name="npwp">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="ktp">ktp</label>
                    <input type="text" class="form-control" id="ktp" name="ktp">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" id="addRowButton" class="btn btn-primary">Kirim</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>


                  <?php
                  foreach($user as $e) : ?>
<div class="modal fade" id="modalEdit<?php echo $e->id?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Edit User
                </h1>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('Admin/Update_User'); ?>" method="post">
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Atas Nama</label>
                                <input type="hidden" name="id" value="<?php echo $e->id ?>">
                                <input id="nama" type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $e->nama?>">
                               
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label for="password">password</label>
                    <input type="password" class="form-control" id="password" placeholder="Nama Proyek" name="password" value="<?php echo $e->password?>">

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
                                <label for="nomor_telepon">nomor_telepon</label>
                   <label for="nomor_telepon">nomor_telepon</label>
                    <input type="text" class="form-control" id="nomor_telepon" placeholder="nomor_telepon" name="nomor_telepon" value="<?php echo $e->nomor_telepon; ?>">
                            </div>
                        </div>
                    <div class="col-md-12">
                            <div class="form-group">
                               <label for="npwp">npwp</label>
                    <input type="text" class="form-control" id="npwp" name="npwp" value="<?php echo $e->npwp; ?>" placeholder="<?php echo $e->npwp; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="ktp">ktp</label>
                    <input type="text" class="form-control" id="ktp" name="ktp" value="<?php echo $e->ktp; ?>" placeholder="<?php echo $e->ktp; ?>">
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








<?php //Loading navbar.php
  $this->load->view('admin/templates/footer');
?>