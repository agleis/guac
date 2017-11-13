<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
          'name' => 'bariloche',
          'city' => 'Bariloche',
          'title' => 'Mountains, Lakes, and Cool Snowflakes',
          'text' => $this->getText('bariloche'),
          'user_id' => 3,
          'image' => '/public/images/Stories%20-%20Issue%201%20-%20Baliroche/Fanny%20(12).jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 2,
          'country_id' => 10,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'longmen_grottoes',
          'city' => 'Luoyang',
          'title' => 'Longmen Grottoes - A Forgotten Ancient Wonder',
          'text' => $this->getText('longmen'),
          'user_id' => 2,
          'image' => '/public/images/Stories%20-%20Issue%201%20-%20Longmen%20Grottoes/Zeyu%20(11).jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 12,
          'country_id' => 46,
          'created_at' => Carbon::now()->addMinutes(1)->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->addMinutes(1)->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'phobjikha_valley',
          'city' => 'Phobjikha Valley',
          'title' => 'Phobjikha Valley: A Nature Trail at the Last Shangri-La',
          'text' => $this->getText('phobjikha'),
          'user_id' => 4,
          'image' => '/public/images/Stories%20-%20Issue%201%20-%20Phobjikha%20Valley/Pia%20(7)-%20header.jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 10,
          'country_id' => 25,
          'created_at' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'cesano',
          'city' => 'Cesano',
          'title' => 'Oratorio e Orecchiette: What it’s Like to Volunteer in a Small Italian Town',
          'text' => $this->getText('cesano'),
          'user_id' => 6,
          'image' => '/public/images/Stories%20-%20Issue%201%20-%20Cesano/Lauren%20(11).jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 4,
          'country_id' => 109,
          'created_at' => Carbon::now()->addMinutes(3)->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->addMinutes(3)->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'drobak',
          'city' => 'Drøbak',
          'title' => 'The Village in the Valley',
          'text' => $this->getText('drobak'),
          'user_id' => 5,
          'image' => '/public/images/Christine%20(13).jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 4,
          'country_id' => 164,
          'created_at' => Carbon::now()->addMinutes(4)->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->addMinutes(4)->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'morocco',
          'city' => 'Tangier',
          'title' => 'Colors of Morocco, the Western Kingdom',
          'text' => $this->getText('morocco'),
          'user_id' => 8,
          'image' => '/public/images/Stories%20-%20Issue%201%20-%20Morocco/Cathy%20(5)(1).jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 5,
          'country_id' => 148,
          'created_at' => Carbon::now()->addMinutes(5)->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->addMinutes(5)->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'bali',
          'city' => 'Bali',
          'title' => 'Sunset Lover’s Paradise',
          'text' => $this->getText('bali'),
          'user_id' => 7,
          'image' => '/public/images/Stories%20-%20Issue%201%20-%20Bali/Akanksha%20(14).jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 11,
          'country_id' => 103,
          'created_at' => Carbon::now()->addMinutes(6)->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->addMinutes(6)->format('Y-m-d H:i:s')
        ]);
        DB::table('articles')->insert([
          'name' => 'tanzania',
          'city' => 'Rhotia',
          'title' => 'Ninapenda Tanzania: A Summer in the Savannah',
          'text' => $this->getText('tanzania'),
          'user_id' => 10,
          'image' => '/public/images/Stories%20-%20Issue%201%20-%20Tanzania/Maddie%20(2).jpg',
          'featured' => true,
          'issue' => 'Issue 1',
          'category_id' => 1,
          'region_id' => 6,
          'country_id' => 219,
          'created_at' => Carbon::now()->addMinutes(7)->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->addMinutes(7)->format('Y-m-d H:i:s')
        ]);
    }

    /**
     * Gets the text in $name.html
     *
     * @param string $name
     * @return string
     */
    public function getText($name) {
        $file = fopen("database/seeds/articles/$name.html", 'r');
        $text = fread($file, filesize("database/seeds/articles/$name.html"));
        fclose($file);
        return $text;
    }
}
