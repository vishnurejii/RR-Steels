<?php

namespace Database\Seeders;

use App\Models\ProductVideo;
use Illuminate\Database\Seeder;

class ProductVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            ['company_name' => 'Kairali TMT', 'video_url' => 'https://youtu.be/tDQY5gavAsM?si=zorNasVb_HJ8Dtfv', 'is_active' => true],
            ['company_name' => 'Kalliyath TMT', 'video_url' => 'https://youtu.be/7zKw8G0SQNw?si=NUjMXyyyn_SY4kii', 'is_active' => true],
            ['company_name' => 'Kenza TMT', 'video_url' => 'https://youtu.be/xOwtmmd5jrA?si=62GX8bcVe6gQnCWG', 'is_active' => true],
            ['company_name' => 'Bharathi TMT', 'video_url' => 'https://youtu.be/DCi5At_nsAE?si=xM5JbUf2wL3OS5Qb', 'is_active' => true],
            ['company_name' => 'JSW Neosteel', 'video_url' => 'https://youtu.be/1BtvV3zn5P8?si=KkVFhpWeaXB43pog', 'is_active' => true],
            ['company_name' => 'Tata Tiscon', 'video_url' => 'https://youtu.be/YrWghl75AAw?si=NZo-pCjGJzBQ73-h', 'is_active' => true],
            ['company_name' => 'Indigo Steel', 'video_url' => 'https://youtu.be/Edl4CxbMsYg?si=xjEqJvmc24onBIm3', 'is_active' => true],

        ];

        foreach ($videos as $video) {
            ProductVideo::create($video);
        }
    }
}
