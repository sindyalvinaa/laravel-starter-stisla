<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">In Lawyer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
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
        <form class="d-flex" >
            <a href="/login" class="btn btn-outline-success me-3">Login</a>
            <a href="/register" class="btn btn-outline-success">register</a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="btn btn-outline-success">
                <i class="btn btn-outline-success"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
                @csrf
            </form>
        </form>
      </div>
    </div>
  </nav>
