<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Daging</title>

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
    <h1>Data Daging</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">ID Daging</th>
                <th>ID Pegawai</th>
                <th>Kode Daging</th>
                <th>Harga</th>
                <th>Merk</th>
                <th>Total</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daging as $row)
                <tr>
                    <td class="center">{{ $row->id_daging }}</td>
                    <td>{{ $row->id_pegawai }}</td>
                    <td>{{ $row->kode_daging}}</td>
                    <td>{{ $row->harga}}</td>
                    <td>{{ $row->merk}}</td>
                    <td>{{ $row->total}}</td>
                    <td>{{ $row->tanggal}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>