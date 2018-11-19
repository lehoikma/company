<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'Viet Nam',
            'alias' => 'vn',
        ]);
        DB::table('languages')->insert([
            'name' => 'English',
            'alias' => 'en',
        ]);
    }
}
