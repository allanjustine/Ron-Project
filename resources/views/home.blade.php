@extends('base')

@include('navbar')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="bo" style="margin-top: 60px;">
        <header>
            <style>
              .mask {
                background-image: url("images/people.jpg") !important;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
              }

              @media (min-width: 992px) {
                #introCarousel {
                  margin-top: -58.59px;
                }
                #introCarousel,
                .carousel-inner,
                .carousel-item,
                .carousel-item.active {
                  height: 50vh;
                }
              }

            </style>

            <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
              <ol class="carousel-indicators">
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
              </ol>


              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="mask" style="background-color: rgb(131, 219, 233);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                      <div class="text-white text-center">
                        <h1 class="mb-3 text-white" style="background-color: rgba(243, 188, 111, 0.826); padding: 10px; border-radius: 10px;">Friendly Talk Online</h1>
                        <h3 class="mb-4 text-white" style="background-color: rgba(243, 188, 111, 0.812); padding: 10px; border-radius: 10px;">Everyone is free to post online</h3>
                        <a
                          class="btn text-dark btn-warning btn-lg m-2"
                          role="button"
                          href="/recentPost"
                          >Recent Posts</a
                        >
                        <a
                          class="btn text-dark btn-warning btn-lg m-2"
                          role="button"
                          href="/create"
                          >Add a Posts</a>
                      </div>
                    </div>
                  </div>
                </div>
          </header>
          <main class="mt-5">
            <div class="container">
              <section>
                <div class="row">
                  <div class="col-md-3 gx-2 mb-2">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                      <img src="images/friendly.jpg" style="width:200px" class="img-fluid" />
                      <a href="#!">
                      </a>
                    </div>
                  </div>

                  <div class="col-md-6 gx-5 mb-4">
                    <h4 class="text-white"><strong>Free Post Rooms, Post Online With But You Need To Register and Login</strong></h4>
                    <p class=" text-white">
                        Friendly Talk Online is an online free post rooms. Here you can meet new friends from all over the world. registration needed.
                    </p>
                    <p class="text-white"><strong>Friendly</strong></p>
                    <p class="text-white">
                        Meet new single women and men everyday without limits, make friendships, for free you can have a live discussion now registration!
                    </p>
                  </div>
                </div>
              </section>
              <hr class="my-5 text-white" />
              <section class="text-center">
                <h4 class="mb-5 text-white"><strong>Friendly Talk Online</strong></h4>

                <div class="row">
                  <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="images/chatus.jpg"
                          class="img-fluid"
                        />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Secret to making a lot of friends?</h5>
                        <p class="card-text">
                            The secret to making a lot of friends is being cool in all aspects, just kidding, online friendships just need you to be kind and just a little funny so that people never lose their interest in you. It is necessary to bring out your funny side to keep the conversation alive.
                        </p>
                        @if (Auth::check())
                        @else
                        <a href="/recentPost" class="btn btn-info">Visit Post <i class="fa-solid fa-arrow-right"></i></a>
                        @endif
                    </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="images/chatus.jpg"
                          class="img-fluid"
                        />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">JOINING THE COMMUNITY</h5>
                        <p class="card-text">
                            You'll need to join the community to participate in any of our discussions or to post your own questions, if you've not already registered why not create an account and get started today.
                        </p>
                        @if (Auth::check())
                        @else
                        <a href="/register" class="btn btn-info">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                        @endif
                    </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="images/chatus.jpg"
                          class="img-fluid"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">WHO'S WHO?</h5>
                        <p class="card-text">
                            To help you find your way around we have lots of really knowledgeable members within our community,
                            they are wise and helpful, keep your eyes peeled and you may spot one.
                        </p>
                        @if (Auth::check())
                        @else
                        <a href="/" class="btn btn-info">Login Now <i class="fa-solid fa-arrow-right"></i></a>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </div>

@endsection

