<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attendee;
use App\Models\Event;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laravelWorkshop = Event::where('title', 'Laravel Workshop')->first();
        $webDevSeminar = Event::where('title', 'Web Development Seminar')->first();
        $techConference = Event::where('title', 'Annual Tech Conference')->first();

        // Attendee seed  for different events
        Attendee::create([
            'name' => 'Hari',
            'email' => 'hari@gmail.com',
            'event_id' => $laravelWorkshop->id,
        ]);

        Attendee::create([
            'name' => 'Sita',
            'email' => 'sita@gmail.com',
            'event_id' => $laravelWorkshop->id,
        ]);

        Attendee::create([
            'name' => 'Ram',
            'email' => 'ram@gmail.com',
            'event_id' => $webDevSeminar->id,
        ]);

        Attendee::create([
            'name' => 'Shyam',
            'email' => 'shyam@gmail.com.com',
            'event_id' => $techConference->id,
        ]);

        Attendee::create([
            'name' => 'Laxman',
            'email' => 'laxman@gmail.com.com',
            'event_id' => $techConference->id,
        ]);
    }
}
