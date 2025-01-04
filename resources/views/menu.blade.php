@extends('layouts.app')
@section('content')

    {{--    <div class="bg-dark" style="height: 50px; width: 100%;"></div>--}}

    <x-tab page="menu" />

    <section class="py-5" style="position: relative;">
        <div class="symbol-pattern"></div>
        <div class="container">
            <div class="shadow rounded plate">
                <div class="d-flex justify-content-around py-3">
                    <a class="text-capitalize text-decoration-none" href="#feature">feature menu</a>
                    <a class="text-capitalize text-decoration-none" href="#main">menu</a>
{{--                    <a class="text-capitalize text-decoration-none" href="#lunch">lunch menu</a>--}}
{{--                    <a class="text-capitalize text-decoration-none" href="#dinner">dinner menu</a>--}}
                    <a class="text-capitalize text-decoration-none" href="#drink">drink menu</a>
                    <a class="text-capitalize text-decoration-none" href="#kids">kids menu</a>
                    <a class="text-capitalize text-decoration-none" href="#dessert">dessert menu</a>
                </div>

                <h3 class="text-center pt-5 pb-3 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">
                    Feature Menu
                </h3>
                <div id="feature" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1">
                    <div class="col d-flex justify-content-center"><img src="/images/menu-jan-features.jpg" alt="menu" class="img-fluid" style=""></div>
                    {{--                <div class="col"><img src="/images/menu-features-9-20-24.png" alt="menu" class="img-fluid" style=""></div>--}}
                </div>

                <hr>

                <h3 class="text-center pt-5 pb-3 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">
                    Menu
                </h3>
                <div id="main" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1">
                    <div class="col d-flex justify-content-center"><img src="/images/menu-jan-main-menu.jpg" alt="menu" class="img-fluid" style=""></div>
                    {{--                <div class="col"><img src="/images/menu-features-9-20-24.png" alt="menu" class="img-fluid" style=""></div>--}}
                </div>

{{--                <h3 class="text-center pt-5 pb-3 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">--}}
{{--                    Lunch Menu--}}
{{--                </h3>--}}
{{--            <div id="lunch" class="d-flex justify-content-center">--}}
{{--                <div><img src="/images/menu-lunch.png" alt="menu" class="img-fluid" style=""></div>--}}
{{--            </div>--}}

{{--                <hr>--}}

{{--                <h3 class="text-center pt-5 pb-3 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">--}}
{{--                    Dinner Menu--}}
{{--                </h3>--}}
{{--            <div id="dinner" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1">--}}
{{--                <div class="col d-flex justify-content-center"><img src="/images/menu-dinner.png" alt="menu" class="img-fluid" style=""></div>--}}
{{--                <div class="col"><img src="/images/menu-features-9-20-24.png" alt="menu" class="img-fluid" style=""></div>--}}
{{--            </div>--}}

                <hr>

                <h3 class="text-center pt-5 pb-3 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">
                    Drink Menu
                </h3>
            <div id="drink" class="d-flex justify-content-center">
                <div><img src="/images/menu-jan-happy-hour.jpg" alt="menu" class="img-fluid" style=""></div>
            </div>
            <div id="drink-2" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <div class="col"><img src="/images/menu-jan-cocktails.jpg" alt="menu" class="img-fluid" style=""></div>
                <div class="col"><img src="/images/menu-jan-wine.jpg" alt="menu" class="img-fluid" style=""></div>
            </div>

                <hr>

                <h3 class="text-center pt-5 pb-3 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">
                    Kids Menu
                </h3>
                <div id="kids" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1">
                    <div class="col d-flex justify-content-center"><img src="/images/menu-jan-kids.jpg" alt="menu" class="img-fluid" style=""></div>
                    {{--                <div class="col"><img src="/images/menu-features-9-20-24.png" alt="menu" class="img-fluid" style=""></div>--}}
                </div>

                <hr>

                <h3 class="text-center pt-5 pb-3 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">
                    Dessert Menu
                </h3>
                <div id="dessert" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1">
                    <div class="col d-flex justify-content-center"><img src="/images/menu-jan-desserts.jpg" alt="menu" class="img-fluid" style=""></div>
                    {{--                <div class="col"><img src="/images/menu-features-9-20-24.png" alt="menu" class="img-fluid" style=""></div>--}}
                </div>


            </div>
{{--            <div class="row mt-5">--}}
{{--                <div class="col-1"></div>--}}
{{--                <div class="col-10 plate mx-3 px-4 py-3 rounded shadow">--}}
{{--                    <div class="d-flex justify-content-between align-items-center mb-2">--}}
{{--                        <h5 class="text-uppercase mb-0" style="letter-spacing: 2px; font-weight: 600;">Download Menu</h5>--}}
{{--                        <a href="/images/menu-6-20-24.png" style="text-decoration: none; color: black;" target="_blank"><ion-icon name="arrow-forward-outline"></ion-icon></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-1"></div>--}}
{{--            </div>--}}
        </div>
        {{--        <div class="d-flex justify-content-center">--}}
        {{--            <img src="/images/denlie-icon-transparent.png" alt="" class="img-fluid" style="width: 55px; height: auto;">--}}
        {{--        </div>--}}
    </section>

    <section class="masonry">
        <div class="gallery">
            <img src="/images/food-1.jpg" alt="food">
            <img src="/images/food-2.jpg" alt="food">
            <img src="/images/food-3.jpg" alt="food">
{{--            <img src="/images/food-4.jpg" alt="food">--}}
            <img src="/images/food-5.jpg" alt="food">
            <img src="/images/food-6.jpg" alt="food">
            <img src="/images/food-7.jpeg" alt="food">
            <img src="/images/drink-1.jpg" alt="food">
            <img src="/images/dinner-1.jpg" alt="food">
            <img src="/images/dinner-2.jpg" alt="food">
            <img src="/images/dinner-4.jpg" alt="food">
            <img src="/images/dinner-5.JPG" alt="food">
            <img src="/images/guests-1.jpg" alt="food">
        </div>
    </section>

    @include('_footer-full-section')


@endsection
