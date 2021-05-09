<!DOCTYPE html>
<!-- saved from url=(0022)http://127.0.0.1:8000/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Calculadora</title>
    <link rel="stylesheet" href="./Calculadora_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Calculadora_files/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="./Calculadora_files/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./Calculadora_files/styles.css">
<script data-dapp-detection="">!function(){let e=!1;function n(){if(!e){const n=document.createElement("meta");n.name="dapp-detected",document.head.appendChild(n),e=!0}}if(window.hasOwnProperty("ethereum")){if(window.__disableDappDetectionInsertion=!0,void 0===window.ethereum)return;n()}else{var t=window.ethereum;Object.defineProperty(window,"ethereum",{configurable:!0,enumerable:!1,set:function(e){window.__disableDappDetectionInsertion||n(),t=e},get:function(){if(!window.__disableDappDetectionInsertion){const e=arguments.callee;e&&e.caller&&e.caller.toString&&-1!==e.caller.toString().indexOf("getOwnPropertyNames")||n()}return t}})}}();</script></head>

<body>

<?php
	$var1 = 3;
	$var2 = 'Ke ase';
?>

<div class="bootstrap_datatables">
<div class="container py-5">
  <header class="text-center text-black">
    <h1 class="display-4">
    <?php
    echo $var1;
    ?>
    </h1>
  </header>
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="12">12</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example" style="width: 100%;" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="example_info">
              <thead>
                <tr role="row"><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 148px;"></th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Cantidad: activate to sort column ascending" style="width: 93px;">Cantidad</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Volumen m3: activate to sort column ascending" style="width: 125px;">Volumen m3</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Volumen total: activate to sort column ascending" style="width: 138px;">Volumen total</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Precio" style="width: 124px;">Precio</th></tr>
              </thead>
              <tbody>
                
                
                
                
                
                
                
                
                
                
                
                
              <tr role="row" class="odd">
                  <td>Cajas</td>
                  <td>5</td>
                  <td>0,05</td>
                  <td>0,25</td>
                  <td>10,00 EUR</td>
                </tr><tr role="row" class="even">
                  <td>Muebles Pequeños</td>
                  <td>1</td>
                  <td>0,5</td>
                  <td>0,5</td>
                  <td>20,00 EUR</td>
                </tr><tr role="row" class="odd">
                  <td>Muebles Medianos</td>
                  <td>3</td>
                  <td>1</td>
                  <td>3</td>
                  <td>120,00 EUR</td>
                </tr><tr role="row" class="even">
                  <td>Muebles Grandes</td>
                  <td>4</td>
                  <td>3</td>
                  <td>12</td>
                  <td>480,00 EUR</td>
                </tr><tr role="row" class="odd">
                  <td>Electrodomésticos</td>
                  <td>1</td>
                  <td>0,5</td>
                  <td>0,5</td>
                  <td>20,00 EUR</td>
                </tr><tr role="row" class="even">
                  <td>Camas</td>
                  <td>1</td>
                  <td>1</td>
                  <td>40,00</td>
                  <td>40,00 EUR</td>
                </tr><tr role="row" class="odd">
                  <td>Cunas</td>
                  <td>1</td>
                  <td>1</td>
                  <td>40,00</td>
                  <td>40,00 EUR</td>
                </tr><tr role="row" class="even">
                  <td>Variable</td>
                  <td>1</td>
                  <td>10</td>
                  <td></td>
                  <td>400,00 EUR</td>
                </tr><tr role="row" class="odd">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr><tr role="row" class="even">
                  <td>Distancia (Km)</td>
                  <td>150,00</td>
                  <td>0,80 EUR</td>
                  <td>120,00 EUR</td>
                  <td>120,00 EUR</td>
                </tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="http://127.0.0.1:8000/#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="http://127.0.0.1:8000/#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="http://127.0.0.1:8000/#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example_next"><a href="http://127.0.0.1:8000/#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="./Calculadora_files/jquery-3.5.1.min.js"></script>
    <script src="./Calculadora_files/bootstrap.min.js"></script>
    <script src="./Calculadora_files/jquery.dataTables.min.js"></script>
    <script src="./Calculadora_files/dataTables.bootstrap4.min.js"></script>
    <script src="./Calculadora_files/Bootstrap-DataTables.js"></script>
    <script id="bs-live-reload" data-sseport="49573" data-lastchange="1620489033716" src="./Calculadora_files/livereload.js"></script>


</body></html>