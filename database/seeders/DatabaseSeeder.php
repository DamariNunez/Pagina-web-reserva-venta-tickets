<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(TimetablesSeeder::class);
        $this->call(AudiencesSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(HappensSeeder::class);
        $this->call(PlacesSeeder::class);
        $this->call(HeldsSeeder::class);
        $this->call(SeatsSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(AvailablesSeeder::class);
        $this->call(TicketsSeeder::class);
        $this->call(PaymentsSeeder::class);
        $this->call(BillsSeeder::class);
    }
}
