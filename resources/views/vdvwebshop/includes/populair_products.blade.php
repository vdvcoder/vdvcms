<!-- ========================= SECTION POPULAIR PRODUCTS ========================= -->
<section class="section-name  padding-y-sm">
    <div class="container">

        <header class="section-heading">
            <a href="{{ route('shop.index') }}" class="btn btn-outline-primary float-right">See all</a>
            <h3 class="section-title">Popular products</h3>
        </header><!-- sect-heading -->


        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3">
                <div href="{{ $product->path() }}" class="card card-product-grid">
                    <a href="{{ $product->path() }}" class="img-wrap"> <img src="https://via.placeholder.com/150"> </a>
                    <figcaption class="info-wrap">
                        <a href="{{ $product->path() }}" class="title">{{$product->name}}</a>
                        <div class="price mt-1">€ {{$product->price}}</div> <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div> <!-- col.// -->
            @endforeach


        </div> <!-- row.// -->
        <div class="mx-auto">
            {{ $products->links() }}
        </div>


    </div><!-- container // -->

</section>
<!-- ========================= SECTION POPULAIR PRODUCTS END// ========================= -->
