@include('penyusutan.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Penyusutan Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/penyusutan" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Aset</label>
                        <input name="id_aset" type="aset" class="form-control" id="exampleInputEmail1" placeholder="Kode Aset">
                    </div>
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
                        <label for="exampleInputEmail1">Masa Manfaat</label>
                        <input name="masa_manfaat" type="masa manfaat" class="form-control" id="exampleInputEmail1" placeholder="Masa Manfaat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tarif</label>
                        <input name="tarif" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
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

