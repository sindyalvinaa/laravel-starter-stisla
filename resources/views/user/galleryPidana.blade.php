
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

    <title>Jumbotron Template for Bootstrap</title>

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

      <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center">NO</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Profil</th>

            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($pidana as $index => $row)
            <tr>
                <th scope="row">{{ $index + $pidana->firstItem() }}</th>
                <td class="text-center">
                    <img src="{{ asset('assets/img/'.$row->foto) }}" alt="" style="width:80px; height: 100px" class="mb-3 mt-3 ">
                </td>
                <td class="text-center">{{ $row->nama_pengacara }}</td>
                <td class="text-center">{{$row->kategori}}</td>
                <td class="text-center">{{$row->profil}}</td>

                <td class="text-center">
                    <a href="{{url('detailsPengacara/'.$row->id)}}" class="btn btn-sm btn-primary btn-icon"><i class="fas fa-edit"></i>Details</a>
                    {{-- <button type="button" class="btn btn-sm btn-warning btn-icon"><i class="fas"></i>Detail</button> --}}

                </td>
            </tr>
            @endforeach
        </tbody>
  </table>
  {{ $pidana->links() }}

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
