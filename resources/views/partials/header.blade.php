<header class="d-flex align-items-center flex-wrap px-3">

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img width="100px" class="logo-laravel" src="https://www.coine.it/wp-content/uploads/2022/03/laravel-featured.png" alt="logo Laravel">
                </a>
            </div>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="{{Route::currentRouteName() === 'trains' ? 'active' : ''}}" href="{{route('trains')}}">Treni</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

</header>
