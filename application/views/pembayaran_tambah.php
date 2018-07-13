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
  
  
        <div class="container">
   <form role="form" action="<?php echo base_url().'pembayaran/tambah_pembayaran' ?>" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
              <div class="form-group row">
            <table class="table table-condensed">
    
      
      <tr>
        <td><label for="nama">Nama</label></td>

        <td>
         <input type="hidden" name="id" value="">
        <input name="nama" type="text" class="form-control"  /></td>
      </tr>
     <tr>
        <td><label for="tanggal">Tanggal</label></td>
        <td><input name="tanggal" type="text" class="form-control"  />
        </td>
      </tr>
      <tr>
        <td><label for="poli"> Poli </label></td>
        <td><input name="poli" type="text" class="form-control"  /></td>
      </tr>
     

       
   <tr>
        <td><label for="cara_bayar">Cara Bayar</label></td>
        <td>
          <select name="cara_bayar" type="text" class="form-control">
        <option value="" > -pilih- </option>
          <option value="BPJS"> BPJS</option>
          <option value="Umum"> Protestan</option>
          

        </select> 
        </td>
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
  
      </div>
      </div>

