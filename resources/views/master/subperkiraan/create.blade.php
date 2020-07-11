@include('master.subperkiraan.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Sub Perkiraan Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/subperkiraan" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Sub Perkiraan</label>
                    <input name="kode" type="kode sub perkiraan" class="form-control" id="exampleInputEmail1" placeholder="Kode Sub Perkiraan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Sub Perkiraan</label>
                    <input name="nama" type="nama sub perkiraan" class="form-control" id="exampleInputPassword1" placeholder="Nama Sub Perkiraan">
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
  

