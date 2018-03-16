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
				<h3>Nilai Makanan</h3>
				<span class="hrdivider"></span>
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-inline" action="php/makanan nilai.php" method="POST">
							<select name="variabel" id="variabel" class="form-control">
								<?php
	                                $sql	= 'SELECT * FROM kriteria';
	                                $query	= mysqli_query($con, $sql);
	                                while ($row = mysqli_fetch_array($query))
	                                {
	                                    echo "<option value=" . $row['id'] . ">" . $row['nama'] . "</option>";
	                                }
	                            ?>
							</select>
							<select name="skala" id="skala" class="form-control">
								<?php
	                                $sql	= 'SELECT * FROM subkriteria';
	                                $query	= mysqli_query($con, $sql);
	                                while ($row = mysqli_fetch_array($query))
	                                {
	                                    echo "<option value=" . $row['id'] . ">" . $row['nama'] . "</option>";
	                                }
	                            ?>
							</select>
							<select name="variabel2" id="variabel2" class="form-control">
								<?php                
	                                $sql	= 'SELECT * FROM makanan';
	                                $query	= mysqli_query($con, $sql);
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
									$sql	= 'SELECT * FROM kriteria';
									$query	= mysqli_query($con, $sql);
									while ($row = mysqli_fetch_array($query))
									{
										echo "<th id=krit" . $row['id'] . ">" . $row['nama'] . "</th>";
									}
								?>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = 'SELECT makanan.nama,
										(SELECT subkriteria.nama FROM subkriteria WHERE makanan.nilai_makanan1 = subkriteria.id) As nilai1,
										(SELECT subkriteria.nama FROM subkriteria WHERE makanan.nilai_makanan2 = subkriteria.id) As nilai2,
										(SELECT subkriteria.nama FROM subkriteria WHERE makanan.nilai_makanan3 = subkriteria.id) As nilai3,
										(SELECT subkriteria.nama FROM subkriteria WHERE makanan.nilai_makanan4 = subkriteria.id) As nilai4
										FROM makanan';
								$query  = mysqli_query($con, $sql);
								while ($row = mysqli_fetch_array($query))
								{
									echo "<tr>
										<td class='bold'>" . $row['nama'] . "</td>
										<td>" . $row['nilai1'] . "</td>
										<td>" . $row['nilai2'] . "</td>
										<td>" . $row['nilai3'] . "</td>
										<td>" . $row['nilai4'] . "</td>
									</tr>";
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
