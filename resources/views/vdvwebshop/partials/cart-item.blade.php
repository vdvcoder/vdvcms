<tr>
    <td>

        <figure class="itemside">
            <div class="aside"><img src="images/items/1.jpg" class="img-sm"></div>
            <figcaption class="info">
                <a href="{{ $item->model->path() }}" class="title text-dark">{{ $item->name }}</a>
                <p class="text-muted small">{{ $item->model->details }}</p>
            </figcaption>
        </figure>
    </td>
    <td>
        <select name="quantity" id="quantity" class="quantity form-control" data-id="{{ $item->rowId }}">
            @foreach (range(1, 5) as $index)
                <option value="{{ $index }}" @if($item->qty == $index) selected @endif>{{ $index }}</option>
            @endforeach
        </select>
    </td>
    <td>
        <div class="price-wrap">
            <var class="price">{{ $item->model->present_price }}</var>
        </div> <!-- price-wrap .// -->
    </td>
    <td class="text-right">

        <a data-save-for-later="{{ $item->rowId }}" title="save-for-later" href="" class="btn btn-light save-for-later" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
        <a href="" class="btn btn-light  remove-cart" data-remove-cart="{{ $item->rowId }}"> Remove</a>
    </td>
    <form action="{{ route('cart.destroy', $item->rowId) }}" style="display: none" method="POST"
          id="remove-cart-{{ $item->rowId }}" class="ui left floated">
        @csrf @method('delete')
    </form>

    <form action="{{ route('saveforlater.store', $item->rowId) }}" style="display: none" method="POST"
          id="save-for-later-{{ $item->rowId }}" class="ui left floated">
        @csrf
    </form>
</tr>













