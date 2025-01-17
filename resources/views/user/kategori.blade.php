
<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>KategoriUser</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('frontDashboard/kategori.css')}} rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      @section('header')
       @include('layoutsUser.header')
      @show
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <br>
          <br>
          <br>
        </div>
      </div>

      {{-- <div class="table-responsive"> --}}
        <table class="table table-striped">

          <thead>
            <tr>
              <th class="text-center"><strong>Kategori</strong></th>
              <th class="text-center"><strong>Keterangan</strong></th>
              <th class="text-center"><strong>Aksi</strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($kategoris as $key => $kategori)
                <tr>
                    <td class="text-center">{{$kategori->kategori}}</td>
                    <td class="text-center">{{$kategori->keterangan}}</td>
                    @if ($loop->last)
                        <td><button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='/galleryPerdata'">Views Detail</button></td>
                    @else
                        <td><button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='/galleryPidana'">Views Detail</button></td>
                    @endif
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

        <hr>

      </div> <!-- /container -->

    </main>

    @section('footer')
    @include('layoutsUser.footer')
    @show

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
