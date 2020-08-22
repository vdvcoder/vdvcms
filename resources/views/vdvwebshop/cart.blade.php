@extends('layouts.app')

@section('content')

    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg">
        <div class="container">
            <h2 class="title-page">Shopping cart</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            @include('vdvwebshop.partials.alert-message')

            <div class="row">
                <main class="col-md-9">
                    <div class="card">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" class="text-right" width="200"> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(Cart::count())
                                @foreach (Cart::content() as $item)
                                    @include('vdvwebshop.partials.cart-item')
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                        <div class="card-body border-top">
                            <a href="{{ route('checkout.index') }}" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
                            <a href="{{ route('shop.index') }}" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
                        </div>
                    </div> <!-- card.// -->

                    <div class="alert alert-success mt-3">
                        <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery because we are cool!</p>
                    </div>

                </main> <!-- col.// -->

                <aside class="col-md-3">

                    @include('vdvwebshop.partials.coupon-section')

                    @include('vdvwebshop.partials.price')

                </aside> <!-- col.// -->
            </div>



            @if(Cart::instance('saveForLater')->count())

                <h1 class="ui header">
                    {{ Cart::instance('saveForLater')->count() }} item(s) saved for later
                </h1>
                <p class="lead">You have some items in yout cart</p>

                <div class="ui hidden divider"></div>

                <div class="ui divided items">

                    @foreach (Cart::instance('saveForLater')->content() as $item)

                        @include('vdvwebshop.partials.saved-for-later-item')

                    @endforeach

                </div>
            @endif

            <div class="divider"></div>

            @include('vdvwebshop.partials.might-like')



        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
