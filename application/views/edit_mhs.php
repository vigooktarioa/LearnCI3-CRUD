<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Edit</title>
</head>

<body>
    <h1>Halaman Edit</h1>
        <div class="container d-flex justify-content-center">
            <form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td>:
                        <td><input classtype="text" name="nim" value="<?php echo $queryMahasiswaDetail->nim ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:
                        <td><input type="text" name="nama" value="<?php echo $queryMahasiswaDetail->nama ?>"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:
                        <td><input type="text" name="jurusan" value="<?php echo $queryMahasiswaDetail->jurusan ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><button type="submit">Update Mahasiswa</button></td>
                    </tr>
                </table>
            </form>
        </div>
</body>

</html>