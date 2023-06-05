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
            <a href="{{route('pegawai.create')}}">Create a Product</a>
        </div>
        <table border="1">
            <tr>
                <th>Nama pegawai</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($pegawai as $pegawai )
                <tr>
                    <td>{{$pegawai->Nama_pegawai}}</td>
                    <td>{{$pegawai->Alamat}}</td>
                    <td>{{$pegawai->No_Telp}}</td>
                    <td>{{$pegawai->Email}}</td>
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
            <a href="{{route('pegawai.create')}}">Create a Data Pegawai</a>
        </div>
        <table border="1">
            <tr>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($pegawai as $pegawai )
                <tr>
                    <td>{{$pegawai->Nama_Pegawai}}</td>
                    <td>{{$pegawai->Alamat}}</td>
                    <td>{{$pegawai->No_Telp}}</td>
                    <td>{{$pegawai->Email}}</td>
                    <td>
                        <a href="{{ route('pegawai.edit', ['pegawai' => $pegawai]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>