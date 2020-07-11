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
                        <label for="exampleInputEmail1">Kode Aset</label>
                        <input name="id_aset" type="aset" class="form-control" id="exampleInputEmail1" placeholder="Kode Aset">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Aktiva</label>
                        <input name="nama" type="golongan" class="form-control" id="exampleInputPassword1" placeholder="Golongan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Satuan</label>
                        <input name="id_satuan" type="masa manfaat" class="form-control" id="exampleInputEmail1" placeholder="Masa Manfaat">
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
                        <label for="exampleInputPassword1">Golongan</label>
                        <input name="id_golongan" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kondisi</label>
                        <input name="id_kondisi" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input name="keterangan" type="tarif" class="form-control" id="exampleInputPassword1" placeholder="Tarif">
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
  

