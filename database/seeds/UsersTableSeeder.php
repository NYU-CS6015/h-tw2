<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        $faker = Faker\Factory::create();

        $limit = 10;
        for($i = 0; $i < $limit; $i++){
            DB::table('users')->insert([
                'name' => $faker->sentence($nbWords = 1),
                'email' => $faker->sentence($nbWords = 1),
                'password' => $faker->sentence($nbWords = 1),
                'location_id' => (($faker->randomNumber($nbDigits = 2)) % 10 + 1),
            ]);
         
        }
        $this->command->info('seeding finished for users!');
    }
}
