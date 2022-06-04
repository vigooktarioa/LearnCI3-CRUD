<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Home</title>
</head>

<body>
	<h1>Data Mahasiswa</h1>

	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Mahasiswa</a>
	<table border="1">
		<tr>
			<td>No</td>
			<td>NIM</td>
			<td>Nama</td>
			<td>Jurusan</td>
			<td>Aksi</td>
		</tr>
		<?php
		foreach ($queryAllMhs as $row)
		?>
		<!-- <tr>
			<td>1</td>
			<td>2112</td>
			<td>Vigo</td>
			<td>Sistem Informasi</td>
			<td>
				<a href="<?php echo base_url('/home/halaman_edit') ?>">Edit</a> | <a href="">Hapus</a>
			</td> -->
		</tr>
	</table>
</body>

</html>