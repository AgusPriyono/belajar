<?php

    include("proses-baca.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <br>
    <a href="form-input.php"> Tambah Data</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $index => $siswa){
            ?>
            <tr>
                <td> 
                    <?php echo $siswa["id"] ?> 
                </td>
                <td>
                    <?php echo $siswa["nama"]?> 
                </td>
                <td>
                    <?php echo $siswa["alamat"]?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>

TEST