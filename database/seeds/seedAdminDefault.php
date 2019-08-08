<?php

use Illuminate\Database\Seeder;
use App\ModelAdmin;

class seedAdminDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelAdmin::create([
        	'username'		=>	'admin',
        	'password'		=>	Hash::make('password'),
        ]);
    }
}
