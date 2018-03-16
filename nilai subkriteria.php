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
			$("#str4").html(str1);
			$("#str7").html(str1);
			$("#str10").html(str1);
			var str2 = $("#krit2").text();
			$("#str2").html(str2);
			$("#str5").html(str2);
			$("#str8").html(str2);
			$("#str11").html(str2);
			var str3 = $("#krit3").text();
			$("#str3").html(str3);
			$("#str6").html(str3);
			$("#str9").html(str3);
			$("#str12").html(str3);
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
						<a class="navbar-brand" href="/">
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
				<h3>Nilai Sub Kriteria</h3>
				<span class="hrdivider"></span>
				<h5>Matriks Perbandingan Berpasangan Kriteria Protein</h5>
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-inline" action="php/subkrit1 nilai.php" method="POST">
							<select name="variabel" id="variabel" class="form-control">
								<?php
									$sql    = 'SELECT * FROM subkriteria';
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
									$sql    = 'SELECT * FROM subkriteria';
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
									$sql    = 'SELECT * FROM subkriteria';
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
								$sql    = 'SELECT * FROM nilaisub1 WHERE id = 1';
								$query  = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query)
							?>
							<tr>
								<td id="str1" class="bold">S01</td> 
								<td id="S01_S01">
									1
								</td>
								<td id="S02_S01">
									<?php echo $row['ba1']; ?>
								</td>
								<td id="S03_S01">
									<?php echo $row['ca1']; ?>
								</td>
							</tr>
							<tr>
								<td id="str2" class="bold">S02</td> 
								<td id="S01_S02">
									<?php echo number_format(1/$row['ba1'], 2, '.', ''); ?>
								</td>
								<td id="S02_S02">
									1
								</td>
								<td id="S03_S02">
									<?php echo $row['cb1']; ?>
								</td>
							</tr>
							<tr>
								<td id="str3" class="bold">S03</td> 
								<td id="S01_S03">
									<?php echo number_format(1/$row['ca1'], 2, '.', ''); ?>
								</td>
								<td id="S02_S03">
									<?php echo number_format(1/$row['cb1'], 2, '.', ''); ?>
								</td>
								<td id="S03_S03">
									1
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div>       

				
				<h5>Matriks Perbandingan Berpasangan Kriteria Lemak</h5>
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-inline" action="php/subkrit2 nilai.php" method="POST">
							<select name="variabel" id="variabel" class="form-control">
								<?php
									$sql    = 'SELECT * FROM subkriteria';
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
									$sql    = 'SELECT * FROM subkriteria';
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
									$sql    = 'SELECT * FROM subkriteria';
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
								$sql    = 'SELECT * FROM nilaisub2 WHERE id = 1';
								$query  = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query)
							?>
							<tr>
								<td id="str4" class="bold">S01</td> 
								<td id="S01_S01">
									1
								</td>
									<td id="S02_S01">
									<?php echo $row['ba2']; ?>
								</td>
								<td id="S03_S01">
									<?php echo $row['ca2']; ?>
								</td>
							</tr>
							<tr>
								<td id="str5" class="bold">S02</td> 
								<td id="S01_S02">
									<?php echo number_format(1/$row['ba2'], 2, '.', ''); ?>
								</td>
								<td id="S02_S02">
									1
								</td>
								<td id="S03_S02">
									<?php echo $row['cb2']; ?>
								</td>
							</tr>
							<tr>
								<td id="str6" class="bold">S03</td> 
								<td id="S01_S03">
									<?php echo number_format(1/$row['ca2'], 2, '.', ''); ?>
								</td>
								<td id="S02_S03">
									<?php echo number_format(1/$row['cb2'], 2, '.', ''); ?>
								</td>
								<td id="S03_S03">
									1
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div>       
				

				<h5>Matriks Perbandingan Berpasangan Kriteria Karbohidrat</h5>
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-inline" action="php/subkrit3 nilai.php" method="POST">
							<select name="variabel" id="variabel" class="form-control">
								<?php
									$sql    = 'SELECT * FROM subkriteria';
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
									$sql    = 'SELECT * FROM subkriteria';
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
									$sql    = 'SELECT * FROM subkriteria';
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
								$sql    = 'SELECT * FROM nilaisub3 WHERE id = 1';
								$query  = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query)
							?>
							<tr>
								<td id="str7" class="bold">S01</td> 
								<td id="S01_S01">
									1
								</td>
								<td id="S02_S01">
									<?php echo $row['ba3']; ?>
								</td>
								<td id="S03_S01">
									<?php echo $row['ca3']; ?>
								</td>
							</tr>
							<tr>
								<td id="str8" class="bold">S02</td> 
								<td id="S01_S02">
									<?php echo number_format(1/$row['ba3'], 2, '.', ''); ?>
								</td>
								<td id="S02_S02">
									1
								</td>
								<td id="S03_S02">
									<?php echo $row['cb3']; ?>
								</td>
							</tr>
							<tr>
								<td id="str9" class="bold">S03</td> 
								<td id="S01_S03">
									<?php echo number_format(1/$row['ca3'], 2, '.', ''); ?>
								</td>
								<td id="S02_S03">
									<?php echo number_format(1/$row['cb3'], 2, '.', ''); ?>
								</td>
								<td id="S03_S03">
									1
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div>       


				<h5>Matriks Perbandingan Berpasangan Kriteria Serat</h5>
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-inline" action="php/subkrit4 nilai.php" method="POST">
							<select name="variabel" id="variabel" class="form-control">
								<?php
									$sql    = 'SELECT * FROM subkriteria';
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
									$sql    = 'SELECT * FROM subkriteria';
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
									$sql    = 'SELECT * FROM subkriteria';
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
								$sql    = 'SELECT * FROM nilaisub4 WHERE id = 1';
								$query  = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query)
							?>
							<tr>
								<td id="str10" class="bold">S01</td> 
								<td id="S01_S01">
									1
								</td>
								<td id="S02_S01">
									<?php echo $row['ba4']; ?>
								</td>
								<td id="S03_S01">
									<?php echo $row['ca4']; ?>
								</td>
							</tr>
							<tr>
								<td id="str11" class="bold">S02</td> 
								<td id="S01_S02">
									<?php echo number_format(1/$row['ba4'], 2, '.', ''); ?>
								</td>
								<td id="S02_S02">
									1
								</td>
								<td id="S03_S02">
									<?php echo $row['cb4']; ?>
								</td>
							</tr>
							<tr>
								<td id="str12" class="bold">S03</td> 
								<td id="S01_S03">
									<?php echo number_format(1/$row['ca4'], 2, '.', ''); ?>
								</td>
								<td id="S02_S03">
									<?php echo number_format(1/$row['cb4'], 2, '.', ''); ?>
								</td>
								<td id="S03_S03">
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
