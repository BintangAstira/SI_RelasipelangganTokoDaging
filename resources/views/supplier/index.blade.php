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
            <a href="{{ route('supplier.update') }}">Create a data supplier</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Supplier</th>
                    <th>No Telepon</th>
                    <th>Perusahaan</th>
                    <th>Alamat</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supplier as $supllier)
                    <tr>
                        <td>{{ $supllier->Nama_Supllier }}</td>
                        <td>{{ $supllier->No_Telp }}</td>
                        <td>{{ $supllier->Perusahaan }}</td>
                        <td>{{ $supllier->Alamat }}</td>
                        <td>
                            <a href="{{ route('supplier.edit', ['supplier' => $supllier]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
