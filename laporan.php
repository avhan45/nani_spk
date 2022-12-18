<?php
include 'core/config.php';
require_once __DIR__ . '/vendor/autoload.php';

$no=1;
$query3 = "SELECT * FROM rangking INNER JOIN guru WHERE rangking.id_guru=guru.id_guru ORDER BY nilai_rangking DESC";
$r = mysqli_query($con, $query3);

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rangking SPK SAW</title>
   
</head>
<body>
    <h1>Data Rangking SPK SAW</h1>
    <table border="1" cellpadding="10" cellspacing="0">
               
        <thead>
        <tr>
            <th scope="col">Rangking</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Nilai</th>
        </tr>
        </thead>
        <tbody>';
    foreach($r as $rw){
        $html .= '<tr>
                <td>'.$no++.'</td>
                <td>'.$rw['nama_guru'].'</td>
                <td>'.round($rw['nilai_rangking'],3).'</td>
        </tr>';
    }
$html .='</tbody>
</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Laporan_SPK_SAW.pdf', \Mpdf\Output\Destination::INLINE);

