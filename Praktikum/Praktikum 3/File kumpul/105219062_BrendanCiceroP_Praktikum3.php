<?php
    $array_k_v = [
    '1' => 'bayam',
    '2' => 'sawi',
    '3' => 'daun salam',
    '4' => 'seledri',
    '5' => 'wortel',
    '6' => 'jagung',
    '7' => 'telur',
    '8' => 'kelapa',
    '9' => 'mentega',
    '10' => 'cabai'
    ];
    $arr = [0, 3, 5, 9, 12, 14, 27, 8, 35, 82, 51];
    $stok = [0, 50, 2, 0, 29, 0, 48, 16, 0, 13, 42];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="gaya.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <h1 align="center" class="judul">Warung Sayur Pak Joy</h1>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Berat (kg)</th>
            <th>Berat (gram)</th>
            <th>Berat (miligram)</th>
            <th>Stok</th>
        </tr>
        <?php for($i = 1; $i <= count($array_k_v); $i++){?>
            <tr>
                <td class="warna"><?php echo $i?></td>
                <td><?php echo $array_k_v[$i]?></td>
                <td><?php echo $arr[$i]?></td>

                <td>
                    <?php $arr[$i] = $arr[$i] * 1000;
                    echo $arr[$i]?>
                </td>

                <td>
                    <?php $arr[$i] = $arr[$i] * 1000000;
                    echo $arr[$i] ?>
                </td>

                <?php if($stok[$i]==0){ ?>
                    <td id="stok"> <?php echo "kosong"; ?> </td>
                <?php } 
                else{ ?>
                    <td> <?php echo $stok[$i]; ?> </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>