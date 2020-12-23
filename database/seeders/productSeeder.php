<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
        
        [
            'name'=>'Bengle',
            'price'=>'180',
            'cetagory'=>'Bengle Set',
            'description'=>'It is free Style',
            'gellary'=>'public/productImage/images4.jpg'
        ]
    );
    }
}
