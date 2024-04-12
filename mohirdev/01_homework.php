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

<?php 
//3-block 
//1- masala
 $h= 2.7;
 $x= 5;
 $y= 3;
 $_1_rulon_oboy = 10;
 $eni = 1.15; 

 $xona_yuzasi = $x*$y;
 $oboy_yuzasi = $_1_rulon_oboy *$eni;

 $kerak_boladigan_rulon = ceil($xona_yuzasi/$oboy_yuzasi);

 $oboy_uzunligi = ($oboy_yuzasi/$eni)*$kerak_boladigan_rulon;

 echo "Bizga xonani oboylash uchun $kerak_boladigan_rulon ta butun rulon kerak\n";
 echo "Bizga eni 1.15 metrli oboydan $oboy_uzunligi metr  kerak \n";



 // Xonaning o'lchamlari
$balandlik = 2.7; // metr
$tomon1 = 5; // metr
$tomon2 = 3; // metr

// G'ishtning o'lchamlari
$g_isht_balandlik = 0.1; // metr (10 sm)
$g_isht_uzunlik = 0.25; // metr (25 sm)
$g_isht_eni = 0.12; // metr (12 sm)

// Devorning qalinligi
$devor_qalinligi = 0.25; // metr (25 sm)

// Xonaning yuzasi
$xonaning_yuzasi = $tomon1 * $tomon2;

// G'ishtning yuzasi
$g_isht_yuzasi = $g_isht_uzunlik * $g_isht_eni;

// Kerakli g'ishtlar soni
$kerakli_g_isht_soni = ceil($xonaning_yuzasi / $g_isht_yuzasi);

// G'ishtlar soni devor qalinligiga bo'ladigan kerakli g'ishtlar soni
$devor_qalinligiga_bo_ladigan_soni = ceil($devor_qalinligi / $g_isht_balandlik);

// Faqat devorlar uchun kerakli g'ishtlar soni
$faqat_devorlar_uchun_kerakli_soni = $kerakli_g_isht_soni - $devor_qalinligiga_bo_ladigan_soni;

// Natijani chiqaramiz
echo "Xonaning yuzasi: $xonaning_yuzasi kvadrat metr.\n";
echo "Kerakli g'ishtlar soni: {$kerakli_g_isht_soni} ta.\n";
echo "Devor qalinligiga bo'ladigan kerakli g'ishtlar soni: {$devor_qalinligiga_bo_ladigan_soni} ta.\n";
echo "Faqat devorlar uchun kerakli g'ishtlar soni: {$faqat_devorlar_uchun_kerakli_soni} ta.\n";



//Berilgan K-kun soni
$K = 31; // 

// 1-yanguning dushanba kuniga teng kelishi uchun 1-qo'shamiz
$K += 1;

// Haftaning kuni tartib raqamlari bilan qoldiqni topamiz
$qoldiq = $K % 7;

// Qoldiqni tartib raqamlari bilan aniq kun tartib raqamiga o'zlashtiramiz
$kun_tartibi = ($qoldiq == 0) ? 7 : $qoldiq;

// Haftaning kunlarini tartib raqamlari bilan
$hafta_kunlari = [
    0 => 'Yakshanba',
    1 => 'Dushanba',
    2 => 'Seshanba',
    3 => 'Chorshanba',
    4 => 'Payshanba',
    5 => 'Juma',
    6 => 'Shanba'
];

// Natija
echo "Berilgan K-kun, haftaning {$hafta_kunlari[$kun_tartibi]} kuni.\n";


