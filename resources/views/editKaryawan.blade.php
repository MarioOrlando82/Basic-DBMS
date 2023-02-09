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
    <div class="my-5 mx-5">
        <h1 class="text-center">Menambahkan Karyawan</h1>
        <form action="/update-karyawan/{{$karyawan->id}}" method="POST">
            @csrf
            @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nama" minlength="5" maxlength="20" required value="{{$karyawan->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Umur Karyawan</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="Umur" min="20" minlength="2" required value="{{$karyawan->Umur}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat Karyawan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Alamat"  minlength="10" maxlength="40" required value="{{$karyawan->Alamat}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor Telepon Karyawan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Telepon"  minlength="9" maxlength="12" required value="{{$karyawan->Telepon}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>