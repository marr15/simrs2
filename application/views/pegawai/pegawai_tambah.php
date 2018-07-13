<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrasi
        <small>Pasien</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Registrasi</li>
      </ol>
    </section>

<style type="text/css">
    .local {
        margin: 10px auto;
        width: 800px;
        padding: 10px;
        position: relative;
        border: 1px solid #ccc;
        
    }
  </style>
     <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Data Pasien </h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                   
                  
                  
                  
    <form action="<?php echo base_url().'pegawaii/simpan_pegawai'?>" method="post">
    <table class="table table-condensed">
    
      <tr>
        <td><label for="nama">Nama Pegawai</label></td>
        <td><input name="nama" type="text" class="form-control" /></td>
      </tr>
     <tr>
        <td><label for="alamat">Alamat</label></td>
        <td><input name="alamat" type="text" class="form-control" />
        </td>
      </tr>
      <tr>
        <td><label for="norek"> No Rek </label></td>
        <td><input name="norek" type="text" class="form-control" /></td>
      </tr>
      <tr>
        <td><label for="gaji">Gaji</label></td>
        <td><input name="gaji" type="text" class="form-control" /></td>
      </tr>

      <tr>
        <td><label for="golongan">Golongan</label></td>
        <td><input name="golongan" type="text" class="form-control"   /></td>
      </tr>
       
   <tr>
        <td><label for="agama">Agama</label></td>
        <td>
          <select name="agama" type="text" class="form-control">
        <option value=""> -agama- </option>
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
        <td><input name="no_telpon" type="text" class="form-control"  /></td>
      </tr>
      
    
        <tr>
        <td><input type="submit" value="Simpan Data"  class="btn btn-sm btn-primary"/>&nbsp;<a href="pendaftaran.php" class="btn btn-sm btn-primary">Kembali</a></td>
        </tr>
    </table>
    </form>
                   </div>
               
              </div> 
            </div>
          </div>
        
