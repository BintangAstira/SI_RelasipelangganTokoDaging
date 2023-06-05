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
            <a href="{{route('distributor.create')}}">Create a data distributors</a>
        </div>
        <table border="1">
            <tr>
                <th>Nama Distributor</th>
                <th>No Telepon</th>
                <th>Jumlah Stok</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($distributor as $distributor )
                <tr>
                    <td>{{$distributor->Nama_Dis}}</td>
                    <td>{{$distributor->No_Telp}}</td>
                    <td>{{$distributor->Jumlah_Stok}}</td>
                    <td>{{$distributor->Email}}</td>
                    <td>
                        <a href="{{route('distributor.edit', ['distributor' => $distributor])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('distributor.destroy', ['distributor' => $distributor])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach 
        </table>
</body>
</html>