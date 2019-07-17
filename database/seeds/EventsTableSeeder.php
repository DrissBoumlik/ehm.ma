<?php

use Illuminate\Database\Seeder;
use App\Event;
use Faker\Generator as Faker;
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
        $events = json_decode(file_get_contents(storage_path('app\public') . '\json\events.json', true))->events;
        foreach ($events as $event) {
            $e = new Event;
            $e->fill((array)$event);
            $e->title = $faker->text(50);
            $e->description = $faker->text(200);
            $e->start_date = $faker->date();
            $e->save();
        }
    }
}