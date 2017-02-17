<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            $res =  DB::table('users')->insertGetId([ //,
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->userName,
                'country'=>$faker->country
            ]);

            for($inner =0;$inner<4;$inner++){
                DB::table('quotes')->insert([
                    'user_id'=>$res,
                    'text'=>$faker->text($maxNbChars = 200),
                    'author'=>$faker->lastName
                ]);
            }
            $this->command->info($res);

        }
    }
}
