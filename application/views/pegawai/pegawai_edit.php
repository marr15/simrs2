  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit
        <small>Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Dokter</li>
      </ol>
    </section>
    <?php foreach ($pegawai as $p) {
  
?>
  
        <div class="container">
   <form role="form" action="<?php echo base_url().'pegawaii/update_pegawai' ?>" method="post" enctype="multipart/form-data">
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
         <input type="hidden" name="id" value="<?php echo $p->id ?>">
        <input name="nama" type="text" class="form-control" value="<?php echo $p->nama ?>" /></td>
      </tr>
     <tr>
        <td><label for="alamat">Alamat</label></td>
        <td><input name="alamat" type="text" class="form-control" value="<?php echo $p->alamat ?>"  />
        </td>
      </tr>
      <tr>
        <td><label for="norek"> No Rek </label></td>
        <td><input name="norek" type="text" class="form-control" value="<?php echo $p->norek ?>" /></td>
      </tr>
      <tr>
        <td><label for="gaji">Gaji</label></td>
        <td><input name="gaji" type="text" class="form-control" value="<?php echo $p->gaji ?>"  /></td>
      </tr>

      <tr>
        <td><label for="golongan">Golongan</label></td>
        <td><input name="golongan" type="text" class="form-control"  value="<?php echo $p->golongan ?>"  /></td>
      </tr>
       
   <tr>
        <td><label for="agama">Agama</label></td>
        <td>
          <select name="agama" type="text" class="form-control">
        <option value="<?php echo $p->agama ?>" > -agama- </option>
          <option value="Islam"> Islam</option>
          <option value="Protestan"> Protestan</option>
          <option value="Katolik"> Katolik</option>
          <option value="Budha">Budhs</option>
          <option value="Hindu">Hindu</option>
          <option value="Kong Hu Cu"> Kong Hu Cu</option>

        </select> 
        </td>
      </tr>
      <tr>
        <td><label for="no_telpon">No Telepon</label></td>
        <td><input name="no_telpon" type="text" class="form-control"  value="<?php echo $p->no_telpon ?>" /></td>
      </tr>
      <tr>
        <td><input type="submit"  value="simpan" class="btn btn-sm btn-primary"/>&nbsp;<a href="<?php echo base_url().'pegawaii/d_pegawai' ?>" class="btn btn-sm btn-primary">Kembali</a></td>
        </tr>
      
      </table>
            </div>
            
        </div>
                 
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            </form>
          </div>
        <?php } ?>
      </div>
      </div>

