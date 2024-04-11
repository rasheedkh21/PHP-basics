 <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
</style>


<?php
// Ismlar va pul miqdorlarini alohida o'zgaruvchilarga yuklaymiz
$sardor_ism = "Sardor";
$sardor_pul = "$1000";

$eshmat_ism = "Eshmat";
$eshmat_pul = "$1200";

$toshmat_ism = "Toshmat";
$toshmat_pul = "$1500";
?>

<table>
    <tr>
        <th>Ism</th>
        <th>Pul miqdori</th>
    </tr>
    <tr>
        <td><?php echo $sardor_ism; ?></td>
        <td><?php echo $sardor_pul; ?></td>
    </tr>
    <tr>
        <td><?php echo $eshmat_ism; ?></td>
        <td><?php echo $eshmat_pul; ?></td>
    </tr>
    <tr>
        <td><?php echo $toshmat_ism; ?></td>
        <td><?php echo $toshmat_pul; ?></td>
    </tr>
</table>
