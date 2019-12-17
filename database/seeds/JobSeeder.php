<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;
        
        $faker = Faker\Factory::create();

        for($i = 0; $i < $limit; $i++){
            DB::table('jobs')->insert([
                'nama'=>$faker->name,
            ]);
        }
    }
}
