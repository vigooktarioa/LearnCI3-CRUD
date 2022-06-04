<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Halaman Home</title>
</head>

<body>
	<h1 class="d-flex justify-content-center mt-5">Data Mahasiswa</h1>
	<div class="container">
		<a class="mb-3 mt-5 d-flex justify-content-center btn btn-primary" href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Mahasiswa</a>
		<table class="table table-bordered table-hover">
			<thead class="thead">
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<?php
			$count = 0;
			foreach ($queryAllMhs as $row) {
				$count = $count + 1;

			?>
				<tr>
					<td><?php echo $count ?></td>
					<td><?php echo $row->nim ?></td>
					<td><?php echo $row->nama ?></td>
					<td><?php echo $row->jurusan ?></td>
					<td>
						<center>
							<a class="btn btn-primary mr-3" href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->nim ?>">Edit</a> <a class="btn btn-danger" href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>">Delete</a>
						</center>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>

</html>