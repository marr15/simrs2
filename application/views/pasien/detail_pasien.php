  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Riwayat
        <small>Medis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pasien</li>
      </ol>
    </section>
<?php foreach ($data_pasien as $k) {
  
?>

<div class="container">
   <form role="form" action="<?php echo base_url().'pasien/update_pasien' ?>" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">DATA REKAM MEDIK </h3>
            </div>
            <div class="panel-body">
              <div class="form-group row">
            <table class="table table-condensed">
    
      
      <tr>
        <td><label for="nama_pasien">Nama Pasien</label></td>
        <td><input name="nama_pasien" type="text" class="form-control"  value="<?php echo $k->nama_pasien ?>"/></td>
      </tr>
     <tr>
        <td><label for="jk">Jenis Kelamin</label></td>
        <td><input name="jk" type="text" class="form-control"   value="<?php echo $k->jk ?>" ></td>
      </tr>
      <tr>
        <td><label for="tempat_lahir">Tempat Lahir</label></td>
        <td><input name="tempat_lahir" type="text" class="form-control"   value="<?php echo $k->tempat_lahir ?>"/></td>
      </tr>
      <tr>
        <td><label for="tgl_lahir">Tanggal Lahir</label></td>
        <td><input name="tgl_lahir" type="date" class="form-control"   value="<?php echo $k->tgl_lahir ?>"/></td>
      </tr>

      <tr>
        <td><label for="usia">Usia</label></td>
        <td><input name="usia" type="text" class="form-control"   value="<?php echo $k->usia ?>"/></td>
      </tr>
      </table>
            </div>
            
        </div>



<div class="container">
<div class="box ">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-block " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div align="left" style="color: white;">Detail Biodata Pasien</div>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">

      <div class="card-body">
        <div class="panel-body">
              <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Nama</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="id" value="<?php echo $k->nama_pasien?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">J.Kelamin</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <select name="jk" type="text" class="form-control">
                        <option value="<?php echo $k->jk ?>"> pilih </option>
                          <option value="Perempuan"> Perempuan</option>
                          <option value="Laki-laki"> Laki-laki</option>

                   </select>  

                    
                    </div>
              </div>
              

              <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Alamat</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="alamat" value="<?php echo $k->alamat?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">No Telepon</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="no_telpon" value="<?php echo $k->no_telpon ?>">
                    </div>
              </div>

              <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Tempat Lahir</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="tempat_lahir" value="<?php echo $k->tempat_lahir?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Usia</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="usia" value="<?php echo $k->usia ?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Status</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="status" value="<?php echo $k->status ?>">
                    </div>

              </div>


              <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Tanggal Lahir</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="tgl_lahir" value="<?php echo $k->tgl_lahir?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Agama</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="agama" value="<?php echo $k->agama ?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Suku</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="suku" value="<?php echo $k->suku ?>">
                    </div>
                    
              </div>


               <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12"> Pekerjaan</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="pekerjaan" value="<?php echo $k->pekerjaan?>">
                    </div>
                    
                    </div>


                     <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Gol Pasien</label>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="g" value="<?php echo $k->gol_pas?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Gol Askes</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="gol_askes" value="<?php echo $k->gol_askes?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">No Jamkesmaas</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="kesmas" value="<?php echo $k->kesmas?>">
                    </div>
                    
              </div>


               <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">No BPJS</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="no_bpjs" value="<?php echo $k->no_bpjs?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Gol No Askes</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="no_askes" value="<?php echo $k->no_askes?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">No Jamskesda</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="kesda" value="<?php echo $k->kesda?>">
                    </div>
                    
              </div>
                    
              </div>

             
            </div>
       
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <div align="left" style="color: white;">Rawat Inap</div>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <div class="panel-body">
            <div class="form-group row">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Tanggal</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="date" name="tgl" value="<?php echo $k->tgl ?>">
                    </div>

                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Ruangan</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="ruangan" value="<?php echo $k->ruangan ?>">

                    </div>

                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Kelas</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="kelas" value="<?php echo $k->kelas ?>">
                    </div>
              </div>


               <div class="form-group row">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Kamar</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="kamar" value="<?php echo $k->kamar ?>">
                    </div>

                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Dokter</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                    
                     <select name="dokter" type="text" class="form-control">
                        <option value='$k'>
                        <?php
                           foreach ($dokter as $d){

                          ?> </option>


                          <option <?php if($k->dokter == $d->nama) {echo "selected";} ?> value="<?php echo $d->nama ?>"><?php echo $d->nama ?></option>
                    <?php } ?>
                  
                    </select>

                    </div>

                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Biaya</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="biaya" value="<?php echo $k->biaya ?>">
                    </div>
              </div>

              <div class="form-group row">
               
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Diagnosa</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="diagnosa" value="<?php echo $k->diagnosa?>">
                    </div>


              </div>
                 
              </div>
              </div>
              </div>
              </div>
              

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-primary  btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div align="left" style="color: white;">Rawat Jalan</div>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <div class="panel-body">
            <div class="form-group row">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Tanggal</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="date" name="tgl" value="<?php echo $k->tgl ?>">
                    </div>

                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Poli</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="poli" value="<?php echo $k->poli ?>">

                    </div>

                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Dokter</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="dokter" value="<?php echo $k->dokter ?>">

                    </div>
              </div>


              <div class="form-group row">
               
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Diagnosa</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="diagnosa" value="<?php echo $k->diagnosa?>">
                    </div>
                    

              </div>

              <div class="form-group row">
                <label  class="control-label col-md-1 col-sm-1 col-xs-12">Detail</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="detail" value="<?php echo $k->detail?>">
                    </div>

              </div>
                 <?php } ?>
              </div>
              </div>
              </div>
              </div>


 
<div class="box-footer">
         <button type="submit" class="btn btn-default">Simpan</button>
      </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
  </div>