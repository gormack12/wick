<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'firstname' => 'hugues',
        	'lastname' => 'tchouala',
        	'username' => 'gormack',
        	'email' => 'hugues.tchouala25@gmail.com',
        	'password' => bcrypt('secret'),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
    }
}
