@extends('layouts.app')
@section('content')
    <x-tab page="about" />

    <section class="py-5" style="position: relative;">
        <div class="symbol-pattern"></div>
        <div class="container">
            <div class="shadow rounded plate">
                <div class="row food mx-3 px-4 py-3">
                    <p>👋 Hi!  My name is Monique. I am a Middleville native, long-time owner of Caledonia Dance & Music Center, and have a passion for serving families in and around our community. 🎉 I'm thrilled to share that I've recently acquired a restaurant that holds a significant place in Caledonia's heritage.  I’m proud to carry on that legacy while paying honor to my grandmother Rossana “Nonna”.  ❤️ After a long battle with cancer, Nonna passed away nearly 20 years ago. The anniversary of her journey to Heaven is approaching, and I wanted to commemorate her legacy in a meaningful way. 🍳 Nonna's kitchen and her table were always a hub of unity, cherished memories, and familial love. The table was full of delicious food, laughter, and inclusion. There was always a place at the table for anyone and everyone. 🍝 Keeping true to her legacy, this new restaurant will feature many of the things this lovely and elegant Roman Italian lady resembled - from food to hospitality to ambiance and more. 🎉 I am excited and honored to welcome you to Rossana’s Table!</p>
                </div>
            </div>
{{--            @include('_footer')--}}
        </div>
    </section>

    <section class="masonry">
        <div class="gallery">
            <img src="/images/place-7.jpg" alt="restaurant">
            <img src="/images/place-2.jpg" alt="restaurant">
            <img src="/images/place-3.jpg" alt="restaurant">
            <img src="/images/place-16.jpg" alt="restaurant">
            <img src="/images/place-8.jpg" alt="restaurant">
            <img src="/images/place-15.jpg" alt="restaurant">
            <img src="/images/place-14.jpg" alt="restaurant">
            <img src="/images/place-6.jpg" alt="restaurant">
        </div>
    </section>

    @include('_footer-full-section')
@endsection
