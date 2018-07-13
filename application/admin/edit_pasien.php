<style type="text/css">
    .local {
        margin: 10px auto;
        width: 800px;
        padding: 10px;
        position: relative;
        border: 1px solid #ccc;
        
    }
  </style>
    <div class="box box-info local">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php 
              foreach ($pasien as $p ) {
                
              
             ?>
              <form role="form" action="<?php echo base_url().'pasien/update_pasien' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Rekam Medik</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $p->id ?>">
                    <input type="text" name="rekmed" class="form-control" value="<?php echo $p->rekmed ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Masuk</label>

                  <div class="col-sm-10">
                    <input type="date" name="tgl_masuk" class="form-control" value="<?php echo $p->tgl_masuk ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="time"  class="col-sm-2 control-label">Jam Masuk</label>

                  <div class="col-sm-10">
                    <input type="time" class="form-control" id="time" name="jam_masuk" value="<?php echo $p->jam_masuk ?>">
                  </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="nm_depan" value="<?php echo $p->nm_depan ?>">
                </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="nm_belakang" value="<?php echo $p->nm_belakang ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="alamat"><?php echo $p->alamat ?></textarea> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Provinsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="prov"  value="<?php echo $p->prov ?>"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kabupaten/Kota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kab" value="<?php echo $p->kab ?>"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kec" value="<?php echo $p->kec ?>"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Desa/Kelurahan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kel" value="<?php echo $p->kel ?>"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="umur" value="<?php echo $p->umur ?>"></input> 
                    </div>
                </div>
               <div class="form-group radio-group row">
                    <label class="col-form-label col-md-2 col-sm-2 col-xs-12">Jenis Kelamin</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
                        <div id="jk" class="btn-group" data-toggle="buttons">
                    <label >
                        <input type="radio" name="jk" value="Laki-Laki" <?php if($p->jk == 'Laki-Laki') echo 'checked'; ?> > &nbsp; Laki-Laki &nbsp;
                    </label>
                    <label >
                        <input type="radio" name="jk" value="Perempuan" <?php if($p->jk == 'Perempuan') echo 'checked'; ?> > Perempuan
                    </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telp" value="<?php echo $p->telp ?>" ></input> 
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Pendidikan</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="pendidikan" class="form-control">
                        <option value="">-Pilih Pendidikan-</option>
                        <option <?php if($p->pendidikan == "Tidak Sekolah") {echo "selected";} ?> value="Tidak Sekolah">Tidak Sekolah</option>
                        <option <?php if($p->pendidikan == "SD/MI") {echo "selected";} ?> value="SD/MI">SD/MI</option>
                        <option <?php if($p->pendidikan == "SMP/MTs") {echo "selected";} ?> value="SMP/MTs">SMP/MTs</option>
                        <option <?php if($p->pendidikan == "SMA/SMK/MAN") {echo "selected";} ?> value="SMA/SMK/MAN">SMA/SMK/MAN</option>
                        <option <?php if($p->pendidikan == "Diploma") {echo "selected";} ?> value="Diploma">Diploma</option>
                        <option <?php if($p->pendidikan == "S-1") {echo "selected";} ?> value="S-1">S-1</option>
                        <option <?php if($p->pendidikan == "S-2") {echo "selected";} ?> value="S-2">S-2</option>
                        <option <?php if($p->pendidikan == "S-3") {echo "selected";} ?> value="S-3">S-3</option>
                      </select>
                    </div>
                </div>
                 <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Pekerjaan</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="pekerjaan" class="form-control">
                          <option value="">-Pilih Pekerjaan-</option>
                          <option <?php if($p->pekerjaan == "Buruh") {echo "selected";} ?>  value="Buruh">Buruh</option>
                          <option <?php if($p->pekerjaan == "Karyawan Swasta") {echo "selected";} ?>  value="Karyawan">Karyawan Swasta</option>
                          <option <?php if($p->pekerjaan == "Nelayan") {echo "selected";} ?>  value="Nelayan">Nelayan</option>
                          <option <?php if($p->pekerjaan == "Perangkat Desa") {echo "selected";} ?>  value="Perangkat Desa">Perangkat Desa</option>
                          <option <?php if($p->pekerjaan == "PNS") {echo "selected";} ?>  value="PNS">PNS</option>
                          <option <?php if($p->pekerjaan == "Tani") {echo "selected";} ?>  value="Tani">Tani</option>
                          <option <?php if($p->pekerjaan == "TNI/Polri") {echo "selected";} ?>  value="TNI/Polri">TNI/Polri</option>
                          <option <?php if($p->pekerjaan == "Wiraswasta") {echo "selected";} ?>  value="Wiraswasta">Wiraswasta</option>
                          <option <?php if($p->pekerjaan == "Pelajar/Mahasiswa") {echo "selected";} ?>  value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        </select>
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Agama</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                  <select name="agama" class="form-control" required="required">
                      <option value="">-Agama-</option>
                      <option <?php if($p->agama == "Islam") {echo "selected";} ?>  value="Islam">Islam</option>
                      <option <?php if($p->agama == "Kristen Katolik") {echo "selected";} ?>  value="Kristen katolik">Kristen Katolik</option>
                      <option <?php if($p->agama == "Kristen Protestan") {echo "selected";} ?> value="Kristen protestan">Kristen Protestan</option>
                      <option <?php if($p->agama == "Hindu") {echo "selected";} ?> value="Hindu">Hindu</option>
                      <option <?php if($p->agama == "Buddha") {echo "selected";} ?> value="Buddha">Buddha</option>
                      <option <?php if($p->agama == "Konghucu") {echo "selected";} ?> value="Konghucu">Konghucu</option>
                    </select></td>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Warga Negara</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="wn"  value="<?php echo $p->wn ?>"></input> 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Status</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                  <select name="status" class="form-control" required="required">
                      <option value="">-Status Pernikahan-</option>
                      <option  <?php if($p->status == "Nikah") {echo "selected";} ?> value="Nikah">Nikah</option>
                      <option  <?php if($p->status == "Belum Menikah") {echo "selected";} ?> value="Belum Menikah">Belum Menikah</option>
                      <option  <?php if($p->status == "Duda") {echo "selected";} ?> value="Duda">Duda</option>
                      <option  <?php if($p->status == "Janda") {echo "selected";} ?> value="Janda">Janda</option>
                    </select></td>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Golongan Darah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="gol_darah" value="<?php echo $p->gol_darah ?>"></input> 
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Penanggung Jawab</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="p_jawab"  value="<?php echo $p->p_jawab ?>"></input> 
                    </div>
                </div>

              </div> 
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->

            </form>
          <?php } ?>
          </div>
