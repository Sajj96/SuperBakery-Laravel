<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>{{ __('Home|Page') }}</title>
</head>
<body>
@include('layouts.header')
{{-- Main layout --}}
{{-- Carousel for main image slider --}}
<section class="content-section">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
    <ol class="carousel-indicators"> 
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> 
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
    </ol> 
    <div class="carousel-inner"> 
      <div class="carousel-item active"> 
        <img class="d-block w-100" src="{{asset('images/images.jpeg-41.jpg')}}" alt="First slide" height="380">
        <div class="carousel-caption d-md-block">
            <h5 class="caption">Best Milk Breads</h5>
            <p class="desc">A well baked milk bread with delicious taste for you and your family at any time.</p>
            <p class="desc">Made by best chef in city with a lot of good ingredients for you to try.</p>
            <button type="button" class="btn btn-shop">SHOP NOW</button>
        </div> 
      </div> 
      <div class="carousel-item"> 
        <img class="d-block w-100" src="{{asset('images/chocolate-chip-cookies-desktop-wallpapers_092353248.jpg')}}" alt="Second slide" height="380">
        <div class="carousel-caption d-md-block text-right">
            <h5 class="caption">Chocolate Cookies</h5>
            <p class="desc">A well made chocolate cookie with delicious taste for you and your family at any time.</p>
            <p class="desc">Made by best chef in city with a lot of good ingredients for you to try.</p>
            <button type="button" class="btn btn-shop">SHOP NOW</button>
        </div>  
      </div> 
      <div class="carousel-item"> 
        <img class="d-block w-100" src="{{asset('images/images.jpeg-35.jpg')}}" alt="Third slide" height="380">
        <div class="carousel-caption d-md-block text-left">
            <h5 class="caption">Sweet Cherry Cakes</h5>
            <p class="desc">The strawberyy chocolate cake with delicious taste for you and your family at any time.</p>
            <p class="desc">Made by best chef in city with a lot of good ingredients for you to try.</p>
            <button type="button" class="btn btn-shop">SHOP NOW</button>
        </div> 
      </div> 
    </div> 
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> 
      <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
      <span class="sr-only">Previous</span> 
    </a> 
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> 
      <span class="carousel-control-next-icon" aria-hidden="true"></span> 
      <span class="sr-only">Next</span> 
    </a> 
  </div> 
