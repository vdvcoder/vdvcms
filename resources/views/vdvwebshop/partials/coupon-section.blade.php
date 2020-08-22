@if(!session()->has('coupon'))
    <div class="card mb-3">
        <div class="card-body">
            <form action="{{ route('coupon.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Have coupon?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="coupon" placeholder="Coupon code">
                        <span class="input-group-append">
							<button class="btn btn-primary" type="submit">Apply</button>
						</span>
                    </div>
                </div>
            </form>
        </div> <!-- card-body.// -->
    </div>  <!-- card .// -->
@endif
