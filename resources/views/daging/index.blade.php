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
            <a href="{{ route('daging.update') }}">Create a data daging</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Daging</th>
                    <th>ID Pegawai</th>
                    <th>Kode Daging</th>
                    <th>Merk</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daging as $daging)
                        <tr>
                            <td>{{ $daging->id_daging}}</td>
                            <td>{{ $daging->id_pegawai}}</td>
                            <td>{{ $daging->kode_daging}}</td>
                            <td>{{ $daging->harga }}</td>
                            <td>{{ $daging->merk}}</td>
                            <td>{{ $daging->total}}</td>
                            <td>{{ $daging->tanggal}}</td>
                        <td>
                            <a href="{{ route('daging.edit', ['daging' => $daging]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
