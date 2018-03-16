<!DOCTYPE html>
<?php
	require __DIR__ . '/php/connect.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Styles -->
	<link href="css/app.css" rel="stylesheet">
	<link href="css/toni.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<!-- Collapsed Hamburger -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Branding Image -->
						<a class="navbar-brand" href="/">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="app-navbar-collapse">
						<!-- Left Side Of Navbar -->
						<ul class="nav navbar-nav navbar-right nav-tabs-justified">
							<li>
								<a href="home.php">Home</a>
							</li>
							<?php

								session_start();

								if (isset($_SESSION['username'])) {

									echo "<li class=\"dropdown\">
										<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Data
											<span class=\"caret\"></span>
										</a>
										<ul class=\"dropdown-menu\">
											<li>
												<a href=\"datamakanan.php\">Data Makanan</a>
											</li>
											<li>
												<a href=\"data kriteria.php\">Data Kriteria</a>
											</li>
											<li>
												<a href=\"data subkriteria.php\">Data Subkriteria</a>
											</li>
										</ul>
									</li>
									<li class=\"dropdown\">
										<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Nilai
											<span class=\"caret\"></span>
										</a>
										<ul class=\"dropdown-menu\">
											<li>
												<a href=\"nilai kriteria.php\">Nilai Kriteria</a>
											</li>
											<li>
												<a href=\"nilai subkriteria.php\">Nilai Subkriteria</a>
											</li>
											<li>
												<a href=\"nilai makanan.php\">Nilai Makanan</a>
											</li>
										</ul>
									</li>";
								}

							?>
							<li>
								<a href="hasilakhir.php">Hasil Akhir</a>
							</li>
							<?php

								if (isset($_SESSION['username'])) {
									echo "<li>
										<a href=\"php/logout.php\">
											Logout
										</a>
									</li>";
								}
							?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3>Hasil Akhir</h3>
				<span class="hrdivider"></span>
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-hover table-bordered table-responsive table-nilai">
						<thead>
							<tr>
								<th></th>
								<?php
									$sql    = 'SELECT * FROM kriteria';
									$query  = mysqli_query($con, $sql);
									while ($row = mysqli_fetch_array($query))
									{
										echo "<th>" . $row['nama'] . "</th>";
									}
								?>
								<th>Total</th>
								<th>Rank</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql    = 'SELECT * FROM nilaikrit WHERE id = 1';
								$query = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query);
								$lem_pro = $row['lem_pro'];
								$kar_pro = $row['kar_pro'];
								$ser_pro = $row['ser_pro'];
								$kar_lem = $row['kar_lem'];
								$ser_lem = $row['ser_lem'];
								$ser_kar = $row['ser_kar'];
								$pro_lem = 1/$lem_pro;
								$pro_kar = 1/$kar_pro;
								$lem_kar = 1/$kar_lem;
								$pro_ser = 1/$ser_pro;
								$lem_ser = 1/$ser_lem;
								$kar_ser = 1/$ser_kar;
								$JmlPro = 1 + $pro_lem + $pro_kar + $pro_ser;
								$JmlLem = $lem_pro + 1 + $lem_kar + $lem_ser;
								$JmlKar = $kar_pro + $kar_lem + 1 + $kar_ser;
								$JmlSer = $ser_pro + $ser_lem + $ser_kar + 1;
								$PrioPro_Pro = 1/$JmlPro;
								$PrioLem_Pro = $lem_pro/$JmlLem;
								$PrioKar_Pro = $kar_pro/$JmlKar;
								$PrioSer_Pro = $ser_pro/$JmlSer;
								$PrioPro_Lem = $pro_lem/$JmlPro; 
								$PrioLem_Lem = 1/$JmlLem;
								$PrioKar_Lem = $kar_lem/$JmlKar;
								$PrioSer_Lem = $ser_lem/$JmlSer;
								$PrioPro_Kar = $pro_kar/$JmlPro; 
								$PrioLem_Kar = $lem_kar/$JmlLem;
								$PrioKar_Kar = 1/$JmlKar;
								$PrioSer_Kar = $ser_kar/$JmlSer;
								$PrioPro_Ser = $pro_ser/$JmlPro; 
								$PrioLem_Ser = $lem_ser/$JmlLem;
								$PrioKar_Ser = $kar_ser/$JmlKar;
								$PrioSer_Ser = 1/$JmlSer;
								$PrioPro = ($PrioPro_Pro + $PrioLem_Pro + $PrioKar_Pro + $PrioSer_Pro) / 4;
								$PrioLem = ($PrioPro_Lem + $PrioLem_Lem + $PrioKar_Lem + $PrioSer_Lem) / 4;
								$PrioKar = ($PrioPro_Kar + $PrioLem_Kar + $PrioKar_Kar + $PrioSer_Kar) / 4;
								$PrioSer = ($PrioPro_Ser + $PrioLem_Ser + $PrioKar_Ser + $PrioSer_Ser) / 4;

								// Protein
								$sql    = 'SELECT * FROM nilaisub1 WHERE id = 1';
								$query = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query);
								$ba1 = $row['ba1'];
								$ab1 = 1/$row['ba1'];
								$ca1 = $row['ca1'];
								$ac1 = 1/$row['ca1'];
								$cb1 = $row['cb1'];
								$bc1 = 1/$row['cb1'];
								$JmlA1 = 1+$ab1+$ac1;
								$JmlB1 = $ba1+1+$bc1;
								$JmlC1 = $ca1+$cb1+1;
								$PrioAA1 = 1/$JmlA1;
								$PrioBA1 = $ba1/$JmlB1;
								$PrioCA1 = $ca1/$JmlC1;
								$PrioAB1 = $ab1/$JmlA1;
								$PrioBB1 = 1/$JmlB1;
								$PrioCB1 = $cb1/$JmlC1;
								$PrioAC1 = $ac1/$JmlA1;
								$PrioBC1 = $bc1/$JmlB1;
								$PrioCC1 = 1/$JmlC1;
								$PrioA1 = ($PrioAA1 + $PrioBA1 + $PrioCA1) / 3;
								$PrioB1 = ($PrioAB1 + $PrioBB1 + $PrioCB1) / 3;
								$PrioC1 = ($PrioAC1 + $PrioBC1 + $PrioCC1) / 3;
								$PrioSubA1 = $PrioA1/$PrioA1;
								$PrioSubB1 = $PrioB1/$PrioA1;
								$PrioSubC1 = $PrioC1/$PrioA1;

								// Lemak
								$sql   = 'SELECT * FROM nilaisub2 WHERE id = 1';
								$query  = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query);
								$ba2 = $row['ba2'];
                                $ab2 = 1/$row['ba2'];
                                $ca2 = $row['ca2'];
                                $ac2 = 1/$row['ca2'];
                                $cb2 = $row['cb2'];
                                $bc2 = 1/$row['cb2'];
                                $JmlA2 = 1+$ab2+$ac2;
								$JmlB2 = $ba2+1+$bc2;
								$JmlC2 = $ca2+$cb2+1;
								$PrioAA2 = 1/$JmlA2;
								$PrioBA2 = $ba2/$JmlB2;
								$PrioCA2 = $ca2/$JmlC2;
								$PrioAB2 = $ab2/$JmlA2;
								$PrioBB2 = 1/$JmlB2;
								$PrioCB2 = $cb2/$JmlC2;
								$PrioAC2 = $ac2/$JmlA2;
								$PrioBC2 = $bc2/$JmlB2;
								$PrioCC2 = 1/$JmlC2;
								$PrioA2 = ($PrioAA2 + $PrioBA2 + $PrioCA2) / 3;
								$PrioB2 = ($PrioAB2 + $PrioBB2 + $PrioCB2) / 3;
								$PrioC2 = ($PrioAC2 + $PrioBC2 + $PrioCC2) / 3;
								$PrioSubA2 = $PrioA2/$PrioA2;
								$PrioSubB2 = $PrioB2/$PrioA2;
								$PrioSubC2 = $PrioC2/$PrioA2;

								// Karbohidrat
								$sql    = 'SELECT * FROM nilaisub3 WHERE id = 1';
								$query  = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query);
								$ba3 = $row['ba3'];
                                $ab3 = 1/$row['ba3'];
                                $ca3 = $row['ca3'];
                                $ac3 = 1/$row['ca3'];
                                $cb3 = $row['cb3'];
                                $bc3 = 1/$row['cb3'];
                                $JmlA3 = 1+$ab3+$ac3;
								$JmlB3 = $ba3+1+$bc3;
								$JmlC3 = $ca3+$cb3+1;
								$PrioAA3 = 1/$JmlA3;
								$PrioBA3 = $ba3/$JmlB3;
								$PrioCA3 = $ca3/$JmlC3;
								$PrioAB3 = $ab3/$JmlA3;
								$PrioBB3 = 1/$JmlB3;
								$PrioCB3 = $cb3/$JmlC3;
								$PrioAC3 = $ac3/$JmlA3;
								$PrioBC3 = $bc3/$JmlB3;
								$PrioCC3 = 1/$JmlC3;
								$PrioA3 = ($PrioAA3 + $PrioBA3 + $PrioCA3) / 3;
								$PrioB3 = ($PrioAB3 + $PrioBB3 + $PrioCB3) / 3;
								$PrioC3 = ($PrioAC3 + $PrioBC3 + $PrioCC3) / 3;
								$PrioSubA3 = $PrioA3/$PrioA3;
								$PrioSubB3 = $PrioB3/$PrioA3;
								$PrioSubC3 = $PrioC3/$PrioA3;

								// Serat
								$sql    = 'SELECT * FROM nilaisub4 WHERE id = 1';
								$query  = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query);
								$ba4 = $row['ba4'];
                                $ab4 = 1/$row['ba4'];
                                $ca4 = $row['ca4'];
                                $ac4 = 1/$row['ca4'];
                                $cb4 = $row['cb4'];
                                $bc4 = 1/$row['cb4'];
                                $JmlA4 = 1+$ab4+$ac4;
								$JmlB4 = $ba4+1+$bc4;
								$JmlC4 = $ca4+$cb4+1;
								$PrioAA4 = 1/$JmlA4;
								$PrioBA4 = $ba4/$JmlB4;
								$PrioCA4 = $ca4/$JmlC4;
								$PrioAB4 = $ab4/$JmlA4;
								$PrioBB4 = 1/$JmlB4;
								$PrioCB4 = $cb4/$JmlC4;
								$PrioAC4 = $ac4/$JmlA4;
								$PrioBC4 = $bc4/$JmlB4;
								$PrioCC4 = 1/$JmlC4;
								$PrioA4 = ($PrioAA4 + $PrioBA4 + $PrioCA4) / 3;
								$PrioB4 = ($PrioAB4 + $PrioBB4 + $PrioCB4) / 3;
								$PrioC4 = ($PrioAC4 + $PrioBC4 + $PrioCC4) / 3;
								$PrioSubA4 = $PrioA4/$PrioA4;
								$PrioSubB4 = $PrioB4/$PrioA4;
								$PrioSubC4 = $PrioC4/$PrioA4;

								$sql    = 'SELECT * FROM makanan';
								$query  = mysqli_query($con, $sql);
								while ($row = mysqli_fetch_array($query)) {

									if($row['nilai_makanan1'] == 1) {
										$makanan1 = $PrioPro * $PrioSubA1;
									} elseif ($row['nilai_makanan1'] == 2) {
										$makanan1 = $PrioPro * $PrioSubB1;
									} elseif ($row['nilai_makanan1'] == 3) {
										$makanan1 = $PrioPro * $PrioSubC1;
									}

									if($row['nilai_makanan2'] == 1) {
										$makanan2 = $PrioLem * $PrioSubA2;
									} elseif ($row['nilai_makanan2'] == 2) {
										$makanan2 = $PrioLem * $PrioSubB2;
									} elseif ($row['nilai_makanan2'] == 3) {
										$makanan2 = $PrioLem * $PrioSubC2;
									}

									if($row['nilai_makanan3'] == 1) {
										$makanan3 = $PrioKar * $PrioSubA3;
									} elseif ($row['nilai_makanan3'] == 2) {
										$makanan3 = $PrioKar * $PrioSubB3;
									} elseif ($row['nilai_makanan3'] == 3) {
										$makanan3 = $PrioKar * $PrioSubC3;
									}

									if($row['nilai_makanan4'] == 1) {
										$makanan4 = $PrioSer * $PrioSubA4;
									} elseif ($row['nilai_makanan4'] == 2) {
										$makanan4 = $PrioSer * $PrioSubB4;
									} elseif ($row['nilai_makanan4'] == 3) {
										$makanan4 = $PrioSer * $PrioSubC4;
									}

									$total = $makanan1+$makanan2+$makanan3+$makanan4;

									echo "<tr>
										<td class='bold'>" . $row['nama'] . "</td>
										<td>" . number_format($makanan1, 2, '.', '') . "</td>
										<td>" . number_format($makanan2, 2, '.', '') . "</td>
										<td>" . number_format($makanan3, 2, '.', '') . "</td>
										<td>" . number_format($makanan4, 2, '.', '') . "</td>
										<td>" . number_format($total, 2, '.', '') . "</td>";

									if ($total > 0.675) {
										echo"<td>1</td>
									</tr>";
									} elseif ($total > 0.65 ) {
										echo"<td>2</td>
									</tr>";
									} elseif ($total > 0.58) {
										echo"<td>3</td>
									</tr>";
									} elseif ($total > 0.50) {
										echo"<td>4</td>
									</tr>";
									} else {
										echo"<td>5</td>
									</tr>";
									}

										
								}
							?>
						</tbody>
					</table>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
