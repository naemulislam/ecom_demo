<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/products.json');
        $products = json_decode($json);
        foreach ($products as $product) {
            Product::factory()->create([
                'name' => $product->name,
                'category' => $product->category,
                'image' => $product->src
            ]);
        }
    }
}
