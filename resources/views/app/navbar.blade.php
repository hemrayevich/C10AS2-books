<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
      
      <a class="navbar-brand d-flex align-items-center gap-2 fw-bold fs-4" href="{{ route('home.index') }}">
        <i class="bi bi-book-half text-warning fs-3"></i>
        <span>Ylym-Chyragy</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Menýuny aç/ýap">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('authors.index') }}">Awtorlar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('books.index') }}">Kitaplar</a>
          </li>
        </ul>

        <div class="d-flex flex-column flex-lg-row gap-2 align-items-lg-center">
          <form class="d-flex" role="search" action="{{ route('books.index') }}">
            <div class="input-group">
              <input name="search" class="form-control form-control-sm" type="search" placeholder="Kitap gözle..." aria-label="Gözleg">
              <button class="btn btn-outline-light btn-sm" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </nav>