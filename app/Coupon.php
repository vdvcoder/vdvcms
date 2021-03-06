<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Coupon extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'coupons';

    const TYPE_SELECT = [
        'fixed'   => 'fixed',
        'percent' => 'percent',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'uuid',
        'code',
        'type',
        'value',
        'percent_off',
        'amount',
        'amount_left',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public static function findByCode($code)
    {
        return static::where('code', $code)->first();
    }

    public function discount($total)
    {
        if ($this->type == 'fixed') {
            return $this->value;
        }

        if ($this->type == 'percent') {
            return round(($this->percent_off / 100) * $total);
        }

        return 0;
    }
}
