@extends('layouts.base')

@section('title', 'Home page')

@section('content')

<div class="banner_section layout_padding">
   <div class="container">
      <div id="my_slider" class="carousel slide carousel-dark" data-bs-ride="carousel">
         <div class="carousel-inner">

            <div class="carousel-item active">
               <img src="{{ asset('images/shopping.png') }}" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block" id="first_slide">
                 <h1 class="carousel-text-title">All The Best Deals. Right Here.</h1>
               </div>
            </div>
            <div class="carousel-item">
               <img src="{{ asset('images/ecommerce.jpg') }}" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block" id="second_slide">
                 <h1 class="carousel-text-title">Stay Home and Shop Online!</h1>
               </div>
            </div>
            <div class="carousel-item">
               <img src="{{ asset('images/slide_watch.jpg') }}" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block" id="third_slide">
                 <h1 class="carousel-text-title">Shop for Watches</h1>
                 <p class="carousel-text-description">It's about time to buy a watch.</p>
               </div>
            </div>

         </div>

         <button class="carousel-control-prev" type="button" data-bs-target="#my_slider" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>

         <button class="carousel-control-next" type="button" data-bs-target="#my_slider" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>
      </div>
   </div>
</div>

<div class="book_section">
   <div class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="title_section">Most Sold Books</h1>
               <div class="item_section">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">The Da Vinci Code</h4>
                           <p class="price_text">Price  <span class="product_price">$11.99</span></p>
                           <div class="product_img"><img src="{{ asset('images/the_da_vinci_code.jpg') }}"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="/products/24">Buy Now</a></div>
                              <div class="seemore_bt"><a href="/categories/Books">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">Fifty Shades of Grey</h4>
                           <p class="price_text">Price  <span class="product_price">$13.99</span></p>
                           <div class="product_img"><img src="{{ asset('images/fifty_shades_of_grey.jpg') }}"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="/categories/Books">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">Twilight</h4>
                           <p class="price_text">Price  <span class="product_price">$9.99</span></p>
                           <div class="product_img"><img src="{{ asset('images/twilight.jpg') }}"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="/products/54">Buy Now</a></div>
                              <div class="seemore_bt"><a href="/categories/Books">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="electronic_section">
   <div class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="title_section">Most Sold Electronics</h1>
               <div class="item_section">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">PlayStation 5</h4>
                           <p class="price_text">Price  <span class="product_price">$499.99</span></p>
                           <div class="product_img"><img src={{ asset('images/ps5.jpg') }}></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="/categories/Electronics">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">Google Home</h4>
                           <p class="price_text">Price  <span class="product_price">$99.99</span></p>
                           <div class="product_img"><img src={{ asset('images/google_home.jpg') }}></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="/products/84">Buy Now</a></div>
                              <div class="seemore_bt"><a href="/categories/Electronics">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">Apple AirPods Pro</h4>
                           <p class="price_text">Price  <span class="product_price">$299.99</span></p>
                           <div class="product_img"><img src={{ asset('images/airpods.jpg') }}></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="/products/64">Buy Now</a></div>
                              <div class="seemore_bt"><a href="/categories/Electronics">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="watches_section">
   <div class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="title_section">Most Sold Watches</h1>
               <div class="item_section">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">Bulova Dark Dial Men???s Watch</h4>
                           <p class="price_text">Price  <span class="product_price">$179.99</span></p>
                           <div class="product_img"><img src={{ asset('images/bulova.jpg') }}></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">Calvin Klein High Noon Quartz Watch</h4>
                           <p class="price_text">Price  <span class="product_price">$149.99</span></p>
                           <div class="product_img"><img src={{ asset('images/calvin_klein_watch.jpg') }}></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="product_text">Burei Ultra Thin Black Men's Watch</h4>
                           <p class="price_text">Price  <span class="product_price">$69.99</span></p>
                           <div class="product_img"><img src={{ asset('images/burei_watch.jpg') }}></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="#">Buy Now</a></div>
                              <div class="seemore_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>

@if (Route::has('login'))
   <div class="">
      @auth
      @else
         <div id="sign_in_footer">
            <p class="line" id="first">See personalized recommendations</p>
         
            <a href="{{ route('login') }}">
               <input type="button" value="Sign in" class="line">
            </a>
            
            <p class="line">New Customer? <a id="start_here" href="{{ route('register') }}" style="">Start here</a></p>
         </div>
      @endauth
   </div>
@endif

@endsection