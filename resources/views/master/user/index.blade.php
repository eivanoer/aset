@include('master.golongan.base')

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
                    <h4 class="box-title">Daftar Golongan</h2>
                  </div>
                    <div class="col-sm-3">
                      <a class="btn btn-primary" href="{{ url('/golcreate')}}">Tambah Golongan Baru</a>
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
          @component('layouts.two-cols-search-row', ['items' => ['Nama Golongan'], 
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
                  <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending">Kode Golongan</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama Golongan</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Aksi</th>

                </tr>
                </thead>
               <!-- <tbody>
                <tr role="row" class="odd">
                  <td class="" tabindex="0">Gecko</td>
                  <td class="sorting_1">Seamonkey 1.1</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="" tabindex="0">Webkit</td>
                  <td class="sorting_1">Safari 3.0</td>
                  <td>OSX.4+</td>
                  <td>522.1</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="" tabindex="0">Webkit</td>
                  <td class="sorting_1">Safari 2.0</td>
                  <td>OSX.4+</td>
                  <td>419.3</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="" tabindex="0">Webkit</td>
                  <td class="sorting_1">Safari 1.3</td>
                  <td>OSX.3</td>
                  <td>312.8</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="" tabindex="0">Webkit</td>
                  <td class="sorting_1">Safari 1.2</td>
                  <td>OSX.3</td>
                  <td>125.5</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="" tabindex="0">Webkit</td>
                  <td class="sorting_1">S60</td>
                  <td>S60</td>
                  <td>413</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="" tabindex="0">Misc</td>
                  <td class="sorting_1">PSP browser</td>
                  <td>PSP</td>
                  <td>-</td>
                  <td>C</td>
                </tr><tr role="row" class="even">
                  <td class="" tabindex="0">Presto</td>
                  <td class="sorting_1">Opera for Wii</td>
                  <td>Wii</td>
                  <td>-</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="" tabindex="0">Presto</td>
                  <td class="sorting_1">Opera 9.5</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="" tabindex="0">Presto</td>
                  <td class="sorting_1">Opera 9.2</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
              </tbody>-->
                <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">No.</th>
                  <th rowspan="1" colspan="1">Kode Golongan</th>
                  <th rowspan="1" colspan="1">Nama Golongan</th>
                  <th rowspan="1" colspan="1">Aksi</th>
                  
                </tr>
                </tfoot>
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
    <!-- /.card -->


    
  <!-- /.content -->
</div>
  
