@include('master.kelompok.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Kelompok Baru Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/kelompok" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Kelompok</label>
                    <input name="kode" type="kode kelompok" class="form-control" id="exampleInputEmail1" placeholder="Kode Kelompok">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kelompok</label>
                    <input name="nama" type="nama kelompok" class="form-control" id="exampleInputPassword1" placeholder="Nama Kelompok">
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
  

