<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Konsunen</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('konsumen.create')}}">Create a Data Konsumens</a>
        </div>
        <table border="1">
            <tr>
                <th>Nama Konsumen</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($konsumen as $konsumen )
                <tr>
                    <td>{{$konsumen->nama}}</td>
                    <td>{{$konsumen->no_Telp}}</td>
                    <td>{{$konsumen->alamat}}</td>
                    <td>
                        <a href="{{route('konsumen.edit', ['konsumen' => $konsumen])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('konsumen.destroy', ['konsumen' => $konsumen])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>