<?php

use Illuminate\Database\Seeder;

class DanhMucSanPhamCap1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_cap_1')->insert([
            'id' => '1',
        ]);
        DB::table('categories_cap_1')->insert([
            'id' => '2',
        ]);
        DB::table('categories_cap_1')->insert([
            'id' => '3',
        ]);
        DB::table('categories_cap_1')->insert([
            'id' => '4',
        ]);

        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '1',
            'languages_id' => '1',
            'name' => 'Gia Súc',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '1',
            'languages_id' => '2',
            'name' => 'Cattle',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '2',
            'languages_id' => '1',
            'name' => 'Gia Cầm',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '2',
            'languages_id' => '2',
            'name' => 'Poultry',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '3',
            'languages_id' => '1',
            'name' => 'Lợn',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '3',
            'languages_id' => '2',
            'name' => 'Pig',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '4',
            'languages_id' => '1',
            'name' => 'Chó, Mèo',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '4',
            'languages_id' => '2',
            'name' => 'Dogs and cats',
        ]);
    }
}
