@include('master.kodeperkiraan.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Kode Perkiraan Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/kodeperkiraan" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Perkiraan</label>
                    <input name="kode" type="kode perkiraan" class="form-control" id="exampleInputEmail1" placeholder="Kode Perkiraan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Perkiraan</label>
                    <input name="nama" type="nama perkiraan" class="form-control" id="exampleInputPassword1" placeholder="Nama Perkiraan">
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
  

