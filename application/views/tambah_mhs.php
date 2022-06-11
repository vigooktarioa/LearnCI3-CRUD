<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
</head>

<body>
    <?php require_once 'include/navbar.php'; ?>
    <h1>Halaman Tambah</h1>
    <!-- panggil function dari class controller, disini class controllernya adalah home -->
    <form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
        <table>
            <tr>
                <td>nim</td>
                <td>:
            <tr>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:
            <tr>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:
            <tr>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="text" name="gdadadbh">Tambah Mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>

</html>