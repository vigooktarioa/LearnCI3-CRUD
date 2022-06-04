<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
</head>

<body>
    <h1>Halaman Edit</h1>
    <form action="<?php echo base_url('home/fungsiEdit') ?>" method="post"></form>
    <table>
        <tr>
            <td>NIM</td>
            <td>:
            <td><input type=" text" name="nim" readonly>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:
            <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
            <td colspan="3"><button type="text" name="nama">Update Mahasiswa</button></td>
        </tr>
    </table>
    </form>
</body>

</html>