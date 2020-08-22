<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Order extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'orders';

    const PAID_SELECT = [
        'paid'    => 'Paid',
        'notpaid' => 'Not Paid',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'uuid',
        'reference',
        'customer_data',
        'shipping_typeid',
        'shipping_price',
        'payment_method',
        'payment',
        'pait_at',
        'paid',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
