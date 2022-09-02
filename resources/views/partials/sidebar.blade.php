<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <svg class="bi pe-none me-2" width="40" height="32">
      <use xlink:href="/bootstrap-icons.svg#bootstrap"></use>
    </svg>
    <span class="fs-4">Laravel Movies</span>
  </a>

  <hr>

  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="{{ route('admin.home') }}"
        class="nav-link {{ Request::route()->getName() === 'admin/home' ? 'active' : '' }}" aria-current="page">
        <svg class="bi pe-none me-2 text-light" width="16" height="16">
          <use xlink:href="/bootstrap-icons.svg#house-fill"></use>
        </svg>
        Home
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('home') }}" class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}"
        aria-current="page">
        <svg class="bi pe-none me-2 text-light" width="16" height="16">
          <use xlink:href="/bootstrap-icons.svg#house-fill"></use>
        </svg>
        Home Publica
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('admin.movies.index') }}"
        class="nav-link {{ Request::route()->getName() === 'admin.movies.index' ? 'active' : '' }}" aria-current="page">
        <svg class="bi pe-none me-2 text-light" width="16" height="16">
          <use xlink:href="/bootstrap-icons.svg#patch-question-fill"></use>
        </svg>
        Movies
      </a>
    </li>

  </ul>
  <hr>
  <div class="dropdown">
    @auth<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
      data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>{{ Auth::user()->name }}</strong>
    </a>
    @endauth
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf

          <button class="dropdown-item" type="submit">
            Logout
          </button>
        </form>
      </li>
    </ul>
  </div>
</div>
