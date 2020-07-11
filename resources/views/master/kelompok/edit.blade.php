@include('master.kelompok.base')

 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Kelompok</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="http://localhost:8080/aset/kelompok/<?php echo $id ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Kelompok</label>
                    <input name="id" id="txtid" type="hidden" class="form-control" placeholder="Id Kelompok">
                    <input name="kode" id="txtkode" type="kode kelompok" class="form-control" placeholder="Kode Kelompok">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kelompok</label>
                    <input name="nama" id="txtnama" type="nama kelompok" class="form-control"placeholder="Nama Kelompok">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
                <?php
                  $web = "http://localhost:8080/aset/kelompok/".$id;
                  $result = file_get_contents($web);
                  //var_dump($result);
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
      