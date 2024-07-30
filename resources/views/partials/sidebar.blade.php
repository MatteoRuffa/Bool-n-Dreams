<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <a class="navbar-brand" href="#">Portfolio</a>
            </button>
            <div class="logo_cortese px-3">
                <img src="{{asset('image/logoCortese.jpeg')}}" alt="" class="rounded-circle">
            </div>
            @include('partials.header')
        
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Portfolio</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active{{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" 
            href="{{route('admin.dashboard')}}" aria-current="page" >Dasboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {Route::currentRouteName() == 'admin.posts.index' ? 'active' : ''}}" 
            href="{{route('admin.projects.index')}}">Project</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Carpet
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <!-- <hr class="dropdown-divider"> -->
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-dark-override" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
