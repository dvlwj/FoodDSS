<!DOCTYPE html>
<?php
	require __DIR__ . '/php/connect.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FOOD DSS</title>
	<link href="css/app.css" rel="stylesheet">
	<link href="css/toni.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<?php

		session_start();

		if (isset($_SESSION['username'])) {

			echo "
	<div class=\"container-fluid\">
		<div class=\"row\">
			<nav class=\"navbar navbar-default navbar-static-top\">
				<div class=\"container-fluid\">
					<div class=\"navbar-header\">
						<!-- Collapsed Hamburger -->
						<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#app-navbar-collapse\" aria-expanded=\"false\">
							<span class=\"sr-only\">Toggle Navigation</span>
							<span class=\"icon-bar\"></span>
							<span class=\"icon-bar\"></span>
							<span class=\"icon-bar\"></span>
						</button>
						<!-- Branding Image -->
						<a class=\"navbar-brand\" href=\"{{ url('/\">
						</a>
					</div>
					<div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">
						<!-- Left Side Of Navbar -->
						<ul class=\"nav navbar-nav navbar-right nav-tabs-justified\">
							<li>
								<a href=\"home.php\">Home</a>
							</li>
							<li class=\"dropdown\">
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
							</li>
							<li>
								<a href=\"hasilakhir.php\">Hasil Akhir</a>
							</li>
							<li>
								<a href=\"php/logout.php\">
									Logout
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class=\"container-fluid\">
		<div class=\"row\">
			<div class=\"col-sm-12 col-md-5\">
				<h3>Tabel Skala Penilaian Perbandingan Berpasangan</h3>
				<span class=\"hrdivider\"></span>
				<div style=\"overflow-y:auto\">
					<table class=\"table table-hover table-bordered table-responsive table-striped table-information\">
						<thead>
							<tr>
								<th>Intensitas Kepentingan</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class=\"text-center\">1</td>
								<td>Kedua elemen sama pentingnya</td>
							</tr>
							<tr>
								<td class=\"text-center\">3</td>
								<td>Elemen yang satu sedikit lebih penting daripada yang lainnya</td>
							</tr>
							<tr>
								<td class=\"text-center\">5</td>
								<td>Elemen yang satu lebih penting daripada yang lainnya</td>
							</tr>
							<tr>
								<td class=\"text-center\">7</td>
								<td>Satu elemen yang jelas lebih mutlak penting daripada elemen lainnya</td>
							</tr>
							<tr>
								<td class=\"text-center\">9</td>
								<td>Satu elemen mutlak penting daripada elemen lainnya</td>
							</tr>
							<tr>
								<td class=\"text-center\">2, 4, 6, 8</td>
								<td>Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</td>
							</tr>
						</tbody>
					</table>            
				</div>
			</div>
			<div class=\"col-sm-12 col-md-7\">
				<h3>Tabel Skala Penilaian Perbandingan Berpasangan</h3>
				<span class=\"hrdivider\"></span>
				<div style=\"overflow-y: auto\">
					<table class=\"table table-hover table-bordered table-responsive table-striped table-information\">
						<thead>
							<tr>
								<th>Ukuran Matriks (n)</th>
								<th>1</th>
								<th>2</th>
								<th>3</th>
								<th>4</th>
								<th>5</th>
								<th>6</th>
								<th>7</th>
								<th>8</th>
								<th>9</th>
								<th>10</th>
								<th>11</th>
								<th>12</th>
								<th>13</th>
								<th>14</th>
								<th>15</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style=\"font-weight: bold\">Nilai RI</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>0.58</td>
								<td>0.90</td>
								<td>1.12</td>
								<td>1.24</td>
								<td>1.32</td>
								<td>1.41</td>
								<td>1.45</td>
								<td>1.49</td>
								<td>1.51</td>
								<td>1.48</td>
								<td>1.56</td>
								<td>1.57</td>
								<td>1.59</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class=\"row\">
			<div class=\"col-md-12\">
				<div class=\"panel panel-default\">
					<div class=\"text-center\">
						<img src=\"img/home2.jpg\" width=\"600\" height=\"500\">
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src=\"js/jquery.min.js\"></script>
	<script src=\"js/app.js\"></script>";

	}

	else {
		echo "
	<div class=\"container-fluid\">
		<div class=\"row\">
			<nav class=\"navbar navbar-default navbar-static-top\">
				<div class=\"container-fluid\">
					<div class=\"navbar-header\">
						<!-- Collapsed Hamburger -->
						<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#app-navbar-collapse\" aria-expanded=\"false\">
							<span class=\"sr-only\">Toggle Navigation</span>
							<span class=\"icon-bar\"></span>
							<span class=\"icon-bar\"></span>
							<span class=\"icon-bar\"></span>
						</button>
						<!-- Branding Image -->
						<a class=\"navbar-brand\" href=\"{{ url('/\">
						</a>
					</div>
					<div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">
						<!-- Left Side Of Navbar -->
						<ul class=\"nav navbar-nav navbar-right nav-tabs-justified\">
							<li>
								<a href=\"home.php\">Home</a>
							</li>
							<li>
								<a href=\"hasilakhir.php\">Hasil Akhir</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class=\"container-fluid\">
		<div class=\"row\">
			<div class=\"col-sm-12 col-md-12\">
				<h3 class=\"text-center\">“Selamat Datang di Website Sistem Pendukung Keputusan Pemilihan Makanan Sehat Pada Penderita Kolesterol”</h3>
				<span class=\"hrdivider\"></span>
			</div>
			<div class=\"col-sm-12 col-md-5\" style=\"overflow: hidden;\">
				<img src=\"img/home.jpg\">
			</div>
			<div class=\"col-sm-12 col-md-7\">
				<div style=\"font-size: 20px\">
					Sistem Pendukung Keputusan Pemilihan Makanan Sehat
					Pada Penderita Kolesterol dengan Metode Analytical
					Hierarchy Process memberikan informasi tentang
					makanan sehat kepada masyarakat dimana sistem ini
					mampu memecahkan masalah secara efisien dan efektif,
					yang bertujuan untuk membantu pengambilan keputusan
					memilih berbagai alternatif keputusan
				</div>
			</div>
		</div>
	</div>
	<script src=\"js/jquery.min.js\"></script>
	<script src=\"js/app.js\"></script>";

	}
	?>
</body>
</html>
