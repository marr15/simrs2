  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit
        <small>spesialis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit spesialis</li>
      </ol>
    </section>
    <?php foreach ($spesialis as $k) {
  
?>
  
        <div class="container">
   <form role="form" action="<?php echo base_url().'master/update_spesialis' ?>" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
              <div class="form-group row">
            <table class="table table-condensed">
    
      
      <tr>
        <td><label for="nama">Spesialis</label></td>

        <td>
         <input type="hidden" name="id" value="<?php echo $k->id ?>">
        <input name="nama" type="text" class="form-control"  value="<?php echo $k->nama ?>"/></td>
      </tr>
     
    <tr>
        <td><input type="submit"  value="simpan" class="btn btn-sm btn-primary"/>&nbsp;<a href="<?php echo base_url().'master/d_spesialis' ?>" class="btn btn-sm btn-primary">Kembali</a></td>
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



