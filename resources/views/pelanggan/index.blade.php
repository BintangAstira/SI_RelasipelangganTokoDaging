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
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('pelanggan.create')}}">Create a Product</a>
        </div>
        <table border="1">
            <tr>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($pelanggan as $pelanggan )
                <tr>
                    <td>{{$pelanggan->Nama_Pelanggan}}</td>
                    <td>{{$pelanggan->Alamat}}</td>
                    <td>{{$pelanggan->No_Telp}}</td>
                    <td>
                        
                    <a href="{{route('pelanggan.edit', ['pelanggan' => $pelanggan])}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>