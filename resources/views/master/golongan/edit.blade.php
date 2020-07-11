@include('master.golongan.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Golongan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/golongan/<?php echo $id ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Golongan</label>
                    <input name="id" id="txtid" type="hidden" class="form-control" placeholder="Kode Golongan">
                    <input name="kode" id="txtkode" type="kode golongan" class="form-control" placeholder="Kode Golongan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Golongan</label>
                    <input name="nama" id="txtnama" type="nama golongan" class="form-control"placeholder="Nama Golongan">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
              <?php
                  $web = "http://localhost:8080/aset/golongan/".$id;
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
document.getElementById("txtkode").value =bData.kode;
document.getElementById("txtnama").value =bData.nama;
document.getElementById("txtid").value =bData.id;

</script>
  

