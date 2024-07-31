@extends('layouts.app')
@section('content')

    {{--    <div class="bg-dark" style="height: 50px; width: 100%;"></div>--}}

    <x-tab page="menu" />

    <section class="py-5" style="position: relative;">
        <div class="symbol-pattern"></div>
        <div class="container">
            <div class="shadow rounded plate">
                <div class="row row-cols-1 d-flex justify-content-center">
                    <img src="/images/menu.png" alt="menu" class="img-fluid" style="height: 100%; width: auto;">
                    <img src="/images/menu-features.png" alt="menu" class="img-fluid" style="height: 100%; width: auto;">
                    <img src="/images/menu-happy-hour.png" alt="menu" class="img-fluid" style="height: 100%; width: auto;">
                    <img src="/images/menu-cocktails.png" alt="menu" class="img-fluid" style="height: 100%; width: auto;">
                    <img src="/images/menu-wine.png" alt="menu" class="img-fluid" style="height: 100%; width: auto;">
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
            <img src="/images/dinner-5.jpg" alt="food">
            <img src="/images/guests-1.jpg" alt="food">
        </div>
    </section>

    @include('_footer-full-section')


@endsection
