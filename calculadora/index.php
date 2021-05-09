<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<!-- Metemos css -->
		<link rel="stylesheet" href="./Calculadora_files/bootstrap.min.css">
		<link rel="stylesheet" href="./Calculadora_files/Bootstrap-DataTables.css">
		<link rel="stylesheet" href="./Calculadora_files/dataTables.bootstrap4.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="./Calculadora_files/styles.css">
		<!-- <script data-dapp-detection="">
		! function() {
			let e = !1;

			function n() {
				if (!e) {
					const n = document.createElement("meta");
					n.name = "dapp-detected", document.head.appendChild(n), e = !0
				}
			}
			if (window.hasOwnProperty("ethereum")) {
				if (window.__disableDappDetectionInsertion = !0, void 0 === window.ethereum) return;
				n()
			} else {
				var t = window.ethereum;
				Object.defineProperty(window, "ethereum", {
					configurable: !0,
					enumerable: !1,
					set: function(e) {
						window.__disableDappDetectionInsertion || n(), t = e
					},
					get: function() {
						if (!window.__disableDappDetectionInsertion) {
							const e = arguments.callee;
							e && e.caller && e.caller.toString && -1 !== e.caller.toString().indexOf("getOwnPropertyNames") || n()
						}
						return t
					}
				})
			}
		}();
		</script> -->
		
		<title>Prueba de PHP</title>
	</head>
	<body>
	<?php
	// Declaro variables
		$var1 = 3;
		$var2 = 'Ke ase';
		$var11 = 5;
		$varr = $var1+$var11;

		// Volumenes
		$volumenCaja = 0.05;
		$volumenCajaArmario = 0.3;
		$volumenMueblePeq = 0.5;
		$volumenMuebleMed = 1;
		$volumenMuebleGra = 3;
		$volumenElectrodomestico = 0.5;
		$volumenCama = 1;
		$volumenCuna = 1;

		$volumenVar = 1;

		// Cantidades
		$cantidadCaja = 20;
		$cantidadCajaArmario = 4;
		$cantidadMueblePeq = 3;
		$cantidadMuebleMed = 4;
		$cantidadMuebleGra = 3;
		$cantidadElectrodomestico = 4;
		$cantidadCama = 1;
		$cantidadCuna = 0;

		$cantidadVar = 0;

		// VolumenesTotales
		$volumenTotalCaja = $volumenCaja * $cantidadCaja;
		$volumenTotalCajaArmario = $volumenCajaArmario * $cantidadCajaArmario;
		$volumenTotalMueblePeq = $volumenMueblePeq * $cantidadMueblePeq;
		$volumenTotalMuebleMed = $volumenMuebleMed * $cantidadMuebleMed;
		$volumenTotalMuebleGra = $volumenMuebleGra * $cantidadMuebleGra;
		$volumenTotalElectrodomestico = $volumenElectrodomestico * $cantidadElectrodomestico;
		$volumenTotalCama = $volumenCama * $cantidadCama;
		$volumenTotalCuna = $volumenCuna * $cantidadCuna;

		$volumenTotalVar = $volumenVar * $cantidadVar;

		// PreciosTotales
		$precioTotalCaja = $volumenTotalCaja * $m3;
		$precioTotalCajaArmario = $volumenTotalCajaArmario * $m3;
		$precioTotalMueblePeq = $volumenTotalMueblePeq * $m3;
		$precioTotalMuebleMed = $volumenTotalMuebleMed * $m3;
		$precioTotalMuebleGra = $volumenTotalMuebleGra * $m3;
		$precioTotalElectrodomestico = $volumenTotalElectrodomestico * $m3;
		$precioTotalCama = $volumenTotalCama * $m3;
		$precioTotalCuna = $volumenTotalCuna * $m3;

		$precioTotalVar = $volumenTotalVar * $cantidadVar;

		// Distancia
		$kmDistancia = 50;

		// Precios
		$m3 = 40;
		$km = 0.8;

		// Totales
		$precioTotal = $precioTotalCaja + $precioTotalCajaArmario + $precioTotalMueblePeq + $precioTotalMuebleMed + $precioTotalMuebleGra + $precioTotalElectrodomestico + $precioTotalCama + $precioTotalCuna + $precioTotalVar;
		$volumenTotal = $volumenTotalCaja + $volumenTotalCajaArmario + $volumenTotalMueblePeq + $volumenTotalMuebleMed + $volumenTotalMuebleGra + $volumenTotalElectrodomestico + $volumenTotalCama + $volumenTotalCuna + $volumenTotalVar;

	?>

	<body>
		<h1><?php echo "Hello World" ?></h1>
		<div><?php echo $var1 ?></div>
		<div><?php echo $varr ?></div>

		<table id="calculadora" style="width: 100%;" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="example_info">
			<thead>
				<tr role="row">
					<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: auto"></th>
					<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Cantidad" style="width: 120px;">Cantidad</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Volumen m3" style="width: 120px;">Volumen m3</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Volumen total" style="width: 120px;">Volumen total</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Precio" style="width: 120px;">Precio</th>
				</tr>
			</thead>
			<tbody>
				<tr role="row" class="even">
					<td>Cajas</td>
					<td><?php echo $cantidadCaja ?></td>
					<td><?php echo $volumenCaja ?></td>
					<td><?php echo $volumenTotalCaja ?></td>
					<td><?php echo $volumenTotalCaja * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="odd">
					<td>Cajas Armario</td>
					<td>5</td>
					<td><?php echo $volumenCajaArmario ?></td>
					<td><?php echo $volumenTotalCajaArmario ?></td>
					<td><?php echo $volumenTotalCajaArmario * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="even">
					<td>Muebles Pequeños</td>
					<td>1</td>
					<td><?php echo $volumenMueblePeq ?></td>
					<td><?php echo $volumenTotalMueblePeq ?></td>
					<td><?php echo $volumenTotalMueblePeq * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="odd">
					<td>Muebles Medianos</td>
					<td>3</td>
					<<td><?php echo $volumenMuebleMed ?></td>
					<td><?php echo $volumenTotalMuebleMed ?></td>
					<td><?php echo $volumenTotalMuebleMed * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="even">
					<td>Muebles Grandes</td>
					<td>4</td>
					<td><?php echo $volumenMuebleGra ?></td>
					<td><?php echo $volumenTotalMuebleGra ?></td>
					<td><?php echo $volumenTotalMuebleGra * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="odd">
					<td>Electrodomésticos</td>
					<td>1</td>
					<td><?php echo $volumenElectrodomestico ?></td>
					<td><?php echo $volumenTotalElectrodomestico ?></td>
					<td><?php echo $volumenTotalElectrodomestico * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="even">
					<td>Camas</td>
					<td>1</td>
					<td><?php echo $volumenCama ?></td>
					<td><?php echo $volumenTotalCama ?></td>
					<td><?php echo $volumenTotalCama * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="odd">
					<td>Cunas</td>
					<td>1</td>
					<td><?php echo $volumenCuna ?></td>
					<td><?php echo $volumenTotalCuna ?></td>
					<td><?php echo $volumenTotalCuna * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="even">
					<td>Variable</td>
					<td>1</td>
					<td><?php echo $volumenVar ?></td>
					<td><?php echo $volumenTotalVar ?></td>
					<td><?php echo $volumenTotalVar * $m3 ?> EUR</td>
				</tr>
				<tr role="row" class="odd">
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr role="row" class="even">
					<td>Distancia (Km)</td>
					<td><?php echo $kmDistancia ?> KM</td>
					<td></td>
					<td></td>
					<td><?php echo $kmDistancia * $km ?> EUR</td>
				</tr>
				<tr role="row" class="odd">
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr role="row" class="even">
					<td>TOTAL</td>
					<td></td>
					<td></td>
					<td><?php echo $volumenTotal?> M3</td>
					<td><?php echo $precioTotalMuebleGra?> EUR</td>
				</tr>
			</tbody>
		</table>
			<script src="Calculadora_files/jquery-3.5.1.min.js"></script>
			<script src="Calculadora_files/bootstrap.min.js"></script>
			<script src="Calculadora_files/jquery.dataTables.min.js"></script>
			<!-- <script src="Calculadora_files/dataTables.bootstrap4.min.js"></script> -->
			<!-- <script src="Calculadora_files/Bootstrap-DataTables.js"></script> -->
			<!-- <script id="bs-live-reload" data-sseport="49573" data-lastchange="1620489033716" src="Calculadora_files/livereload.js"></script> -->
	</body>
</html>