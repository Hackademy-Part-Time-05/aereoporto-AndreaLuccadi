<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aereoporto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <h1>AEREOPORTO</h1>
    <!--card voli-->
    <div class="row">
      @foreach ($voli as $volo)
      <div class="card d-flex col-lg-4 mb-5 m-3" style="width: 18rem;">
          <img src="{{$volo['cover']}}" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="{{route('show',['id'=>$volo['id']])}}">
              <h5 class="card-title" style="color: {{$volo['color']}}">{{$volo['destination']}}</h5>
            </a>
          </div>
      </div>     
      @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>