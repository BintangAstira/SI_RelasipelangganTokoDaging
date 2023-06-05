<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Product</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{ route('poin.update') }}">Create a data poin</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Pelanggan</th>
                    <th>ID Konsumen</th>
                    <th>Jumlah Transaksi</th>
                    <th>Total Poin</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($poin as $poin)
                    <tr>
                        <td>{{ $poin->id_pelanggan }}</td>
                        <td>{{ $poin->id_konsumen}}</td>
                        <td>{{ $poin->Jumlah_Transaksi}}</td>
                        <td>{{ $poin->Total_Poin }}</td>
                        <td>
                            <a href="{{ route('poin.edit', ['poin' => $poin]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
