@include('mutasi.base')

 <!-- Main content -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
             <section class="content">
              <div class="box">
               <div class="box-header">
                <div class="row">
                  <div class="col-sm-9">
                    <h4 class="box-title">Daftar Mutasi</h4>
                  </div>
                    <div class="col-sm-3">
                      <a class="btn btn-primary" href="{{ url('/asetcreate')}}">Tambah Mutasi Baru</a>
                     </div>
                    </div>
                  </div>
                </div>
            </div>

<!-- /.card-header -->
<div class="container">
      <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12 col-md-6">
          </div>
            <div class="col-sm-12 col-md-6">
          </div>
        </div>
        <form method="POST" action="#">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Cari'])
          @component('layouts.two-cols-search-row', ['items' => ['Mutasi'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['#'] : '']])
          @endcomponent
        @endcomponent
      </form>
      <br>
      <br>
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">No.</th>
                  <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending">Kode Aset</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama Aktiva</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Lokasi Asal</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Lokasi Tujuan</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Kondisi </th>
                  <th width= "125" align="center" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Aksi</th>
                </tr>
                </thead>
                <?php
                  //$result = file_get_contents("http://localhost:8080/aset/aset/load");
                  //$result = json_encode($result,true);
                  //var_dump($result);
                ?>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
              </div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="example2_previous">
                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                  </li>
                  <li class="paginate_button page-item active">
                    <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                  </li>
                  <li class="paginate_button page-item next" id="example2_next">
                    <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- /.card-body -->
    </div>
</div>


          
