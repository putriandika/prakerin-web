<?php

require_once __DIR__ . '/vendor/autoload.php';

include('connection_tambah_bank.php');
$query      = mysqli_query($connect, "SELECT * FROM tb_bank");
$results    = mysqli_fetch_all($query, MYSQLI_ASSOC);

$date   = date('l, d-m-Y');
$html   = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/print.css">
    <title>Document</title>
</head>
<body>

<div class="row">
        <div class="col-md-5">
            <img src="oke.png" width="50px" height="50px">
        </div>
        <div class="col-md-7">
            <h4>Sekolah Menengah Kejuruan Negeri 1 Pasuruan<br>
            Jalan Veteran 11 Pasuruan, Telp/Fax (0343) 421380<br>
            Website: www.smkn1-pasuruan.sch.id, Email: smkn1pasuruan@yahoo.com</h4>
        </div>
    </div>
<table border="1">
<tr>
    <th style="width: 50px;">No.</th>
    <th style="width: 200px;">Nama Bank</th>
    <th style="width: 200px;">URL</th>
    <th style="width: 200px;">Logo</th>
    <th style="width: 200px;">Status</th>

</tr>';

$i = 1;
foreach ($results as $result) {
    $html .= '<tr>
        <td>' . $i++ . '</td>
        <td>' . $result['nama'] . '</td>
        <td>' . $result['url'] . '</td>
        <td>' . $result['logo'] . '</td>
        <td>' . $result['status'] . '</td>
    </tr>';
}

$html .= '</table>
<p>' . $date . '</p>
</body>
</html>
';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('Data Bank.pdf', \Mpdf\Output\Destination::INLINE);
