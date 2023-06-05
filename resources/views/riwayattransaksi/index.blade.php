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
            <a href="{{ route('penukaranpoin.update') }}">Create a data penukaran poin</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Penukaran Poin</th>
                    <th>ID Poin</th>
                    <th>ID Pelanggan</th>
                    <th>ID Konsumen</th>
                    <th>Jumlah Transaksi</th>
                    <th>Total Poin</th>
                    <th>Hadiah</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penukaranpoin as $penukaranPoin)
                    <tr>
                        <td>{{ $penukaranpoin->id_penukaranpoin}}</td>
                        <td>{{ $penukaranpoin->id_poin}}</td>
                        <td>{{ $penukaranpoin->id_pelanggan}}</td>
                        <td>{{ $penukaranpoin->id_konsumen}}</td>
                        <td>{{ $penukaranpoin->Jumlah_Transaksi}}</td>
                        <td>{{ $penukaranpoin->Total_Poin}}</td>
                        <td>{{ $penukaranpoin->Hadiah}}</td>
                        <td>
                            <a href="{{ route('penukaranpoin.edit', ['penukaranpoin' => $penukaranpoin]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
