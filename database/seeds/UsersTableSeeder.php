<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::Create([
        	'firstname' => 'Test',
            'lastname' => 'One',
        	'email' => 'testone@yahoo.com',
           	'password' => bcrypt('one')
        ]);

        User::Create([
            'firstname' => 'Test',
            'lastname' => 'Two',
            'email' => 'testtwo@yahoo.com',
            'password' => bcrypt('two')
        ]);
    }
}
