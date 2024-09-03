<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class payment_method_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['bKash', 'Nagad', 'Upay', 'Rocket'];
        foreach($array as $key=> $method){
            PaymentMethod::create([
                'name' => $method,
                'status' => 1,
            ]);
        }
    }
}
