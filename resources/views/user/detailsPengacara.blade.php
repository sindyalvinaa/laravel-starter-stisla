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
    <link href="{{asset('frontDashboard/bio.css')}} rel="stylesheet">

  </head>
  <body>

    @section('header')
    @include('layoutsUser.header')
   @show
   <br>
   <br>
   <br>
   <br>
 <div class="container bootstrap snippets bootdey">
    <div class="profile card">
        <div class="profile-body">
            <div class="profile-bio">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="img-thumbnail md-margin-bottom-10" src="{{asset('assets/img/'.$pidana->foto)}}" alt="">
                        <br>
                        <br>
                        <a href="https://wa.me/{{ $pidana->telp }}" class="btn btn-sm btn-info btn-icon"><i class="fas fa-phone"></i> Hubungi Pengacara</a>
                    </div>
                    <div class="col-md-7">
                        <h2>{{$pidana->nama_pengacara}}</h2>
                        <span><strong>Kategori  :</strong>{{$pidana->kategori}}</span>
                        {{-- <span><strong>Position:</strong> Web Designer</span> --}}
                        <hr>
                        <p><strong>Profil  :</strong>{{$pidana->profil}}</p>
                        <p><strong>Keterangan  :</strong>Keterangan : {{$pidana->keterangan}}</p>

                        {{-- <p>Proin mauris odio, pharetra quis ligula non, vulputate vehicula quam. Nunc in libero vitae nunc ultricies tincidunt ut sed leo. Sed luctus dui ut congue consequat. Cras consequat nisl ante, nec malesuada velit pellentesque ac. Pellentesque nec arcu in ipsum iaculis convallis.</p> --}}
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>
@section('footer')
       @include('layoutsUser.footer')
      @show

  </body>
</html>
