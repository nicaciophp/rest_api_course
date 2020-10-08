<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Float_;
use Psy\Util\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->times(10)->create();
    }
}
