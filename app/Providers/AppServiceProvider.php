<?php

namespace App\Providers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('vendor.pagination.semantic-ui');

        view()->composer(['vdvwebshop.cart', 'vdvwebshop.checkout'], function ($view) {
            $tax = config('cart.tax') / 100;
            $discount = session()->get('coupon')['discount'] ?? 0;
            $code = session()->get('coupon')['name'] ?? null;

            $subtotal = parse_money_to_numbers(Cart::subtotal());
            $newSubtotal = $subtotal - $discount;

            if ($newSubtotal < 0) $newSubtotal = 0;
            $newTax = $newSubtotal * $tax;
            $newTotal = $newSubtotal * (1 + $tax);

            $view->with([
                'code'          => $code,
                'subtotal'      => format_money($subtotal),
                'discount'      => '-' . format_money($discount),
                'newSubtotal'   => format_money($newSubtotal),
                'tax'           => config('cart.tax') . '%',
                'newTax'        => format_money($newTax),
                'newTotal'      => format_money($newTotal),
            ]);
        });

        view()->composer('*', function($view)
        {
            $view->with('products', Product::paginate(8));
        });
    }
}
