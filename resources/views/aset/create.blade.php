@include('aset.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Lokasi Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/aset" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Golongan</label>
                        <select id="golongan" name="id_golongan" class="form-control">
                        <?php
                         $content = file_get_contents("http://localhost:8080/aset/golongan");
                         $opendata = json_decode($content);
                          foreach ($opendata as $key => $value) {
                            echo '<option>
                              <br>'.$value->nama.'</br>
                            </option>';
                          } 
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kelompok</label>
                        <select id="txtkelompok" name="id_kelompok" class="form-control">
                        <?php
                         $content = file_get_contents("http://localhost:8080/aset/kelompok");
                         $opendata = json_decode($content);
                          foreach ($opendata as $key => $value) {
                            echo '<option>
                              <br>'.$value->nama.'</br>
                            </option>';
                          } 
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kode Perkiraan</label>
                        <select id="txtkodeperkiraan" name="id_kodeperkiraan" class="form-control">
                        <?php
                         $content = file_get_contents("http://localhost:8080/aset/kodeperkiraan");
                         $opendata = json_decode($content);
                          foreach ($opendata as $key => $value) {
                            echo '<option>
                              <br>'.$value->nama.'</br>
                            </option>';
                          } 
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sub Perkiraan</label>
                        <select id="txtsubperkiraan" name="id_subperkiraan" class="form-control">
                        <?php
                         $content = file_get_contents("http://localhost:8080/aset/subperkiraan");
                         $opendata = json_decode($content);
                          foreach ($opendata as $key => $value) {
                            echo '<option>
                              <br>'.$value->nama.'</br>
                            </option>';
                          } 
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Aktiva</label>
                        <input name="nama" type="golongan" class="form-control" id="exampleInputPassword1" placeholder="Golongan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Satuan</label>
                        <select id="txtsatuan" name="id_satuan" class="form-control">
                        <?php
                         $content = file_get_contents("http://localhost:8080/aset/satuan");
                         $opendata = json_decode($content);
                          foreach ($opendata as $key => $value) {
                            echo '<option>
                              <br>'.$value->nama.'</br>
                            </option>';
                          } 
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Volume</label>
                        <input name="volume" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Perolehan</label>
                        <input name="harga_perolehan" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tahun</label>
                        <input name="tahun_perolehan" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sumber Dana</label>
                        <input name="id_sumberdana" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tarif</label>
                        <input name="tarif" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kondisi</label> 
                        <select id="txtkondisi" name="id_kondisi" class="form-control">
                        <?php
                         $content = file_get_contents("http://localhost:8080/aset/kondisi");
                         $opendata = json_decode($content);
                          foreach ($opendata as $key => $value) {
                            echo '<option>
                              <br>'.$value->nama.'</br>
                            </option>';
                          } 
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lokasi</label>
                        <input name="lokasi" type="lokasi" class="form-control" id="txtlokasi" placeholder="Tarif">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input name="keterangan" type="keterangan" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
                    </div>
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  


