<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>
  

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <h3>
             &nbsp;<i class="fa fa-table"></i> Table Data User
          </h3>
              
            <!-- /.box-header -->
            <div class="table-responsive ">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                <tr>
                  <th>No</th>
                  
                  <th>Username</th>
                  <th>Password</th>
                  <th>Hak Akses</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php

                foreach ($user as $k) {
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                   
                    <td><?php echo $k->username ?></td>
                    <td><?php echo $k->password ?></td>
                    <td><?php echo $k->hak_akses ?></td>
                    
                    <td>
                    
                  <a href="#" title="Detail">
                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                   <a href=" <?php echo base_url().'admin/edit_data/'.$k->id ?>" title="Edit Data" aria-expanded="false" aria-controls="collapseExample">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                      <a href="<?php echo base_url().'admin/hapus/'.$k->id ?>" title="Hapus Data" onclick="return confirm('Apakah anda yakin mau menghapus?')">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </td>
                  
                  </tr>
                  <?php $no++; ?>
                  <?php } ?>
                   </tbody>
              </table>
               <div class="text-right">
                  <div class="col-sm-12" align="pull-right">
                     

                    <p>
                      <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Tambah Data Admin
                      </button>
                    </p>
                    </div>
                  </div>
               
                    <div class="collapse" id="collapseExample">
                        <div class="box">
                        <div class="box-body">
                        <form role="form" action="<?php echo base_url('admin/aksi_tambah_admin') ?>" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="col-sm-1  control-label">Username</label>
                            <div class="col-md-2 ">
                              <input type="text" name="username" id="user" class="form-control" placeholder="Isi Username"  value="">
                            </div>
                            <label class="col-sm-1 control-label">Password</label>
                            <div class="col-md-2 ">
                              <input type="text" name="password" id="pass" class="form-control" placeholder="Isi Password" value=" ">
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-1 ">Status</label>
                                <div class="col-md-2 ">
                              <select name="status" class="form-control" required="required">
                                  <option value="">-Hak Akses-</option>
                                  <option value="frontof">Front Office</option>
                                  <option value="backof">Back Office</option>
                                  <option value="super_admin">Admin</option>
                                </select></td>
                              </div>
                            </div>
                              <button class="btn btn-primary" type="submit">Simpan</button>
                              <button class="btn btn-danger" type="button">Batal</button>
                          </div>
                          </div>
                          </div>
                        </form>
                      </div>
                   </div>

               </div>
            </div>
          </div>
        </div>
</div>