</section>
{{-- Section for card deck --}}
<section class="content-products-section">
    {{-- Cakes container --}}
    <div class="container cakes-container">
        <div class="row cakes-row card-deck">
            {{-- <div class="card-deck cakes-deck "> --}}
                <div class="card">
                    <img  class="card-img-top" src="{{asset('images/apple-cake.jpg')}}" alt="cakes" srcset="">
                    <div class="card-body">
                        <h3 class="card-title">Apple Cakes</h3>
                        <p class="card-text"><strike class="oldcost">Tsh 16000</strike> <strong class="newcost">Tsh 12000</strong></p>
                        <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="5one"   class="fa fa-star"></span>
                    </div>
                </div>
                <div class="card">
                        <img  class="card-img-top" src="{{asset('images/images.jpeg-14.jpg')}}" alt="cakes" srcset="">
                        <div class="card-body">
                            <h3 class="card-title">Rose Birthday Cake</h3>
                            <p class="card-text"><strike class="oldcost">Tsh 14000</strike> <strong class="newcost">Tsh 11000</strong></p>
                            <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="5one"   class="fa fa-star checked"></span>
                        </div>
                </div>
                {{-- <div class="w-100 d-none d-sm-block d-md-none"></div> --}}
                <div class="card mb-4">
                        <img  class="card-img-top" src="{{asset('images/cake-structures_f.jpg')}}" alt="cakes" srcset="">
                        <div class="card-body">
                            <h3 class="card-title">Wedding Cape Cake</h3>
                            <p class="card-text"><strike class="oldcost">Tsh 50000</strike> <strong class="newcost">Tsh 40000</strong></p>
                            <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="5one"   class="fa fa-star"></span>
                        </div>
                </div>
                {{-- <div class="w-100 d-none d-md-block d-lg-none"></div> --}}
                <div class="card mb-4">
                        <img  class="card-img-top" src="{{asset('images/images.jpeg-13.jpg')}}" alt="cakes" srcset="">
                        <div class="card-body">
                            <h3 class="card-title">Cool Cakes</h3>
                            <p class="card-text"><strike class="oldcost">Tsh 16000</strike> <strong class="newcost">Tsh 12000</strong></p>
                            <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="4one"   class="fa fa-star"></span>
                            <span  onclick="starmark(this)" id="5one"   class="fa fa-star"></span>
                        </div>
                </div>
                {{-- <div class="w-100 d-none d-sm-block d-md-none"></div> --}}
                <div class="card mb-4">
                        <img  class="card-img-top" src="{{asset('images/photo.jpg')}}" alt="cakes" srcset="">
                        <div class="card-body">
                            <h3 class="card-title">Grapes Cakes</h3>
                            <p class="card-text"><strike class="oldcost">Tsh 20000</strike> <strong class="newcost">Tsh 15000</strong></p>
                            <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                            <span  onclick="starmark(this)" id="5one"   class="fa fa-star checked"></span>
                        </div>
                </div>
                {{-- <div class="w-100 d-none d-lg-block d-xl-none"></div> --}}
            {{-- </div> --}}
        </div>
        <div class="slider-btn">
            <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
            <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
        </div>
    </div>
    {{-- Description --}}
    <div class="row pt-1 descriptions">
        <div class="col">
             <h3 class="bread-caption">Featured Products</h3>
             <p class="bread-caption-two">Delicious bread with milk flavour, made with pure yiest and flour. Best in market.</p>
        </div>
    </div> 
    {{-- Breads container --}}
    <div class="container bread-container pt-6">
            <div class="row bread-row card-deck">
                <div class="card mb-4">
                    <img  class="card-img-top" src="{{asset('images/imageService.jpeg.jpg')}}" alt="cakes" srcset="">
                    <div class="card-body">
                        <h3 class="card-title">Italian Bread</h3>
                        <p class="card-text"><strike class="oldcost">Tsh 5000</strike> <strong class="newcost">Tsh 3500</strong></p>
                        <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="5one"   class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="card mb-4">
                    <img  class="card-img-top" src="{{asset('images/product_life.png')}}" alt="cakes" srcset="">
                    <div class="card-body">
                        <h3 class="card-title">Brown Sugar Bread</h3>
                        <p class="card-text"><strike class="oldcost">Tsh 2000</strike> <strong class="newcost">Tsh 1500</strong></p>
                        <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="5one"   class="fa fa-star "></span>
                    </div>
                </div>
                <div class="card mb-4">
                    <img  class="card-img-top" src="{{asset('images/product_life.png')}}" alt="cakes" srcset="">
                    <div class="card-body">
                        <h3 class="card-title">Brown Sugar Bread</h3>
                        <p class="card-text"><strike class="oldcost">Tsh 3000</strike> <strong class="newcost">Tsh 2000</strong></p>
                        <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="5one"   class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="card mb-4">
                    <img  class="card-img-top" src="{{asset('images/product_life.png')}}" alt="cakes" srcset="">
                    <div class="card-body">
                        <h3 class="card-title">Brown Sugar Bread</h3>
                        <p class="card-text"><strike class="oldcost">Tsh 3000</strike> <strong class="newcost">Tsh 2000</strong></p>
                        <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="5one"   class="fa fa-star "></span>
                    </div>
                </div>
                <div class="card mb-4">
                    <img  class="card-img-top" src="{{asset('images/0007882110008_0600.png')}}" alt="cakes" srcset="">
                    <div class="card-body">
                        <h3 class="card-title">Brown Bread</h3>
                        <p class="card-text"><strike class="oldcost">Tsh 3000</strike> <strong class="newcost">Tsh 2000</strong></p>
                        <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="4one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="5one"   class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="card mb-4">
                    <img  class="card-img-top" src="{{asset('images/0007882110008_0600.png')}}" alt="cakes" srcset="">
                    <div class="card-body">
                        <h3 class="card-title">Brown Bread</h3>
                        <p class="card-text"><strike class="oldcost">Tsh 3000</strike> <strong class="newcost">Tsh 2000</strong></p>
                        <span  onclick="starmark(this)" id="1one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="2one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="3one"   class="fa fa-star checked"></span>
                        <span  onclick="starmark(this)" id="4one"   class="fa fa-star "></span>
                        <span  onclick="starmark(this)" id="5one"   class="fa fa-star "></span>
                    </div>
                </div>
            </div>
            <div class="slider-btn">
                <span class="prev position-top-bread"><i class="fas fa-chevron-left"></i></span>
                <span class="next position-top-bread right-0"><i class="fas fa-chevron-right"></i></span>
            </div>
    </div>
</section>
{{-- Stores section --}}
<section class="content-section content-stores">
    <div class="container store-container">
        <div class="row">
            <div class="col store-caption">
            <h2>Our Stores</h2>
            <p>You can find a lot in our stores located in different cities.</p>
            </div>
        </div>
        <div class="row">
            <div class="card-deck">
                <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/Dar-store.jpg')}}" alt="dar_store" id="store-img">
                            <div class="card-body">
                                <h3 class="card-title">Dar es Salaam Store</h3>
                                <p class="card-text"><small>For all our customers we are available all week days.</small></p>
                                <p class="contacts"><i class="fa fa-phone-square"></i> +255 659608434 </p>
                                <p class="contacts"><i class="fa fa-envelope-square"></i> dar_store@superbakery.com</p>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/dodoma-store.jpg')}}" alt="dar_store" id="store-img">
                        <div class="card-body">
                            <h3 class="card-title">Dodoma Store</h3>
                            <p class="card-text"><small>For all our customers we are available all week days.</small></p>
                            <p class="contacts"><i class="fa fa-phone-square"></i> +255 659608434 </p>
                            <p class="contacts"><i class="fa fa-envelope-square"></i> dom_store@superbakery.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/bakery-staff.jpg')}}" alt="dar_store" id="store-img">
                        <div class="card-body">
                            <h3 class="card-title">Bukoba Store</h3>
                            <p class="card-text"><small>For all our customers we are available all week days.</small></p>
                            <p class="contacts"><i class="fa fa-phone-square"></i> +255 659608434  </p>
                            <p class="contacts"><i class="fa fa-envelope-square"></i> bk_store@superbakery.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    
@include('layouts.footerscripts') 
<script src="{{asset('js/home.js')}}"></script>
</body>
</html>