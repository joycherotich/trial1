<?php

namespace App\Models;
use App\Http\Controllers\DashboardController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_names',
        'email',
        'phone_number',
        'id_number'
    ];
}
