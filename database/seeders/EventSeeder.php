<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'Laravel Workshop',
            'description' => 'An in-depth workshop on Laravel basics and advanced topics.',
            'date' => '2024-11-10',
            'location' => 'Kathmandu',
            'category_id' => Category::where('name', 'Workshop')->first()->id,
        ]);

        Event::create([
            'title' => 'Web Development Seminar',
            'description' => 'A seminar covering the latest trends in web development.',
            'date' => '2024-12-05',
            'location' => 'Pokhara',
            'category_id' => Category::where('name', 'Seminar')->first()->id,
        ]);

        Event::create([
            'title' => 'Annual Tech Conference',
            'description' => 'A large conference bringing together tech enthusiasts and professionals.',
            'date' => '2024-11-20',
            'location' => 'Chitwan',
            'category_id' => Category::where('name', 'Conference')->first()->id,
        ]);

        Event::create([
            'title' => 'JavaScript Workshop',
            'description' => 'A hands-on workshop on JavaScript fundamentals and frameworks.',
            'date' => '2024-11-15',
            'location' => 'Biratnagar',
            'category_id' => Category::where('name', 'Workshop')->first()->id,
        ]);

        Event::create([
            'title' => 'Cybersecurity Seminar',
            'description' => 'Learn about the latest cybersecurity threats and prevention techniques.',
            'date' => '2024-12-15',
            'location' => 'Dhangadhi',
            'category_id' => Category::where('name', 'Seminar')->first()->id,
        ]);
    }
}
