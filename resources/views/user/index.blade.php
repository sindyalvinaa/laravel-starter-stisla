
<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard User</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">


<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('frontDasboard/navbar-top-fixed.css')}} rel="stylesheet">
    <link href="{{asset('frontDasboard/content.css')}} rel="stylesheet">
  </head>
  <body>

@section('header')
    @include('layoutsUser.header')
@show


    {{-- <p class="lead">.</p> --}}
    {{-- <h1>In Law</h1>
    <p class="lead">Bantuan Hukum dalam Genggaman.<p> --}}
    {{-- <p class="lead">.</p> --}}

    <main class="container">
        <div class="p-5 rounded">
            {{-- <right> <h2>In Law</h2></right> --}}
    {{-- <a class="btn btn-lg btn-primary" href="/perkara" role="button">Penyelesaian Perkara</a>
    <i class="bi bi-people"></i>
    <p class="bi bi-people">Layanan bantuan hukum untuk semua permasalahan.</p> --}}
</div>
</main>




             {{-- <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2022 Company, In Lawyer.</p> --}}

    </div>
</div>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <div class="container">

<div class="card-body pb-0">
    <div class="row">
        <div class="col-xl-6">
            <div class="media flex-column flex-sm-row mt-0 mb-3">
                <div class="mr-sm-3 mb-2 mb-sm-0">
                    <div class="card-img-actions">
                        <a href="/perkara" data-abc="true">
                            <img src="{{ asset('assets/img/pengacara4.jpg') }}" class="img-fluid img-preview rounded" alt="">
                        </a>
                </div>
            </div>

            <main class="container">
                <div class="bg-light p-2 mt-2 mb-2">
                    <a class="btn btn-lg btn-primary" href="/perkara" role="button">Penyelesaian Perkara</a>
                    <p class="bi bi-people">Layanan Bantuan untuk semua permasalahan.</p>
                </div>
            </main>

            </div>
        <div class="media flex-column flex-sm-row mt-0 mb-3">
            <div class="mr-sm-3 mb-2 mb-sm-0">
                <div class="card-img-actions">
                    <a href="/Konsultasi-Management/konsultasi" data-abc="true">
                        <img src="{{ asset('assets/img/pengacara4.jpg') }}" class="img-fluid img-preview rounded" alt="">
                    </a>
                </div>
            </div>

            <main class="container">
                <div class="bg-light p-2 rounded mt-2 mb-2">
                    <a class="btn btn-lg btn-primary" href="/Konsultasi-Management/konsultasi" role="button">Konsultasi Hukum</a>
                    <p class="bi bi-people">Konsultasi hukum untuk semua permasalahan.</p>
                </div>
            </main>
        </div>

    </div>
        <div class="col-xl-6">
            <div class="media flex-column flex-sm-row mt-0 mb-3">
                <div class="mr-sm-3 mb-2 mb-sm-0">
                    <div class="card-img-actions">
                        <a href="/Perizinan-Management/perizinan" data-abc="true">
                            <img src="{{ asset('assets/img/pengacara4.jpg') }}" class="img-fluid img-preview rounded" alt="">
                        </a>
                    </div>
                </div>

                <main class="container">
                    <div class="bg-light p-2 rounded mt-2 mb-2">
                        <a class="btn btn-lg btn-primary" href="/Perizinan-Management/perizinan" role="button">Pembuatan Perizinan</a>
                        <p class="bi bi-people">Layanan untuk pembuatan perizinan.</p>
                    </div>
                </main>
            </div>

            <div class="media flex-column flex-sm-row mt-0 mb-3">
                <div class="mr-sm-3 mb-2 mb-sm-0">
                    <div class="card-img-actions">
                        <a href="/Kontrak-Management/kontrak" data-abc="true">
                            <img src="{{ asset('assets/img/pengacara4.jpg') }}" class="img-fluid img-preview rounded" alt="">
                        </a>
                    </div>
                </div>

                <main class="container">
                    <div class="bg-light p-2 rounded mt-2 mb-2">
                        <a class="btn btn-lg btn-primary" href="/Kontrak-Management/kontrak" role="button">Pembuatan Kontrak</a>
                        <p class="bi bi-people">Layanan untuk pembuatan kontrak.</p>
                    </div>
                    </main>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="media flex-column flex-sm-row mt-0 mb-3">
                <div class="mr-sm-3 mb-2 mb-sm-0">
                    <div class="card-img-actions">
                        <a href="/Perizinan-Management/perizinan" data-abc="true">
                            <img src="{{ asset('assets/img/pengacara4.jpg') }}" class="img-fluid img-preview rounded" alt="">
                        </a>
                    </div>
                </div>

                <main class="container">
                    <div class="bg-light p-2 rounded mt-2 mb-2">
                        <a class="btn btn-lg btn-primary" href="/Perizinan-Management/perizinan" role="button">Pembuatan Perizinan</a>
                        <p class="bi bi-people">Layanan untuk pembuatan perizinan.</p>
                    </div>
                </main>
            </div>
            <div class="media flex-column flex-sm-row mt-0 mb-3">
                <div class="mr-sm-3 mb-2 mb-sm-0">
                    <div class="card-img-actions">
                        <a href="/webinar" data-abc="true">
                            <img src="{{ asset('assets/img/pengacara4.jpg') }}" class="img-fluid img-preview rounded" alt="">
                        </a>
                    </div>
                </div>
                <main class="container">
                    <div class="bg-light p-2 rounded mt-2 mb-2">
                        <a class="btn btn-lg btn-primary" href="/webinar" role="button">Webinar & Siaran Langsung</a>
                        <p class="bi bi-people">Diskusi langsung dengan konsultan terpercaya.</p>
                    </div>
                </main>
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
