@extends('layouts.app')
@section('content')

{{--    <div class="bg-dark" style="height: 50px; width: 100%;"></div>--}}

    @include('_nav-main')

    <section class="py-5" style="position: relative;">
        <div class="symbol-pattern"></div>
        <div class="container">
            <h3 class="text-center pb-3 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">
                Our Dining Experience
            </h3>
            <p class="text-center pb-4">
                At Rossana's Table, we are dedicated to more than just serving food; we are committed to preserving and passing on the cherished legacy of Nona. Our Italian-American scratch kitchen in Caledonia, MI, is a vibrant tribute to the timeless traditions of love, family, and home-cooked meals. Every dish we serve is crafted with the utmost care and attention to detail, ensuring that each guest experiences not only the flavors but also the warmth of our family's history. Join us at Rossana's Table, where every meal is a celebration of community and family heritage.
            </p>
{{--            <hr class="my-5">--}}
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 plate mx-3 px-4 py-3 rounded shadow">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="text-uppercase mb-0" style="letter-spacing: 2px; font-weight: 600;">Read Our Menu</h5>
                        <a href="/menu" style="text-decoration: none; color: black;"><ion-icon name="arrow-forward-outline"></ion-icon></a>
                    </div>
                    <p>Delve into our menu rich with flavors of Italy, right here in Caledonia. From traditional pasta
                        dishes to innovative pizzas, each recipe pays homage to Nona’s legacy. Check out our menu online
                        to see all that we offer and plan your next meal with us.
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>

{{--<div class="d-flex justify-content-start my-2">--}}
{{--    <div class="background-red text-center text-white px-3 py-2 shadow rounded" style="z-index: 2;">--}}
{{--        Menu--}}
{{--    </div>--}}
{{--</div>--}}


{{--    <section class="background-gradient text-white py-5">--}}
{{--        <div class="container">--}}
{{--            <h3 class="text-center fw-bold">--}}
{{--                Lorem ipsum dolor--}}
{{--            </h3>--}}
{{--            <p class="text-center pt-3 pb-4">--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eligendi magni rerum! Consequatur dolorem dolores laudantium magnam necessitatibus odio, perspiciatis? Asperiores corporis cumque deleniti distinctio ducimus, eius eligendi enim est eum ex exercitationem expedita incidunt itaque iure labore laudantium maxime molestiae nam neque non nostrum numquam obcaecati odit optio perspiciatis porro quaerat quam quo repellat totam ullam velit veniam voluptatem. Blanditiis dolores inventore ipsam odio!--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="masonry">
        <div class="gallery">
            <img src="/images/place-1.jpg" alt="restaurant">
            <img src="/images/place-4.jpg" alt="restaurant">
            <img src="/images/place-9.jpg" alt="restaurant">
            <img src="/images/place-5.jpg" alt="restaurant">
            <img src="/images/place-10.jpeg" alt="restaurant">
            <img src="/images/place-11.jpg" alt="restaurant">
            <img src="/images/place-12.jpg" alt="restaurant">
            <img src="/images/place-13.jpg" alt="restaurant">
        </div>
    </section>

@include('_footer-full-section')


@endsection
