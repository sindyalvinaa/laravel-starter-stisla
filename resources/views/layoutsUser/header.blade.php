<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">In Lawyer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav  mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboardUser">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kategoriUser">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Datadiri-Management/datadiri">Profil Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hubungi Kami</a>
            </li>


        </ul>

        <ul class="navbar-nav ms-auto">
            @guest




            @if (Route::has('login'))
                <li class="nav-item ms-auto">
                    <a href="/login" class="btn btn-outline-success me-3">Login</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item ms-auto">
                    <a href="/register" class="btn btn-outline-success me-3">register</a>
                </li>
            @endif
        @else

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link-lg" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle me-1" style="width: 2em">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                </li>
            </ul>
        </li>
        @endguest
        </ul>
            {{-- <form class="d-flex" >


                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="btn btn-outline-success">
                    <i class="btn btn-outline-success"></i> Logout
                </a>
                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form> --}}

            {{-- </form> --}}



      </div>
    </div>
  </nav>
