<!-- ============================ COMPONENTS 4  ================================= -->
<div class="col-md-4">
    <figure class="card card-product-grid">
        <div class="img-wrap">
            <span class="badge badge-danger"> NEW </span>
            <img src="images/items/1.jpg">
            <a class="btn-overlay" href="{{ $product->path() }}"><i class="fa fa-search-plus"></i> Quick view</a>
        </div> <!-- img-wrap.// -->
        <figcaption class="info-wrap">
            <div class="fix-height">
                <a href="{{ $product->path() }}" class="title">{{ $product->name }}</a>
                <div class="price-wrap mt-2">
                    <span class="price">{{ $product->present_price }}</span>
                </div> <!-- price-wrap.// -->
            </div>
            <form action="{{ route('cart.store') }}" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">

                <button class="button btn btn-primary" type="submit">
                    <i class="shopping cart icon"></i>
                    Add to Cart
                </button>
            </form>

        </figcaption>
    </figure>
</div> <!-- col.// -->
<!-- ============================ COMPONENTS 4  END .// ================================= -->
