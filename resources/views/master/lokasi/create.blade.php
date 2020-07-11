@include('master.lokasi.base')

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
              <form role="form" action="http://localhost:8080/aset/lokasi" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lokasi</label>
                        <input name="nama" type="nama lokasi" class="form-control" id="exampleInputEmail1" placeholder="Nama lokasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input name="alamat" type="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Longitude</label>
                        <input name="longitude" type="longitude" class="form-control" id="exampleInputEmail1" placeholder="Longitude">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Latitude</label>
                        <input name="latitude" type="latitude" class="form-control" id="exampleInputPassword1" placeholder="Latitude">
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
  

