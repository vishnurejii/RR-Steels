<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HardwareSeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Other Hardware Goods',
            'slug' => 'other-hardware-goods',
            'description' => 'A variety of essential industrial hardware and tools.',
        ]);

        $products = [
            ['name' => 'Industrial Bolts & Nuts', 'description' => 'Heavy-duty fasteners for structural steel connections.'],
            ['name' => 'Steel Hinges', 'description' => 'Durable hinges for industrial doors and gates.'],
            ['name' => 'Welding Electrodes', 'description' => 'High-quality electrodes for professional welding applications.'],
            ['name' => 'Metal Grinding Discs', 'description' => 'Abrasive discs for smooth finishing of steel surfaces.'],
            ['name' => 'Industrial Safety Gear', 'description' => 'Essential protection for hardware and construction work.'],
            ['name' => 'Steel Wire Ropes', 'description' => 'High-tensile strength ropes for lifting and securing.'],
        ];

        foreach ($products as $p) {
            Product::create([
                'category_id' => $category->id,
                'name'        => $p['name'],
                'slug'        => Str::slug($p['name']),
                'description' => $p['description'],
                'sizes'       => ['Small', 'Medium', 'Large', 'Custom'],
                'price'       => rand(100, 1000),
                'is_featured' => true,
                'image'       => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=600',
            ]);
        }
    }
}
