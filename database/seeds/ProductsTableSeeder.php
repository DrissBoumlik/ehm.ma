<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = json_decode(file_get_contents(storage_path('app\public') . '\json\products.json', true))->products;
        foreach ($products as $product) {
            $p = new Product;
            $p->fill((array)$product);
            $p->save();
        }
    }
}
