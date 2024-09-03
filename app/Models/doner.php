<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doner extends Model
{
    use HasFactory;


    public function method_method(){
        return $this->hasOne(PaymentMethod::class, 'id', 'payment_method_id');
    }
}
