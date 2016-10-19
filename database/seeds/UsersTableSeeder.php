<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'          => 'Carlos Castillo',
            'email'         => 'info@carloscastillo.cl',
            'profession'    => 'Web developer',
            'password'      => bcrypt('123456'),
            'active'	    => true,
        ]);
    }
}
