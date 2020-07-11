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
              <form role="form" action="http://localhost:8080/aset/lokasi/<?php echo $id ?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lokasi</label>
                        <input name="id" id="txtid" type="hidden" class="form-control" placeholder="Id Lokasi">
                        <input name="nama" id="txtnama" type="nama golongan" class="form-control"placeholder="Nama Lokasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input name="alamat" id="txtalamat" type="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Longitude</label>
                        <input name="longitude" id="txtlongitude" type="longitude" class="form-control"  placeholder="Longitude">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Latitude</label>
                        <input name="latitude" id="txtlatitude" type="latitude" class="form-control" placeholder="Latitude">
                      </div>
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
              <?php
                  $web = "http://localhost:8080/aset/lokasi/".$id;
                  $result = file_get_contents($web);
                  //var_dump($result);
                  //$x = id($_COOKIE['id']);
              ?>
            </div>
          </div>
        </div>
      </div>
  
<script>
var bData =JSON.parse('<?php echo $result; ?>');
document.getElementById("txtnama").value =bData.nama;
document.getElementById("txtalamat").value =bData.alamat;
document.getElementById("txtlongitude").value =bData.longitude;
document.getElementById("txtlatitude").value =bData.latitude;
document.getElementById("txtid").value =bData.id;

</script>
