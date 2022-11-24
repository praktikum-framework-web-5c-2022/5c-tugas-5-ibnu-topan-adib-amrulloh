<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-10">DATA MATA KULIAH</h1>
        {{ $matakuliah->links()}}
        <div class="row">
            @forelse ($matakuliah as $mk)
                
           
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-body">                      
                        <h5 class="card-title d-inline-block">{{$mk->nama_mk}}</h5>
                        <small>(</small><small class="d-inline-block text-danger">{{$mk->kode_mk}}</small><small>)</small>
                        <small class="d-inline-block" style="position: absolute; top: 1.25em; right: 1.25em;">{{$mk->sks}} sks</small>
                        <p class="card-text">{{$mk->nama_dosen}}</p>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center fs-4">No Post Found</p>
            @endforelse
        </div>
       
    </div>

   
    
</body>

</html>
