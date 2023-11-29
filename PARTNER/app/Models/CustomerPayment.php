<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'paymentcycle_id',
        'full_name',
        'email',
        'phone_number',
        'id_number',
        'amount',
        'payment_reference',
        'payment_sacco',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function paymentcycle()
    {
        return $this->belongsTo(PaymentCycle::class);
    }
}
