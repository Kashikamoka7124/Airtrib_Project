@extends('layouts.master')

@section('body')
    <div class="bg-black bg-cover bg-no-repeat" style="background-image: url('img/slider-1.jpg');">
        <div class="container">
          @include('layouts.header')
            <div class="row mt-40">
              <div class="col-md-8">
                <div id="ypsnet-ibe" data-src="https://flr.ypsilon.net/?agent=203951"></div>
                <script src="https://flr.ypsilon.net/static/resize/ypsnet-ibe.min.js"></script>

                {{-- <iframe class="pb-30" style=" padding-bottom: 1.875rem; margin-bottom: -550px;margin-top: 200px;padding-bottom: 150px;" src="http://flweb.ypsilon.net/index.php?agent=203951&lang={{Cookie::get('airtrib_locale')}}_{{strtoupper(Cookie::get('airtrib_locale'))}}" width="100%" height="800px" frameborder="0"></iframe> --}}
                {{-- <flights-container></flights-container> --}}
            </div>
          </div>
        </div>
    </div>

    <section class="flex justify-center" style="   -webkit-box-pack: center;justify-content: center;display: flex;margin-top: 400px;">
        <img src="img/full-logo.svg" style="height: 200px;" alt="logo">
    </section>

    <section class="bg-primary">
        <div class="flex container">
            <div class="flex-1 lg:flex items-center justify-center hidden">
                <img src="img/air-business.png" class="w-full pr-60" alt="air business">
            </div>
            <div class="flex-1">
                <h1 class="uppercase text-52 text-white font-playfair">Air Business</h1>
                <h2 class="text-36 text-white font-playfair">Globe trotters tribe</h2>
                <p class="text-22 leading-30 mt-42 text-white">
                    AirTrib is the ultimate experience for the Tribe of Business Travelers.<br>
                    With an access of thousands of airline partners and operators, our integrated algorithm adapt to your preferences filters and provides you with a tailor made offer for your  business travel paths.
                </p>
            </div>
        </div>
    </section>

    <section class="">
        <div class="flex container">
            <div class="flex-1 text-right">
                <h1 class="uppercase text-secondary text-52">TRIB IT</h1>
                <h2 class="text-36 text-secondary">and support the origin people</h2>

                <p class="text-22 text-secondary-light mt-38">
                    We at AirTrib, are convinced that our Customers possess the acute senses to take world changing actions. Because they are always in Movement they can with AirTrib contribute to the protection and development of a Cultural Heritage kept with the guardianship of Tribes.
                    <br> <br>
                    As such, We Commit to reserve One-third of our income from a booking to distribute it to an organization of the choice or directly to Reserves and Tribe Protection Agencies.
                </p>
            </div>

            <div class="flex-1 flex items-center justify-center">
                <img src="img/trib-it.svg" style="height: 500px;" alt="trib it">
            </div>
        </div>
    </section>

    <section style="background-image: url('img/tribal-map.jpg'); background-size: cover; background-repeat: no-repeat; height: 858px; padding: 26px;">
        <h1 class="section-heading text-white">Tribal</h1>
        <h2 class="section-heading-sub">World</h2>
    </section>

    <section>
        <h1 class="section-heading">Organizations</h1>
        <p class="section-heading-sub">Partners</p>

        <h3 class="font-playfair text-center text-secondary-light text-30 mt-30">Humanitarian and environmentally concerned, progressive organizations</h3>

        <div class="flex flex-wrap container mt-85">
            @foreach($organizations as $organization)
            <div class="w-1/4 mb-50">
                <div class="relative pb-16 organization-hover">
                    <div class="flex justify-center">
                        <div class="bg-white border border-primary flex justify-center items-center p-30" style="width: 130px; height: 130px;">
                            <img src="{{ $organization->image }}">
                        </div>
                    </div>

                    <div class="organization-hover-info">
                        <p class="uppercase text-14 text-secondary">MONGABAY</p>
                        <p class="mt-15 text-13 text-secondary-light px-15">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        </p>
                        <a href="#" class="text-13 text-primary mt-10">Learn more</a>
                    </div>
                </div>

                <div class="flex justify-center relative">
                    <div class="hover-fill w-26 h-26 border-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.89 22.89" width="14" height="14"><line x1="1.5" y1="11.44" x2="21.39" y2="11.44" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/><line x1="11.44" y1="21.39" x2="11.44" y2="1.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/></svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section style="background-image: url('img/explorers-bg.svg'); background-repeat: no-repeat; background-size: cover; padding-top: 100px; padding-bottom: 52px;">
        <h1 class="section-heading">Explorers</h1>
        <h2 class="section-heading-sub">Photographers</h2>

        <div class="explorers relative overflow-hidden" style="margin-top: 100px;">
            <div data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="flex container">
                            <div class="flex-1" style="padding-right: 38px;">
                                <img src="img/explorers-img.jpg" alt="explorers">
                            </div>

                            <div class="flex-1" style="padding-left: 38px;">
                                <h2 style="font-size: 34px; color: #5E4A4A;">Trevor Cole</h2>

                                <p style="font-size: 17px; margin-top: 35px; color: #5E4A4A;">
                                    Trevors photography and travel, have become two of his life’s passions. Trevor focuse predominantly on culture and landscapes; images which reflect a spatial and temporal journey through life and which try to convey a need to live in a more sustainable world. Trevor seeks the moment and the light in whatever context he finds himself and endeavours to use his photographic acumen to turn the ordinary into the extraordinary. <br><br>

                                    To capture people and landscapes and the interactions between them in the light of a world in transition is to encapsulate an inimitable moment, which will never again materialise. My own 'take' as a geographer photographer ! Born in the City of Derry, Trevor Cole has lived most of his life outside the bounds of Ireland; in England, Singapore, Togo, Italy, Ethiopia and Brazil.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="flex container">
                            <div class="flex-1" style="padding-right: 38px;">
                                <img src="img/explorers-img.jpg" alt="explorers">
                            </div>

                            <div class="flex-1" style="padding-left: 38px;">
                                <h2 style="font-size: 34px; color: #5E4A4A;">Trevor Cole</h2>

                                <p style="font-size: 17px; margin-top: 35px; color: #5E4A4A;">
                                    Trevors photography and travel, have become two of his life’s passions. Trevor focuse predominantly on culture and landscapes; images which reflect a spatial and temporal journey through life and which try to convey a need to live in a more sustainable world. Trevor seeks the moment and the light in whatever context he finds himself and endeavours to use his photographic acumen to turn the ordinary into the extraordinary. <br><br>

                                    To capture people and landscapes and the interactions between them in the light of a world in transition is to encapsulate an inimitable moment, which will never again materialise. My own 'take' as a geographer photographer ! Born in the City of Derry, Trevor Cole has lived most of his life outside the bounds of Ireland; in England, Singapore, Togo, Italy, Ethiopia and Brazil.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
                <div class="glide__arrow glide__arrow--left w-45 h-45 rounded-full border-3 hover-fill" data-glide-dir="<">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.78 27.97" width="20" height="20" class="pr-3"><polyline points="14.78 2 2 14.31 14.78 25.96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></svg>
                </div>
                <div class="glide__arrow glide__arrow--right w-45 h-45 rounded-full border-3 hover-fill" data-glide-dir=">">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.78 27.97" width="20" height="20" class="pl-3"><polyline points="2 2 14.78 14.31 2 25.96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></svg>
                </div>
            </div>
        </div>

        <div class="flex justify-center" style="margin-top: 100px;">
            <a href="#" class="btn btn-outline">Find more</a>
        </div>
    </section>

    <section style="padding-top: 100px;">
        <h1 class="section-heading">Find Your Trip</h1>
        <p class="section-heading-sub">Bookable events</p>

        <div class="container overflow-hidden" style="margin-top: 100px;">
            <div class="events relative">
                <div data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div>
                                <img src="img/trip-1.jpg" alt="trip 1">
                                <h3 class="text-primary" style="font-size: 28px; margin-top: 28px;">South Sudan cattle camps</h3>
                                <p class="text-secondary-light" style="font-size: 21px; margin-top: 28px;">The bulls return South Sudan</p>
                                <p class="text-secondary-light" style="font-size: 18px; margin-top: 10px;">
                                    Nov 20 2019 - Nov 27 2019 <br>
                                    Sudan
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div>
                                <img src="img/trip-2.jpg" alt="trip 2">
                                <h3 class="text-primary" style="font-size: 28px; margin-top: 28px;">Tribal and traditions traits</h3>
                                <p class="text-secondary-light" style="font-size: 21px; margin-top: 28px;">Upper and Lower Omo Valley</p>
                                <p class="text-secondary-light" style="font-size: 18px; margin-top: 10px;">
                                    Feb 11 2020 - Feb 22 2020 <br>
                                    Ethiopia
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div>
                                <img src="img/trip-3.jpg" alt="trip 3">
                                <h3 class="text-primary" style="font-size: 28px; margin-top: 28px;">Traditions throught tour</h3>
                                <p class="text-secondary-light" style="font-size: 21px; margin-top: 28px;">Old Romanian shoemaker</p>
                                <p class="text-secondary-light" style="font-size: 18px; margin-top: 10px;">
                                    Apr 25 2020 - May 02 2020 <br>
                                    Transylvania
                                </p>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div>
                                <img src="img/trip-2.jpg" alt="trip 2">
                                <h3 class="text-primary" style="font-size: 28px; margin-top: 28px;">Tribal and traditions traits</h3>
                                <p class="text-secondary-light" style="font-size: 21px; margin-top: 28px;">Upper and Lower Omo Valley</p>
                                <p class="text-secondary-light" style="font-size: 18px; margin-top: 10px;">
                                    Feb 11 2020 - Feb 22 2020 <br>
                                    Ethiopia
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="w-full flex justify-center" style="margin-top: 110px;" data-glide-el="controls[nav]">
                    <div class="bg-secondary cursor-pointer" style="width: 46px; height: 4px; margin-right: 20px;" data-glide-dir="=0"></div>
                    <div class="bg-secondary cursor-pointer" style="width: 46px; height: 4px;" data-glide-dir="=1"></div>
                </div>
            </div>
        </div>
    </section>

    <footer style="background-image: url('img/footer.jpg'); padding-top: 200px; padding-bottom: 56px;">
        <div class="flex container text-white">
            <div class="flex-1 px-60">
                <img src="img/footer-logo.svg" alt="footer logo">
            </div>

            <div class="flex-1 px-40 pt-103">
                <h2 class="uppercase text-30">Contact</h2>
                <div class="bg-white w-78 h-1 mt-10 mb-15"></div>
                <p class="text-22">contact@airtrib.com</p>

                <h2 class="uppercase text-30 mt-45">About Us</h2>
                <p class="text-22">Vision, Mission, Action</p>

                <p class="mt-70 mb-18 text-21">Newsletter</p>

                <div class="flex">
                    <div class="flex-1 p-10 border border-white rounded-l">
                        <input class="w-full mb-3 bg-transparent text-17 outline-none placeholder-footer-input" name="name" placeholder="First and last name">
                        <div class="bg-white w-full h-1"></div>
                        <input class="w-full mt-3 bg-transparent text-17 outline-none placeholder-footer-input" name="email" placeholder="Email">
                    </div>
                    <div class="flex justify-center items-center text-white w-56 border-l border-white hover:bg-white hover:text-primary cursor-pointer -ml-1 border border-white rounded-r">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.78 27.97" width="18" height="18"><polyline points="2 2 14.78 14.31 2 25.96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></svg>
                    </div>
                </div>

                <a href="#" class="block mt-52 text-18">Privacy Policies</a>
            </div>

            <div class="flex-1 px-40">
                <div class="flex -ml-5">
                    <a href="#" class="flex justify-start w-28 h-28 mr-35">
                        <img src="img/facebook.svg" alt="facebook">
                    </a>
                    <a href="#" class="flex w-28 h-28 mr-35">
                        <img src="img/twitter.svg" alt="twitter">
                    </a>
                    <a href="#" class="flex w-28 h-28">
                        <img src="img/instagram.svg" alt="instagram">
                    </a>
                </div>

                <div class="mt-75 font-playfair">
                    <a href="#" class="block uppercase text-white text-30 mb-56">Flights</a>
                    <a href="#" class="block uppercase text-white text-30 mb-56">Tribes</a>
                    <a href="#" class="block uppercase text-white text-30 mb-56">Partners</a>
                    <a href="#" class="block uppercase text-white text-30 mb-56">Explorers</a>
                    <a href="#" class="block uppercase text-white text-30">Trips</a>
                </div>

                <a href="#" class="block text-18 mt-80">Scroll Up</a>
            </div>
        </div>
    </footer>
@stop

@section('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@glidejs/glide@3.4.1/dist/glide.min.js" defer></script>
    <script type="text/javascript" defer>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function () {
                new Glide('.explorers').mount()

                new Glide('.events', {
                    perView: 3,
                    gap: 60
                }).mount()
            }, 500)
        })
    </script>
@stop
