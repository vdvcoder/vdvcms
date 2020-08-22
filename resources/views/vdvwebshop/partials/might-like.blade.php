<div class="ui main container">
    <h2 class="ui header">You may also like these..</h2>

    <div class="ui four doubling stackable cards">
        <div class="card card-body">
            <div class="row">
                @foreach ($mightLike as $product)
                    @include('vdvwebshop.partials.product')
                @endforeach
            </div> <!-- row.// -->
        </div> <!-- card // -->
    </div>
</div>
