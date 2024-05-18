<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @guest
          <li class="nav-item">
            <a wire:navigate class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a wire:navigate class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <a wire:navigate class="nav-link active" aria-current="page" href="{{route('index')}}">Customer</a>
          </li>
          <li class="nav-item">
            <button wire:click="logout" class="nav-link text-danger active" >Logout</button>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
         @endauth
      </div>
    </div>
  </nav>
