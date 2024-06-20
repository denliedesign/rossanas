@extends('layouts.app')
@section('content')

    {{--    <div class="bg-dark" style="height: 50px; width: 100%;"></div>--}}

    <x-tab page="menu" />

    <section class="py-5" style="position: relative;">
        <div class="symbol-pattern"></div>
        <div class="container">
            <div class="shadow rounded plate">
                <div class="row food">
                    <div class="col-sm mx-3 px-4 py-3">
                        <h5 class="text-center text-uppercase" style="letter-spacing: 2px;">Appetizers</h5>
                        <p class="text-center text-muted"><strong class="text-uppercase">Meatballs</strong> Polenta, house tomato sauce, basil, Parmigiano | 12</p>
                        <p class="text-center text-muted"><strong class="text-uppercase">Mussels</strong> Calabrese peppers, chickpeas, tomato broth, baguette | 12</p>
                        <p class="text-center text-muted"><strong class="text-uppercase">Crostinis</strong> Three herb toasted crostini, whipped mozzarella, tomato bruschetta, basil, olive oil | 10</p>
                        <p class="text-center text-muted"><strong class="text-uppercase">House Salad</strong> Mixed lettuces, pickled red onions, cherry tomatoes, balsamic vinaigrette, Parmigiano | 10</p>
                    </div>
                    <div class="col-sm mx-3 px-4 py-3">
                        <h5 class="text-center text-uppercase" style="letter-spacing: 2px;">Pasta</h5>
                        <p class="text-center text-muted"><strong class="text-uppercase">Fettuccine</strong> Poached lobster, cherry tomatoes, summer squash, English peas, white wine butter | 31</p>
                        <p class="text-center text-muted"><strong class="text-uppercase">Farfalle</strong> Herb roasted chicken, Pebble Creek mushrooms, spinach, pesto cream sauce, Parmigiano Reggiano | 23</p>
                        <p class="text-center text-muted"><strong class="text-uppercase">Spaghetti Pomodoro with Meatballs</strong> Two meatballs, house tomato sauce, basil, roasted garlic, Parmigiano Reggiano | 20</p>
                    </div>
                </div>
                <hr style="width: 93%; margin: 0 auto;" class="my-5">
                <div class="row food">
                    <div class="col-sm mx-3 px-4 py-3">
                        <h5 class="text-center text-uppercase" style="letter-spacing: 2px;">Entrées</h5>
                        <p class="text-center text-muted"><strong class="text-uppercase">Salmon</strong> Lemon herb farrotto, Calabrian chili, braised carrot puree, spinach, balsamic reduction | 26</p>
                        <p class="text-center text-muted"><strong class="text-uppercase">Chicken</strong> Lemon and oregano marinated half chicken, fingerling potatoes, caramelized onions, citrus herb jus | 20</p>
                        <p class="text-center text-muted"><strong class="text-uppercase">Pork Chop</strong> Roman spice rubbed 10 oz boneless loin chop, polenta, heirloom tomato mostarda, dressed greens | 22</p>
                        <p class="text-center text-muted"><strong class="text-uppercase">Steak</strong> 12 oz New York strip, roasted potatoes, charred scallion salsa verde | 40</p>
                    </div>
                    <div class="col-sm mx-3 px-4 py-3">
                        <h5 class="text-center text-uppercase" style="letter-spacing: 2px;">Pizza</h5>
                        <p class="text-center text-muted"><strong class="text-uppercase">Margherita Pizza</strong> Fresh mozzarella, basil, olive oil, tomato sauce, on housemade crust | 14</p>
                        <p class="text-center text-muted"><small>Add pepperoni, Italian sausage, prosciutto, or Pebble Creek mushrooms | 2 each item</small></p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-10 plate mx-3 px-4 py-3 rounded shadow">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="text-uppercase mb-0" style="letter-spacing: 2px; font-weight: 600;">Download Menu</h5>
                        <a href="/images/menu-6-20-24.png" style="text-decoration: none; color: black;" target="_blank"><ion-icon name="arrow-forward-outline"></ion-icon></a>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
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
            <img src="/images/food-4.jpg" alt="food">
            <img src="/images/food-5.jpg" alt="food">
            <img src="/images/food-6.jpg" alt="food">
            <img src="/images/food-7.jpeg" alt="food">
        </div>
    </section>

    @include('_footer-full-section')


@endsection
