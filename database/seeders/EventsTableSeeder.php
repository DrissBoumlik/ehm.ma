<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // $events = json_decode(file_get_contents(storage_path('app\public') . '\json\events.json', true))->events;
        // foreach ($events as $event) {
        for ($index = 0; $index < 12; $index++) {
            $e = new Event;
            // $e->fill((array)$event);
            $e->title_fr = $faker->text(50);
            $e->title_en = $faker->text(50);
            $e->title_ar = $faker->text(50);
            $e->description_fr = $faker->text(200);
            $e->description_en = $faker->text(200);
            $e->description_ar = $faker->text(200);
            $e->start_date = $faker->date();
            $e->image = Arr::random(['/images/events/image (1).png', '/images/events/image (2).png', '/images/events/image (3).png']);
            $e->save();
        }
    }
}
