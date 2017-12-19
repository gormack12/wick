<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
        	'name' => 'php',
        	'genre' => 'programming language',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('skills')->insert([
        	'name' => 'javascript',
        	'genre' => 'programming language',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('skills')->insert([
        	'name' => 'java',
        	'genre' => 'programming language',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('skills')->insert([
        	'name' => 'c',
        	'genre' => 'programming language',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('skills')->insert([
        	'name' => 'c++',
        	'genre' => 'programming language',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('skills')->insert([
        	'name' => 'mySQL',
        	'genre' => 'dbms',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('skills')->insert([
        	'name' => 'maria db',
        	'genre' => 'dbms',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('skills')->insert([
        	'name' => 'laravel',
        	'genre' => 'framework',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('skills')->insert([
        	'name' => 'symfony',
        	'genre' => 'framework',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
    }
}
