<?php

use Illuminate\Database\Seeder;
use codeDelivery\Models\User;
use codeDelivery\Models\Client;

class UserTableSeeder extends Seeder
{

    public function run(){

    	factory(User::class)->create( [
	        'name' => 'User',
	        'email' => 'user@user.com',
	        'email_verified_at' => now(),
	        'password' => bcrypt(123456),
	        'remember_token' => str_random(10),
    	]);

    	factory(User::class)->create( [
	        'name' => 'Admin',
	        'email' => 'admin@user.com',
	        'email_verified_at' => now(),
	        'password' => bcrypt(123456),
	        'role'=>'admin',
	        'remember_token' => str_random(10),
    	]);

        factory(User::class, 10)->create()->each(function($u){
        	$u->client()->save(factory(Client::class)->make());
        });
    }
}
