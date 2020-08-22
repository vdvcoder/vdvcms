<div class="card">
    <div class="card-body">
        <dl class="dlist-align">
            <dt>Total price:</dt>
            <dd class="text-right">€ {{ $subtotal }}</dd>
        </dl>

        @if(session()->has('coupon'))
            <dl class="dlist-align">
                <dt>Discount:
                    <div class="ui large blue label">
                        {{ session('coupon')['name'] }}
                        <i class="delete icon" onclick="document.getElementById('remove-coupon').submit()"></i>

                        <form action="{{ route('coupon.destroy') }}" id="remove-coupon" method="POST" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </dt>
                <dd class="text-right">€ {{ $discount }}</dd>
            </dl>
            <dl class="dlist-align">
                <dt>Tax ({{ $tax }}):</dt>
                <dd class="text-right">{{ $newTax }}</dd>
            </dl>
            <dl class="dlist-align">
                <dt>New Subtotal:</dt>
                <dd class="text-right">{{ $newSubtotal }}</dd>
            </dl>
        @else
            <dl class="dlist-align">
                <dt>Tax ({{ $tax }}):</dt>
                <dd class="text-right">{{ $newTax }}</dd>
            </dl>
            <dl class="dlist-align">
                <dt>Total:</dt>
                <dd class="text-right  h5"><strong>{{ $newTotal }}</strong></dd>
            </dl>

        @endif
        <hr>
        <p class="text-center mb-3">
            <img src="images/misc/payments.png" height="26">
        </p>

    </div> <!-- card-body.// -->
</div>  <!-- card .// -->
