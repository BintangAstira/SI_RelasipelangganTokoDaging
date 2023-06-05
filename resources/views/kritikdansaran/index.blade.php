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
            <a href="{{ route('kritiksaran.update') }}">Create a data penukaran poin</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Kritik Saran</th>
                    <th>ID Pelanggan</th>
                    <th>ID Konsumen</th>
                    <th>Kritik</th>
                    <th>Saran</th>
                    <th>Tanggal</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kritiksaran as $kritiksaran)
                    <tr>
                        <td>{{ $kritiksaran->id_kritiksaran}}</td>
                        <td>{{ $kritiksaran->id_pelanggan}}</td>
                        <td>{{ $kritiksaran->id_konsumen}}</td>
                        <td>{{ $kritiksaran->saran}}</td>
                        <td>{{ $kritiksaran->kritik}}</td>
                        <td>{{ $kritiksaran->tanggal}}</td>
                        <td>{{ $kritiksaran->Email}}</td>
                        <td>
                            <a href="{{ route('kritiksaran.edit', ['kritiksaran' => $kritiksaran]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
