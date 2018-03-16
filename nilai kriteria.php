<!DOCTYPE html>
<?php
	require __DIR__ . '/php/connect.php';
	require __DIR__ . '/php/cek_login.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Styles -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="css/app.css" rel="stylesheet">
	<link href="css/toni.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script>
		$(document).ready(function($){
			var str1 = $("#krit1").text();
			$("#str1").html(str1);
			var str2 = $("#krit2").text();
			$("#str2").html(str2);
			var str3 = $("#krit3").text();
			$("#str3").html(str3);
			var str4 = $("#krit4").text();
			$("#str4").html(str4);
		});
	</script>
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
						<a class="navbar-brand" href="{{ url('/">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="app-navbar-collapse">
						<!-- Left Side Of Navbar -->
						<ul class="nav navbar-nav navbar-right nav-tabs-justified">
							<li>
								<a href="home.php">Home</a>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="datamakanan.php">Data Makanan</a>
									</li>
									<li>
										<a href="data kriteria.php">Data Kriteria</a>
									</li>
									<li>
										<a href="data subkriteria.php">Data Subkriteria</a>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Nilai
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="nilai kriteria.php">Nilai Kriteria</a>
									</li>
									<li>
										<a href="nilai subkriteria.php">Nilai Subkriteria</a>
									</li>
									<li>
										<a href="nilai makanan.php">Nilai Makanan</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="hasilakhir.php">Hasil Akhir</a>
							</li>
							<li>
								<a href="php/logout.php">
									Logout
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3>Nilai Kriteria</h3>
				<span class="hrdivider"></span>
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-inline" action="php/kriteria nilai.php" method="POST">
							<select name="variabel" id="variabel" class="form-control">
							<?php
								$sql    = 'SELECT * FROM kriteria';
								$query  = mysqli_query($con, $sql);
								while ($row = mysqli_fetch_array($query))
								{
									echo "<option value=" . $row['id'] . ">" . $row['nama'] . "</option>";
								}
							?>
							</select>                        
							<select name="skala" id="skala" class="form-control">
								<option value="1">1 - Kedua elemen sama pentingnya</option>
								<option value="2">2 - Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</option>
								<option value="3">3 - Elemen yang satu sedikit lebih penting daripada yang lainnya</option>
								<option value="4">4 - Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</option>
								<option value="5">5 - Elemen yang satu lebih penting daripada yang lainnya</option>
								<option value="6">6 -  Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</option>
								<option value="7">7 - Satu elemen yang jelas lebih mutlak penting daripada elemen lainnya</option>
								<option value="8">8 - Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</option>
								<option value="9">9 - Satu elemen mutlak penting daripada elemen lainnya</option>
							</select>                        
							<select name="variabel2" id="variabel2" class="form-control">
								<?php
									$sql    = 'SELECT * FROM kriteria';
									$query  = mysqli_query($con, $sql);
									while ($row = mysqli_fetch_array($query))
									{
										echo "<option value=" . $row['id'] . ">" . $row['nama'] . "</option>";
									}
								?>
							</select>                        
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
						<table class="table table-hover table-bordered table-responsive table-nilai">
						<thead>
							<tr>
								<th>Kode</th>
								<?php
									$sql    = 'SELECT * FROM kriteria';
									$query  = mysqli_query($con, $sql);
									while ($row = mysqli_fetch_array($query))
									{
										echo "<th id=krit" . $row['id'] . ">" . $row['nama'] . "</th>";
									}
								?>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql    = 'SELECT * FROM nilaikrit WHERE id = 1';
								$query  = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query)
							?>
							<tr>
								<td id="str1" class="bold"></td> 
								<td id="c01_c01">
									1
								</td>
								<td id="lem_pro">
									<?php echo $row['lem_pro']; ?>
								</td>
								<td id="kar_pro">
									<?php echo $row['kar_pro']; ?>
								</td>
								<td id="ser_pro">
								   <?php echo $row['ser_pro']; ?>
								</td>
							</tr>
							<tr>
								<td id="str2" class="bold"></td> 
								<td id="c01_c02">
									<?php echo number_format(1/$row['lem_pro'], 2, '.', ''); ?>
								</td>
								<td id="c02_c02">
									1
								</td>
								<td id="kar_lem">
									<?php echo $row['kar_lem']; ?>
								</td>
								<td id="ser_lem">
									<?php echo $row['ser_lem']; ?>
								</td>
							</tr>
							<tr>
								<td id="str3" class="bold"></td> 
								<td id="c01_c03">
									<?php echo number_format(1/$row['kar_pro'], 2, '.', ''); ?>
								</td>
								<td id="c02_c03">
									<?php echo number_format(1/$row['kar_lem'], 2, '.', ''); ?>
								</td>
								<td id="c03_c03">
									1
								</td>
								<td id="ser_kar">
									<?php echo $row['ser_kar']; ?>
								</td>
							</tr>
							<tr>
								<td id="str4" class="bold"></td>
								<td id="c01_c04">
									<?php echo number_format(1/$row['ser_pro'], 2, '.', ''); ?>
								</td>
								<td id="c02_c04">
									<?php echo number_format(1/$row['ser_lem'], 2, '.', ''); ?>
								</td>
								<td id="c03_c04">
									<?php echo number_format(1/$row['ser_kar'], 2, '.', ''); ?>
								</td>
								<td id="c04_c04">
									1
								</td>
							</tr>
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
