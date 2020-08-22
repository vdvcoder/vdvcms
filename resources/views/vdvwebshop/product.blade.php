@extends('layouts.app')

@section('title', $product->name)

@section('content')

    <!-- ============================ PRODUCT DETAIL 2 ================================= -->
    <div class="card">
        <div class="row no-gutters">
            <aside class="col-sm-6 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <a href="#"><img src="../images/items/3.jpg"></a>
                    </div> <!-- img-big-wrap.// -->
                    <div class="thumbs-wrap">
                        <a href="#" class="item-thumb"> <img src="../images/items/1.jpg"></a>
                        <a href="#" class="item-thumb"> <img src="../images/items/2.jpg"></a>
                        <a href="#" class="item-thumb"> <img src="../images/items/3.jpg"></a>
                        <a href="#" class="item-thumb"> <img src="../images/items/4.jpg"></a>
                    </div> <!-- thumbs-wrap.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-sm-6">
                <article class="content-body">
                    <h2 class="title">{{ $product->name }}</h2>

                    <p>{{ $product->description }}</p>
                    <ul class="list-normal cols-two">
                        <li class="lead">{{ $product->details }} </li>

                    </ul>

                    <div class="h3 mb-4">
                        <var class="ui green header">€ {{ $product->price }}</var>
                    </div> <!-- price-wrap.// -->
                    <div class="form-row">
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">

                        <button class="ui button" type="submit">
                            <i class="shopping cart icon"></i>
                            Add to Cart
                        </button>
                    </form>
                    </div><!-- row.// -->

                </article> <!-- product-info-aside .// -->
            </main> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->

    <!-- ============================ PRODUCT DETAIL END .// ================================= -->


    @include('vdvwebshop.includes.brands')


@endsection
