@include('master.satuan.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Satuan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/satuan/<?php echo $id ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Satuan</label>
                    <input name="id" id="txtid" type="hidden" class="form-control" placeholder="Id Satuan">
                    <input name="nama" id="txtnama" type="nama satuan" class="form-control"placeholder="Nama Satuan">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
              <?php
                  $web = "http://localhost:8080/aset/satuan/".$id;
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
document.getElementById("txtid").value =bData.id;

</script>
  

