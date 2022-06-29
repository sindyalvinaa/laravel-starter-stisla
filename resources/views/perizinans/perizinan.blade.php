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
<meta name="csrf-token" content="{{ csrf_token() }}">



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
    {{-- <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/components.css"> --}}
  </head>
  <body>

@section('header')
@include('layoutsUser.header')
@show
<br>
<br>
<br>
    {{-- <section class="section"> --}}
        <div class="container">
        <div class="section-header text-center">
            <h1>Detail Perizinan</h1>
            {{-- <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div> --}}
        </div>
        <div class="section-body">
            <a href="/Perizinan-Management/tambahperizinan" class="btn btn-success mb-2">Tambah Detail Perizinan</a>

            <div class="row g-3 align-items-center mt-1 mb-2">
                <div class="col-auto">
                    <form action="/Perizinan-Management/perizinan" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelp">
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>

            <table class="table table-striped">
                    <thead>
                      <tr>
                        {{-- <th class="text-center">No</th> --}}
                        <th class="text-center">Nama Perizinan</th>
                        <th class="text-center">Lembaga</th>
                        <th class="text-center">Lama Pengerjaan</th>
                        <th class="text-center">Biaya</th>
                        <th class="text-center">Persyaratan</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $no = 1;
                        @endphp --}}
                        @foreach ($data as $index => $row)
                        <tr>
                            <td class="text-center">{{$row->nama}}</td>
                            <td class="text-center">{{$row->lembaga}}</td>
                            <td class="text-center">{{$row->lama}}</td>
                            <td class="text-center">{{$row->biaya}}</td>
                            <td class="text-center">{{$row->persyaratan}}</td>
                            <td class="text-center">
                                <a href="/Perizinan-Management/tampildata/{{ $row->id }}" class="btn btn-sm btn-primary btn-icon"><i class="fas fa-edit"></i>Edit</a>
                                <a href="/Perizinan-Management/delete/{{ $row->id }}" class="btn btn-sm btn-danger btn-icon"><i class="fas fa-times"></i>Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
              {{ $data->links() }}
        </div>
        </div>
    {{-- </section> --}}
@section('footer')
@include('layouts.footer')
@show
  </body>
</html>
