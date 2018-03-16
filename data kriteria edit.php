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
				<h3>Data Baru</h3>
				<span class="hrdivider"></span>
				<div class="panel panel-default">
					<div class="panel-body">
						<?php
							$id = $_GET['id'];
							$sql = "SELECT * FROM kriteria WHERE id = $id";
							$query  = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($query);
						?>
						<form action="php/kriteria update.php" method="POST">
							<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
							<div class="form-group">
								<label for="kd_kriteria" class="control-label">Kode kriteria</label>
								<input type="text" class="form-control" name="kd_kriteria" placeholder="Kode kriteria" value="<?php echo $row['kd_kriteria']; ?>">
							</div>
							<div class="form-group">
								<label for="nama" class="control-label">Nama</label>
								<input name="nama" class="form-control" name="nama" placeholder="Nama" value="<?php echo $row['nama']; ?>">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-info">Simpan</button>
								<a href="data kriteria.php" class="btn btn-default">Kembali</a>
							</div>
						</form>
					</div>
				</div>            
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
