<?php

use Illuminate\Database\Seeder;

use App\User;

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
        User::create([
            'id' => 1,
            'name' => 'Adam Gleisner',
            'email' => 'amg295@cornell.edu',
            'bio' => 'Hi! My name is Adam.',
            'image' => '/images/bariloche1.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 2,
            'name' => 'Zeyu Hu',
            'email' => 'zh75@cornell.edu',
            'bio' => 'Hi! My name is Zeyu.',
            'image' => '/images/bariloche1.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 3,
            'name' => 'Fanny Chen',
            'email' => 'ffc24@cornell.edu',
            'bio' => 'Hi! My name is Fanny.',
            'image' => '/images/bariloche1.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 4,
            'name' => 'Pia Bocanegra',
            'email' => 'sib35@cornell.edu',
            'bio' => 'Hi! My name is Pia.',
            'image' => '/images/bariloche1.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 5,
            'name' => 'Christine Relander',
            'email' => 'cr463@cornell.edu',
            'bio' => 'Hi! My name is Christine.',
            'image' => '/images/bariloche1.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 6,
            'name' => 'Lauren McBrearty',
            'email' => 'lmm299@cornell.edu',
            'bio' => 'Hi! My name is Lauren.',
            'image' => '/images/bariloche1.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 7,
            'name' => 'Akanksha Jain',
            'email' => 'aj448@cornell.edu',
            'bio' => 'Hi! My name is Akanksha.',
            'image' => '/images/bariloche1.jpg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 8,
            'name' => 'Cathy Zhang',
            'email' => 'cz223@cornell.edu',
            'bio' => 'Hi! My name is Cathy.',
            'image' => '/images/bariloche1.jpg',
            'password' => bcrypt('guacmag'),
        ]);
    }
}
