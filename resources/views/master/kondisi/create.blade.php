@include('master.kondisi.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Kondisi Baru</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/kondisi" method="post">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kondisi</label>
                    <input name="nama" type="nama kondisi" class="form-control" id="exampleInputPassword1" placeholder="Nama Kondisi">
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
  

