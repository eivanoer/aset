@include('penyusutan.base')

 <!-- Main content -->
<!--<div class="row justify-content-center">
<div class="card card-primary">
              <div class="card-header">-->

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Penyusutan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/penyusutan/<?php echo $id ?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Aset</label>
                        <input name="id" id="txtid" type="hidden" class="form-control" placeholder="Id Penyusutan">
                        <input name="id_aset" id="txtaset" type="aset" class="form-control" placeholder="Kode Aset">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Golongan</label>
                        <input name="id_golongan" id="txtgolongan" type="golongan" class="form-control" placeholder="Golongan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masa Manfaat</label>
                        <input name="masa_manfaat" id="txtmasa" type="masa manfaat" class="form-control" placeholder="Masa Manfaat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tarif</label>
                        <input name="tarif" id="txttarif" type="tarif" class="form-control" placeholder="Tarif">
                    </div>
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
              <?php
                  $web = "http://localhost:8080/aset/penyusutan/".$id;
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
document.getElementById("txtaset").value =bData.id_aset;
document.getElementById("txtgolongan").value =bData.id_golongan;
document.getElementById("txtmasa").value =bData.masa_manfaat;
document.getElementById("txttarif").value =bData.tarif;
document.getElementById("txtid").value =bData.id;

</script>
