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
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 2,
            'name' => 'Zeyu Hu',
            'email' => 'zh75@cornell.edu',
            'bio' => 'Hi! My name is Zeyu.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 3,
            'name' => 'Fanny Chen',
            'email' => 'ffc24@cornell.edu',
            'bio' => 'Hi! My name is Fanny.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 4,
            'name' => 'Pia Bocanegra',
            'email' => 'sib35@cornell.edu',
            'bio' => 'Hi! My name is Pia.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 5,
            'name' => 'Christine Relander',
            'email' => 'cr463@cornell.edu',
            'bio' => 'Hi! My name is Christine.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 6,
            'name' => 'Lauren McBrearty',
            'email' => 'lmm299@cornell.edu',
            'bio' => 'Hi! My name is Lauren.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 7,
            'name' => 'Akanksha Jain',
            'email' => 'aj448@cornell.edu',
            'bio' => 'Hi! My name is Akanksha.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 8,
            'name' => 'Cathy Zhang',
            'email' => 'cz223@cornell.edu',
            'bio' => 'Hi! My name is Cathy.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 9,
            'name' => 'Mind Apivessa',
            'email' => 'ta273@cornell.edu',
            'bio' => 'Hi! My name is Mind.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
        User::create([
            'id' => 10,
            'name' => 'Maddie Holden',
            'email' => 'mh2359@cornell.edu',
            'bio' => 'Hi! My name is Maddie.',
            'image' => '/images/0rh0hh7OE1KYtroU09nnlsyfMJA6sVNDxAxMe3F3.jpeg',
            'password' => bcrypt('guacmag'),
        ]);
    }
}
