<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('messages')->delete();
        $faker = Faker\Factory::create();

        $limit = 20;
        for($i = 0; $i < $limit; $i++){
            DB::table('messages')->insert([
                'user_id' => (($faker->randomNumber($nbDigits = 2)) % 10 + 1),
                'location_id' => (($faker->randomNumber($nbDigits = 2)) % 10 + 1),
                'content' => $faker->paragraph($nmSentences = 5),
                'likes' => $faker->randomNumber($nbDigits = 2)
            ]);
         
        }
        $this->command->info('seeding finished for messages!');
    }
}
