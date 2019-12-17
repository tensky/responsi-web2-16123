<?php

use App\Jobs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 150;
        
        $faker = Faker\Factory::create();
        $jobs =Jobs::all()->pluck('id_jobs')->toArray();
        for($i = 0; $i < $limit; $i++){
            DB::table('employees')->insert([
                'id_jobs'=>$faker->randomElement($jobs),
                'name'=>$faker->name,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
            ]);
        }
    }
}
