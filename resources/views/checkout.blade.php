<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            @foreach ($pages_array as $item)
           
              @if($data->id == $item->id_brg)
              <h3>Nama Barang : {{$data->name}}</h3>
              @endif
            <small>Barang yang diambil :  {{$item->brg_ambil}} </small>  
            <br>
          <small>Harga /Brg : {{$data->cost}} x {{$item->brg_ambil}}</small>
          <hr>
          
            <small style="float:right">Total Bayar : {{$item->hasil}}</small>
            @endforeach
            <a href="/" class="btn btn-outline-primary btn-sm">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>