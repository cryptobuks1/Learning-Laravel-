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
        // $this->call(UserSeeder::class);
        //
        $data = [
            [
                'email' => 'nqa1@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'email' => 'nqa2@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
            ],
        ];
        DB::table('customers')->insert($data);
    }
}
