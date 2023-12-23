<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Surat</title>
    <style>
        /* Gaya CSS untuk tata letak surat */
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .header {
            text-align: left;
            letter-spacing: normal;
            margin-bottom: 20px;
        }
        table.unstyledTable td, table.unstyledTable th {
            border: 0px solid #AAAAAA;
            padding: 0px 10px;
            font-size: 15px;
        }
        table.minimalistBlack {
            border: 3px solid #000000;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        table.minimalistBlack td, table.minimalistBlack th {
            border: 1px solid #000000;
            padding: 5px 4px;
        }
        table.minimalistBlack tbody td {
            font-size: 15px;
        }
        table.minimalistBlack thead {
        }
        table.minimalistBlack thead th {
            font-size: 15px;
            font-weight: bold;
            color: #000000;
            text-align: center;
        }
        table.minimalistBlack tfoot td {
            font-size: 14px;
        }

        .header h4{
            text-align: center;
            margin-top: 20px
        }
        .content {
            margin-bottom: 30px;
        }
        .footer {
            text-align: left;
        }
        table.ttd {
            width: 75%;
            text-align: left;
        }
        table.ttd td, table.ttd th {
            padding: 10px 2px;
            font-size: 14px;
        }
        table.ttd tbody td {
            font-size: 14px;
      
        }

    </style>
</head>
<body>
    <div class="header">
        <table class="unstyledTable">
            <tbody>
            <tr>
                <td>Tanggal</td>
                <td>: 11-12-2023</td>
            </tr>
            <tr>
                <td>Kepada</td>
                <td>: Pemegang User CBS Corsys</td>
            </tr>
            <tr>
                <td>Dari</td>
                <td>: Bagian IT</td>
            </tr>
            <tr>
                <td>Cc</td>
                <td>: SKAI, SKK, dan SKMR</td>
            </tr>
            </tbody>          
        </table>
        <h4>Laporan Pemberitahuan Update Pada Core Banking System (CBS) Corsys</h4>
    </div>
    <div class="content">
        <table class="minimalistBlack">
            <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Update</th>
                <th>Perihal</th>
                <th>Nama File Update</th>
                <th>Alasan Update</th>
                <th>Hasil yang Didapat</th>
            </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->date }}</td>
                <td>{{ $data->perihal }}</td>
                <td>{{ $data->name_file }}</td>
                <td>{{ $data->alasan }}</td>
                <td>{{ $data->alasan }}</td>
                </tr>
            </tbody>
            </table>
            <div id="gtx-trans" style="position: absolute; left: 379px; top: -4.71875px;">&nbsp;</div>
        <p>Sehubungan dengan adanya update pada CBS Corsys sesuai dengan table di atas, maka dimohon kepada pemehang user CBS Corsys untuk melakukan updating atau proses "Goodsync". Demikian kamu sampaikan, terimakasih</p>
    </div>
    <div class="footer">
        <table class="ttd">
            <tbody>
            <tr>
                <td>Menyetujui,</td>
                <td></td>
                <td>Membuat,</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Munkaris<br>
                    <strong>Kabag IT</strong>
                </td>
                <td></td>
                <td>
                    Agung <br>
                    <strong>Staff TI</strong>
                </td>
            </tr>
            </tbody>
            </tr>
        </table>
        
    </div>
</body>
</html>
