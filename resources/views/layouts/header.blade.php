<section class="content-header">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top"> 
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/bakery-basket-bread-bake-512.png')}}" alt="logo" width="50" height="50" class="d-inline-block">
                Super Bakery
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav mr-auto"> 
                    <li class="nav-item active"> 
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="#">Gallery</a> 
                    </li> 
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Products </a> 
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                            <a class="dropdown-item" href="#">Action</a> 
                            <a class="dropdown-item" href="#">Another action</a> 
                            <div class="dropdown-divider"></div> 
                            <a class="dropdown-item" href="#">Something else here</a> 
                        </div> 
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="#">About Us</a> 
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="#">Contact</a> 
                    </li>     
                </ul> 
                <form class="form-inline my-2 my-lg-0"> 
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button> 
                </form> 
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa fa-shopping-basket p-1"></i>Cart</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a href="{{ url('main')}}" class="nav-link"><i class="fa fa-user p-1"></i>{{ __('Sign in/Sign up')}}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Account </a> 
                            <div class="dropdown-menu" aria-labelledby="navbarDrop"> 
                                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> My Profile</a> 
                                <a class="dropdown-item" href="{{ url('main/logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 <i class="fa fa-sign-out-alt"></i>{{ __('Logout') }}
                             </a>
    
                             <form id="logout-form" action="{{ url('main/logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form> 
                            </div> 
                        </li> 
                    @endguest
                </ul>
            </div> 
        </nav>
    </header>
</section>