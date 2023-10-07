<?php
header("Content-type: application/vnd.ms-exsel");
header("Content-Disposition: attachment; filename=".$nama.".xls");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
</head>

<body>
    <h1>DATA GURU</h1>
    <table style="font-size: 14px; font-weight: bold;">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $this->session->userdata('email') ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo $this->session->userdata('username') ?></td>
        </tr>
    </table>
    <hr>
    <br>
    <table border="1">
        <tr style="font-weight: bold;">
            <td>No</td>
            <td>Nama Guru</td>
            <td>Nik</td>
            <td>Gender</td>
            <td>mapel</td>
            <td>Walikelas</td>



        </tr>
        <?php $no= 1; 
  foreach ($data_guru as $key) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $key->nama_guru ?></td>
            <td><?php echo $key->nik ?></td>
            <td><?php echo $key->gender ?></td>
            <td><?php echo tampil_full_mapel_byid($key->id_mapel)?></td>
            <td><?php echo tampil_full_kelas_byid($key->id_mapel) ?></td>

        </tr>
        <?php } ?>
    </table>


</body>

</html>