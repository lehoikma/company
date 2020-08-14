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
        DB::table('categories_cap_1')->insert([
            'id' => '5',
        ]);
        DB::table('categories_cap_1')->insert([
            'id' => '6',
        ]);

        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '1',
            'languages_id' => '1',
            'name' => 'Gia Súc Lớn',
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
            'name' => 'Heo',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '3',
            'languages_id' => '2',
            'name' => 'Pig',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '4',
            'languages_id' => '1',
            'name' => 'Thú cưng',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '4',
            'languages_id' => '2',
            'name' => 'pet',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '5',
            'languages_id' => '1',
            'name' => 'Dinh dưỡng',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '5',
            'languages_id' => '2',
            'name' => 'Nutrition',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '6',
            'languages_id' => '1',
            'name' => 'Thuốc sát trùng',
        ]);
        DB::table('categories_cap_1_language')->insert([
            'categories_cap_1_id' => '6',
            'languages_id' => '2',
            'name' => 'Insecticide',
        ]);
    }
}
