<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_news')->insert([
            'id' => '1',
        ]);
        DB::table('categories_news')->insert([
            'id' => '2',
        ]);
        DB::table('categories_news')->insert([
            'id' => '3',
        ]);
        DB::table('categories_news')->insert([
            'id' => '4',
        ]);

        DB::table('categories_news_language')->insert([
            'news_category_id' => '1',
            'languages_id' => '1',
            'name' => 'Tin Amavet',
        ]);
        DB::table('categories_news_language')->insert([
            'news_category_id' => '1',
            'languages_id' => '2',
            'name' => 'News Amavet',
        ]);
        DB::table('categories_news_language')->insert([
            'news_category_id' => '2',
            'languages_id' => '1',
            'name' => 'Tin Kỹ Thuật',
        ]);
        DB::table('categories_news_language')->insert([
            'news_category_id' => '2',
            'languages_id' => '2',
            'name' => 'News Skill',
        ]);
        DB::table('categories_news_language')->insert([
            'news_category_id' => '3',
            'languages_id' => '1',
            'name' => 'Tin Thị Trường',
        ]);
        DB::table('categories_news_language')->insert([
            'news_category_id' => '3',
            'languages_id' => '2',
            'name' => 'News Market',
        ]);
        DB::table('categories_news_language')->insert([
            'news_category_id' => '4',
            'languages_id' => '1',
            'name' => 'Hoạt Động Xã Hội',
        ]);
        DB::table('categories_news_language')->insert([
            'news_category_id' => '4',
            'languages_id' => '2',
            'name' => 'Social Activities',
        ]);
    }
}
