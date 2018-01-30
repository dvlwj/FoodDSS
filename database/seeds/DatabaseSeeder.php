<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'created_by' => 'SYSTEM',
            'created_at' => Carbon::now()
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
