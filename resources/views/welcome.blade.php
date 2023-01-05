<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- PAGE settings -->
        <link rel="icon" href="{{asset('gustitos.ico')}}">
        <title>Gustitos de la Selva</title>
        <meta name="description" content="Sientete como en la selva">
        <meta name="keywords" content="comida restaurante selva tacacho cecina patarashca pescado gustitos">
        <!-- CSS dependencies -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/elegant.css')}}">
        <!-- Script: Make my navbar transparent when the document is scrolled to top -->
        <script src="{{asset('js/navbar-ontop.js')}}"></script>
        <!-- Script: Animated entrance -->
        <script src="{{asset('js/animate-in.js')}}"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <!-- Navbar -->
  <nav class="navbar-expand-md navbar-dark bg-dark navbar fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link text-light" href="#"><b>Gustitos de la Selva</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#menu"><b>MENÚ</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#venue"><b>VENUE</b></a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-secondary mx-2" href="#book"><b>BOOK</b></a>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="align-items-center d-flex photo-overlay py-5 cover" style="background-image: url(&quot;assets/restaurant/cover_dark.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center text-lg-left text-center">
          <h1 class="mb-0 mt-4 display-3">Gustitos de la Selva</h1>
          <p class="mb-5 lead">El Sabor de la Selva</p>
        </div>
        <div class="col-lg-5 p-3">
          <form class="p-4 bg-dark-opaque" method="post" action="https://formspree.io/">
            <h4 class="mb-4 text-center">Make a reservation</h4>
            <div class="form-group"> <label>Name</label>
              <input class="form-control" placeholder="Type here"> </div>
            <div class="form-group"> <label>Time</label>
              <input type="time" class="form-control" placeholder="13"> </div>
            <div class="form-group"> <label>People</label>
              <input type="number" class="form-control" placeholder="2"> </div>
            <button type="submit" class="btn mt-4 btn-block btn-outline-primary p-2"><b>Reserve a table</b></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Intro -->
  <div class="bg-dark py-5">
    <div class="container">
      <div class="row my-5 bg-secondary animate-in-down">
        <div class="p-4 col-md-6 bg-primary">
          <p class="mb-1">Our story, our future</p>
          <h2 class="mb-1">Michel Comini</h2> <i class="fa d-inline-block fa-star text-white"></i><i class="fa d-inline-block fa-star mx-1 text-white"></i><i class="fa d-inline-block fa-star text-white"></i>
          <p class="my-4">Considered one of the most brilliant chef of our time. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultrices nes, pellentesque eu, pretium quis, sem.</p>
          <img class="img-fluid d-block" src="assets/restaurant/signature.png" width="300">
        </div>
        <div class="p-0 col-md-6">
          <img class="img-fluid d-block" src="assets/restaurant/chef_dark.jpg"> </div>
      </div>
    </div>
  </div>
  <!-- Gallery -->
  <div class="">
    <div class="container-fluid">
      <div class="row">
        <div class="p-0 col-md-2 col-4">            
          <img src="assets/restaurant/food_12_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_11_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_10_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_9_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_8_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_7_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_5_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_6_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_4_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_3_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/restaurant/food_2_dark.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img class="img-fluid" src="assets/restaurant/food_1_dark.jpg"> </div>
      </div>
    </div>
  </div>
  <!-- Menu -->
  <div class="py-5 text-center" id="menu">
    <div class="container">
      <div class="row p-4 my-5 bg-primary animate-in-down">
        <div class="col-md-12">
          <h2 class="mt-3">Menu</h2>
          <p class="mb-5">Week #26</p>
          <div class="row">
            <div class="col-md-4">
              <h5>From our lands</h5>
              <ul class="list-unstyled">
                <li class="my-4">Fillet of beef carpaccio, <br>raspberries and shaved parmesan <br>[ $12 ]</li>
                <li class="my-4">Rabbit stewed with prune, <br>artichokes and tomato focaccia <br>[ $24 ]</li>
                <li class="my-4">Season vegetables, <br>daily picked from our gardens <br>[ $8 ]</li>
                <li class="my-4">Rhubarb and blood orange crumble <br>served with clotted cream <br>[ $10 ]</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>From the sea</h5>
              <ul class="list-unstyled">
                <li class="my-4">Fresh rock oyster &nbsp; <br>with homemade tartare sauce <br>[ $12 ]</li>
                <li class="my-4">Salt and chilli squid&nbsp; <br>with lime mayonnaise <br>[ $15 ]</li>
                <li class="my-4">Beetroot salmon gravadlax&nbsp; <br>with blinis and chive cream <br>[ $30 ]</li>
                <li class="my-4">Claret jelly with Chantilly cream <br>&nbsp;and a shortbread petticoat tail <br>[ $12 ]</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>For the youngest</h5>
              <ul class="list-unstyled">
                <li class="my-4">Milan saffron risotto <br>with mint leaves and cherry tomato <br>[ $6 ]</li>
                <li class="my-4">Angus hamburger <br>ketchup and grilled vegetables <br>[ $12 ]</li>
                <li class="my-4">Potato chips <br>proudly grown in our fields <br>[ $7 ]</li>
                <li class="my-4">Ice cream with orange peel, <br>wild berries and daily cream <br>[ $4 ]</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel reviews -->
  <div class="p-5 text-center photo-overlay" style="background-image: url(&quot;assets/restaurant/testimonal_background_dark.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="carousel slide" data-ride="carousel" id="carouselArchitecture">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <img class="d-block img-fluid rounded-circle mx-auto" src="assets/restaurant/testimonial_1_dark.jpg" data-holder-rendered="true" width="200">
                <p class="my-3">So good and super staff. <br>Go for the shrimps!.</p> <i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i><i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i><i class="fa fa-star-o d-inline"></i>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid rounded-circle mx-auto" src="assets/restaurant/testimonial_2_dark.jpg" data-holder-rendered="true" width="200">
                <p class="my-3">Super enthusiastic about this place. <br>They even play live music.</p> <i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i><i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i> <i class="fa fa-star d-inline"></i>
              </div>
              <div class="carousel-item active">
                <img class="d-block img-fluid rounded-circle mx-auto" src="assets/restaurant/testimonial_3_dark.jpg" data-holder-rendered="true" width="200">
                <p class="my-3">It was since a while that I ate that good. <br>Definitely recommended.</p> <i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i><i class="fa fa-star d-inline"></i><i class="fa fa-star-half-o mx-1 d-inline"></i><i class="fa fa-star-o d-inline"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel venue -->
  <div class="py-3" id="venue">
    <div class="container">
      <div class="row my-5 bg-primary animate-in-down">
        <div class="p-4 col-md-6 align-self-center">
          <p class="mb-1">Sientete como en la selva</p>
          <h2 class="">Descubre el lugar</h2>
          <p class="my-3">Design and architecture go together with good food. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
          <a href="#" class="btn-outline-light mb-3 p-2 btn">View the gallery</a>
        </div>
        <div class="p-0 col-md-6">
          <div class="carousel slide" data-ride="carousel" id="carousel1">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid w-100" src="assets/restaurant/venue_1_dark.jpg" atl="first slide">
                <div class="carousel-caption">
                  <h3>Dining room</h3>
                  <p>Good architecture, better food</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="assets/restaurant/venue_3_dark.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>Bar</h3>
                  <p>Enjoy our long drink selection</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="assets/restaurant/venue_2_dark.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>Show cooking</h3>
                  <p>Tastes better</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="assets/restaurant/venue_4_dark.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>Relax area</h3>
                  <p>Take the time to chill</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Events -->
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row animate-in-down">
        <div class="col-md-12">
          <p class="m-0 text-center">We gladly invite you to our happenings.</p>
          <h2 class="mb-3 text-primary text-center">Upcoming events</h2>
          <div class="row">
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="assets/restaurant/event_1_dark.jpg">
              <p class="lead text-muted mb-1">26th July, 2017</p>
              <h5 class="text-dark"><b>Oyster &amp; champagne night</b></h5>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
              <a href="#" class="btn btn-outline-secondary"><b class="">Book now!</b></a>
            </div>
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="assets/restaurant/event_2_dark.jpg">
              <p class="lead text-muted mb-1">30th August, 2017</p>
              <h5 class="text-dark"><b>Nina Krichko Acoustic Live</b></h5>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
              <a href="#" class="btn btn-outline-secondary"><b class="">Go to event</b></a>
            </div>
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="assets/restaurant/event_3_dark.jpg">
              <p class="lead text-muted mb-1">1st October, 2017 </p>
              <h5 class="text-dark"><b>Infusion tasting &nbsp;</b></h5>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
              <a href="#" class="btn btn-outline-secondary"><b class="">Read more</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark opaque section -->
  <div class="py-5 photo-overlay" id="book" style="background-image: url(&quot;assets/restaurant/makereservation_dark.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-lg-6 p-3 animate-in-down">
          <form class="p-4 bg-dark-opaque" method="post" action="">
            <h4 class="mb-4 text-center">Siganos y realice sus pedidos en: </h4>
            <p class="my-4">Book your table in advance. No cue, no waiting lists. Pre-order your favourite dish or suggest new recipes to our chefs. We will do all our best for complying to your requests</p>
            <div class="form-group"> <i class="fa fa-facebook" aria-hidden="true"></i> <label> <strong>Facebook</strong></label><br>
              <a href="https://www.facebook.com/profile.php?id=100062081996505" class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;Gustitos de la SELVA</a> </div>
            <div class="form-group"> <i class="fa fa-whatsapp" aria-hidden="true"></i> <label> <strong>Whatsapp</strong></label><br>
              <a href="" class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;+51 914 432 866</a> </div>
            <div class="form-group"> <i class="fa fa-instagram" aria-hidden="true"></i> <label> <strong>Instagram</strong></label><br>
              <a href="https://www.instagram.com/gustitos.delaselva/" class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;@gustitos.delaselva</a> </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 p-4">
          <h2 class="mb-4">Contacto</h2>
          <p class="m-0">
            <a href="tel:+51 - 914 432 866" class="text-white">+51 914 432 866</a>
          </p>
          <p>
            <a href="mailto:gustitos@gmail.com" class="text-white">gustitosdelaselva@gmail.com</a>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <h2 class="mb-4">Ubicación</h2>
          <p>
            <a href="https://goo.gl/maps/vTBifbzrghdBu9pW8" target="_blank" class="text-white">Jr. Aparicio Pomares #104 <br>Amarilis, Huánuco</a>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <h2 class="mb-4">Abierto</h2>
          <p>08:00 AM - 03:00 PM Sab/Dom</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-muted">© Copyright {{ date('Y') }} Gustitos de la Selva - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="{{asset('js/smooth-scroll.js')}}"></script>

       <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    auth
                        <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    else
                        <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        if (Route::has('register'))
                            <a href="" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        endif
                    endauth
                </div>
            endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v)
                    </div>
                </div>
            </div>
        </div>
    </body> -->
</html>
