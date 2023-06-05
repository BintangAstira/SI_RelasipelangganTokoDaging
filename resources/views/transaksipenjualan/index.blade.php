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
            <a href="{{ route('transaksi.update') }}">Create a data Transaksi Penjualan</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Transaksi Penjualan</th>
                    <th>ID Riwayat Transaksi</th>
                    <th>ID Daging</th>
                    <th>Jumlah Transaksi</th>
                    <th>Tanggal</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id_transaksip}}</td>
                        <td>{{ $transaksi->id_riwayattransaksi}}</td>
                        <td>{{ $transaksi->id_daging}}</td>
                        <td>{{ $transaksi->Jumlah_Transaksi}}</td>
                        <td>{{ $transaksi->tanggal}}</td>
                        <td>
                            <a href="{{ route('transaksi.edit', ['transaksi' => $transaksi]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
