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
        <li class="active">Edit Dokter</li>
      </ol>
    </section>
    <?php foreach ($dokter as $k) {
  
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
        <td><label for="nama">Nama Pasien</label></td>

        <td>
         <input type="hidden" name="id" value="<?php echo $k->id ?>">
        <input name="nama" type="text" class="form-control"  value="<?php echo $k->nama ?>"/></td>
      </tr>
      <tr>
        <td><label for="jk">Jenis Kelamin</label></td>
        <td><input name="alamat" type="text" class="form-control"   value="<?php echo $k->alamat ?>" ></td>
      </tr>
     <tr>
        <td><label for="alamat">alamat</label></td>
        <td><input name="alamat" type="text" class="form-control"   value="<?php echo $k->alamat ?>" ></td>
      </tr>
      <tr>
        <td><label for="no_hp">No Hp</label></td>
        <td><input name="no_hp" type="text" class="form-control"   value="<?php echo $k->no_hp?>"/></td>
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

