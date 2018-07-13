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
                <h3 class="panel-title"><i class="fa fa-user"></i> Isi Data Pasien </h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                   
                  
                  
                  
    <form action="<?php echo base_url().'pasien/tambah_pasien' ?>" method="post">
    <table class="table table-condensed">
    
      <tr>
        <td><label for="nama_pasien">Nama Pasien</label></td>
        <td><input name="nama_pasien" type="text" class="form-control" /></td>
      </tr>
     <tr>
        <td><label for="jk">Jenis Kelamin</label></td>
        <td><select name="jk" type="text" class="form-control">
        <option value=""> pilih </option>
          <option value="Perempuan"> Perempuan</option>
          <option value="Laki-laki"> Laki-laki</option>

        </select>  
        </td>
      </tr>
      <tr>
        <td><label for="tempat_lahir">Tempat Lahir</label></td>
        <td><input name="tempat_lahir" type="text" class="form-control" /></td>
      </tr>
      <tr>
        <td><label for="tgl_lahir">Tanggal Lahir</label></td>
        <td><input name="tgl_lahir" type="date" class="form-control" /></td>
      </tr>

      <tr>
        <td><label for="usia">Usia</label></td>
        <td><input name="usia" type="text" class="form-control"   /></td>
      </tr>
       
   <tr>
        <td><label for="alamat">Alamat Pasien</label></td>
        <td><input name="alamat" type="text" class="form-control"  /></td>
      </tr>
      <tr>
        <td><label for="status">Status</label></td>
        <td><input name="status" type="text" class="form-control"  /></td>
      </tr>
      <tr>
        <td><label for="pekerjaan">Pekerjaan</label></td>
        <td><input name="pekerjaan" type="text" class="form-control"  ]/></td>
      </tr>
      <tr>
        <td><label for="no_telpon">No Telepon</label></td>
        <td><input name="no_telpon" type="text" class="form-control"  /></td>
      </tr>
      <tr>
        <td><label for="agama">Agama</label></td>
        <td>
          <select name="agama" type="text" class="form-control">
        <option value=""> pilih </option>
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
        <td><label for="suku">Suku</label></td>
        <td><input name="suku" type="text" class="form-control"   /></td>
      </tr>

       
      <tr>
        <td><label for="no_bpjs">No BPJS</label></td>
        <td><input name="no_bpjs" type="text" class="form-control" /></td>
      </tr>

       <input type="hidden" name="tgl" >
        <input type="hidden" name="gol_pas" >
         <input type="hidden" name="gol_askes" >
          <input type="hidden" name="no_askes" >
          <input type="hidden" name="kesmas" >
           <input type="hidden" name="kesda" >
            <input type="hidden" name="ruangan" >
             <input type="hidden" name="kelas" >
              <input type="hidden" name="kamar" >
               <input type="hidden" name="dokter" >
                <input type="hidden" name="diagnosa" >
                 <input type="hidden" name="biaya" >
                  <input type="hidden" name="detail" >
                   <input type="hidden" name="poli" >
      
        <tr>
        <td><input type="submit" value="Submit" class="btn btn-sm btn-primary"/>&nbsp;<a href="pendaftaran.php" class="btn btn-sm btn-primary">Kembali</a></td>
        </tr>
    </table>
    </form>
                   </div>
               
              </div> 
            </div>
          </div>
        
