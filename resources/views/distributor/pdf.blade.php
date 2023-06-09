<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Distributor</title>

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
    <h1>Data Distributor</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">Nama Distributor</th>
                <th>No Telepon</th>
                <th>Jumlah Stok</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distributor as $row)
                <tr>
                    <td class="center">{{ $row->Nama_Dis }}</td>
                    <td>{{ $row->No_Telp }}</td>
                    <td>{{ $row->Jumlah_Stok}}</td>
                    <td>{{ $row->Email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>