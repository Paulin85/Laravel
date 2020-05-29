<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(App\Entreprise::class, 10)->create()->each(function ($entreprise) {
            $i = rand(2, 8);
            while (--$i) {
                $entreprise->contacts()->save(factory(App\Contact::class)->make());
            }
        });        
    }

 
}
