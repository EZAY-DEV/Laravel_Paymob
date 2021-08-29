<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const PAYMENT_STATUS_PENDING = 'Pending';
    const PAYMENT_STATUS_DONE = 'Done';

    const PAYMENT_TYPE_CACH = 'Cach';
    const PAYMENT_TYPE_PAYPAL = 'Paypal';
    const PAYMENT_TYPE_CREDIT = 'Credit';

    protected $fillable = [
        'payment_status',
        'payment_type',
        'user_id',
        'cost'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
