<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Meksiko</title>
</head>

<style>
    *{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }

    nav{
        font-weight: bold
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">PT. Meksiko</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-
            controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">LIST KARYAWAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/create-karyawan">ADD KARYAWAN</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Karyawan" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div style="background-color:#F5F5F5">
    <h1 class="text-center" style="font-weight: bold" >LIST KARYAWAN</h1>
    <table class="table table-bordered" class=".ms-1">
        <thead>
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
                <tr>
                <td>{{$karyawan->Nama}}</td>
                <td>{{$karyawan->Umur}}</td>
                <td>{{$karyawan->Alamat}}</td>
                <td>{{$karyawan->Telepon}}</td>
                <td class="text-center">
                    <a href="{{route('edit', $karyawan -> id)}}" class="btn btn-success">Edit</a>
                </td>
                <td class="text-center">
                    <form action="/delete-karyawan/{{$karyawan->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button  class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
