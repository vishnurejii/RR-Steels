<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@rrsteels.in'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('admin123'),
            ]
        );

        // Categories with their representative product images
        $categories = [
            [
                'name'        => 'TMT Bars',
                'description' => 'High-strength thermo-mechanically treated bars for reinforced concrete.',
                'image'       => 'https://rhlprofiles.com/blog/wp-content/uploads/2023/01/TMT-1.jpg',
            ],
            [
                'name'        => 'Steel Pipes',
                'description' => 'Industrial grade pipes for plumbing, structural, and oil & gas needs.',
                'image'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIJd4PnMi1igZJ5vHXi3xWYXoJ2mNFbZcqR2O2szBB&s',
            ],
            [
                'name'        => 'Steel Sheets',
                'description' => 'Cold-rolled and hot-rolled sheets for automotive and industrial use.',
                'image'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU8lD7QaNXrqcYdw1AEXemOUa4xoJmElPxRQ&s',
            ],
            [
                'name'        => 'Steel Rods',
                'description' => 'Solid steel rods in various grades and dimensions.',
                'image'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr_kaNU3GUrPvxmUNOeeSiyaF1e4ibBdruHA&s',
            ],
        ];

        foreach ($categories as $cat) {
            $category = Category::create([
                'name'        => $cat['name'],
                'slug'        => Str::slug($cat['name']),
                'description' => $cat['description'],
            ]);

            // Products for each category
            for ($i = 1; $i <= 4; $i++) {
                Product::create([
                    'category_id' => $category->id,
                    'name'        => $category->name . ' Series ' . $i,
                    'slug'        => Str::slug($category->name . ' Series ' . $i),
                    'description' => 'This is a premium quality ' . strtolower($category->name) . ' designed for maximum durability and strength in various industrial applications.',
                    'sizes'       => ['8mm', '10mm', '12mm', '16mm', '20mm'],
                    'price'       => rand(500, 5000),
                    'is_featured' => $i == 1,
                    'image'       => $cat['image'],
                ]);
            }
        }
    }
}
