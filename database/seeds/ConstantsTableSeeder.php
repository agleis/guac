<?php

use Illuminate\Database\Seeder;

class ConstantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('constants')->insert([
          'name' => 'about_title',
          'content' => 'About Guac Magazine'
        ]);
        DB::table('constants')->insert([
          'name' => 'about',
          'content' => '<p>We are a team of diverse students dedicated to
            writing about international travel. More to come.</p>'
        ]);
    }
}
