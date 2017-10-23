<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('regions')->insert([
             'id' => 1,
             'name' => 'North America'
         ]);
         DB::table('regions')->insert([
             'id' => 2,
             'name' => 'South America'
         ]);
         DB::table('regions')->insert([
             'id' => 3,
             'name' => 'Central America'
         ]);
         DB::table('regions')->insert([
             'id' => 4,
             'name' => 'Europe'
         ]);
         DB::table('regions')->insert([
             'id' => 5,
             'name' => 'North Africa'
         ]);
         DB::table('regions')->insert([
             'id' => 6,
             'name' => 'Sub-Saharan Africa'
         ]);
         DB::table('regions')->insert([
             'id' => 7,
             'name' => 'West Africa'
         ]);
         DB::table('regions')->insert([
             'id' => 8,
             'name' => 'Middle East'
         ]);
         DB::table('regions')->insert([
             'id' => 9,
             'name' => 'Central Asia'
         ]);
         DB::table('regions')->insert([
             'id' => 10,
             'name' => 'South Asia'
         ]);
         DB::table('regions')->insert([
             'id' => 11,
             'name' => 'Southeast Asia'
         ]);
         DB::table('regions')->insert([
             'id' => 12,
             'name' => 'East Asia'
         ]);
         DB::table('regions')->insert([
             'id' => 13,
             'name' => 'Oceania'
         ]);
         DB::table('regions')->insert([
             'id' => 14,
             'name' => 'Polynesia'
         ]);
    }
}
