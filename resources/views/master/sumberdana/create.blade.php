@include('master.sumberdana.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Sumber Dana Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/sumberdana">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Sumber Dana</label>
                    <input name="kode" type="kode sumber dana" class="form-control" id="exampleInputEmail1" placeholder="Kode Sumber Dana">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Sumber Dana</label>
                    <input name="nama" type="nama sumber dana" class="form-control" id="exampleInputPassword1" placeholder="Nama Sumber Dana">
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
  

