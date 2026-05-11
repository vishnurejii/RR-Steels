<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'customer_name' => 'Alex Varghese',
                'company_name' => 'Principal Architect, AV Designs',
                'rating' => 5,
                'comment' => "The quality of TMT bars from RR Steels is exceptional. We've used them for our major infrastructure projects in Thrissur, and the consistency is unmatched.",
                'is_approved' => true,
                'avatar_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=100'
            ],
            [
                'customer_name' => 'Suresh Kumar',
                'company_name' => 'Director, SK Constructions',
                'rating' => 5,
                'comment' => "Reliable supply chain and competitive pricing. RR Steels has been our primary steel distributor for over 5 years. Truly a dependable partner.",
                'is_approved' => true,
                'avatar_url' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=100'
            ],
            [
                'customer_name' => 'John Mathew',
                'company_name' => 'Project Manager, Skyline Infra',
                'rating' => 5,
                'comment' => "The best steel distribution service in Kerala. Their technical knowledge and quick delivery schedules helped us stay ahead of our project timelines.",
                'is_approved' => true,
                'avatar_url' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=100'
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
