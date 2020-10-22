<?php

use Illuminate\Database\Seeder;

class customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=1; $i<10; $i++){
           \Illuminate\Support\Facades\DB::table('products')->insert([
               'Code' => 214748364 .$i,
               'Name' => '11' .$i,
                'ProductLineID' => '11'.$i,
                'Scale' => '11'.$i,
                'vendor' => '11'.$i,
                'PdtDescription' => '11'.$i,
                'QtyInStock' => '11'.$i,
                'BuyPrice' => '11'.$i,
                'MSRP' => '11'.$i,

           ]);
       }
    }
}
