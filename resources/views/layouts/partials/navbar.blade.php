<header class="p-3 bg-dark text-white">
  <div class="container">
      <header class="tm-site-header">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                  <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>
                <h1 class="tm-site-name">Shelf</h1>
                <p class="tm-site-description">Your Online Bookstore</p>
                
                <nav class="navbar navbar-expand-md tm-main-nav-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                        <ul class="nav nav-fill tm-main-nav-ul">
                            <li class="nav-item"><a class="nav-link active" href="index">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Catalogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Awards</a></li>
                            <li class="nav-item"><a class="nav-link" href="team">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @guest
                                <a class="dropdown-item" href="{{ route('login.perform') }}">Login</a>
                                <a class="dropdown-item" href="{{ route('register.perform') }}">Register</a>
                            @endguest
                            @auth
                                {{auth()->user()->name}}
                                <a class="dropdown-item" href="{{ route('logout.perform') }}">Logout</a>
                                <a class="dropdown-item" href="{{ route('inventory.perform') }}">Add Book</a>
                            @endauth
                                <a class="dropdown-item" href="readOnline">Read Online</a>
                                <a class="dropdown-item" href="readOnline">order Online</a>
                                <a class="dropdown-item" href="readOnline">Rent</a>
                                <a class="dropdown-item" href="{{ route('inventory.showLibrary') }}">Liberary</a>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                
            </header>
      
     
  </div>
</header>