<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

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
             'name' => 'North America',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 2,
             'name' => 'South America',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 3,
             'name' => 'Central America',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 4,
             'name' => 'Europe',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 5,
             'name' => 'North Africa',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 6,
             'name' => 'Sub-Saharan Africa',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 7,
             'name' => 'West Africa',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 8,
             'name' => 'Middle East',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 9,
             'name' => 'Central Asia',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 10,
             'name' => 'South Asia',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 11,
             'name' => 'Southeast Asia',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 12,
             'name' => 'East Asia',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 13,
             'name' => 'Oceania',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('regions')->insert([
             'id' => 14,
             'name' => 'Polynesia',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
    }
}
