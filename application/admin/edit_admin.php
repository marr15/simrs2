  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit
        <small>Dokter</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit User</li>
      </ol>
    </section>
    <?php foreach ($user as $k) {
  
?>
  
        <div class="container">
   <form role="form" action="<?php echo base_url().'master/update_dokter' ?>" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
              <div class="form-group row">
            <table class="table table-condensed">
    
      
      <tr>
        <td><label for="username">Nama Pasien</label></td>

        <td>
         <input type="hidden" name="id" value="<?php echo $k->id ?>">
        <input name="username" type="text" class="form-control"  value="<?php echo $k->username ?>"/></td>
      </tr>
      <tr>
        <td><label for="password">Jenis Kelamin</label></td>
        <td><input name="password
        " type="text" class="form-control"   value="<?php echo $k->password ?>" ></td>
      </tr>
     
      <tr>
        <td><label for="hak_akses">No Hp</label></td>
        <td>

        <select name=hak_akses" class="form-control" required="required">
                <option value="">-Hak Akses-</option>
                <option <?php if($k->hak_akses == "frontof") {echo "selected";} ?> value="frontof">Front Office</option>
                <option <?php if($k->hak_akses == "backof") {echo "selected";} ?>  value="backof">Back Office</option>
                <option <?php if($k->hak_akses == "super_admin") {echo "selected";} ?>  value="admin">Admin</option>
                </select>
                </td>
                </tr>
      
      </table>
            </div>
            
        </div>
                 
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="cancel" class="btn btn-danger ">Cancel</button>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        <?php } ?>
      </div>
      </div>

