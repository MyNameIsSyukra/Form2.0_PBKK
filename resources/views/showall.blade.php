<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color:  #d0e7d2 ;">
    <div class="row" style="margin-top:10vh;">
        <div class="col-4 offset-4">
            <div class="container text-centerborder rounded" style="background-color:cadetblue;">
                <h1>Hasil Submit</h1>
                <div class="mt-4">
                    <p>Berikut merupakan semua data yang ada di DB:</p>
                    @foreach ($data as $item)
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $item->nama}}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $item->email }}</li>
                        <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $item->tanggalLahir}}</li>
                        <li class="list-group-item"><strong>Skor:</strong> {{ $item->skor}}</li>
                        <li class="list-group-item mb-3"><strong>Foto:</strong> <img src="{{asset('storage/images/'.$item->foto)}}" alt="Gambar" class="img-fluid"></li>            
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>