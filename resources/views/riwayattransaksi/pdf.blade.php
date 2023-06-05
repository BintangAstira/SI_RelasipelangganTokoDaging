<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Riwayat Transaksi</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Riwayat Transaksi</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">ID Riwayat Transaksi</th>
                <th>ID Pelanggan</th>
                <th>ID Konsumen</th>
                <th>Jumlah Barang</th>
                <th>Tanggal Transaksi</th>
                <th>Total</th>
                <th>Metode Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($riwayattransaksi as $row)
                <tr>
                    <td class="center">{{ $row->id_riwayattransaksi }}</td>
                    <td>{{ $row->id_pelanggan }}</td>
                    <td>{{ $row->id_konsumen}}</td>
                    <td>{{ $row->jumlah_barang}}</td>
                    <td>{{ $row->tanggal_transaksi}}</td>
                    <td>{{ $row->total}}</td>
                    <td>{{ $row->Metode_bayar}}</td>



                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>