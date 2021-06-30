<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
    		[
    			'name' => "Admin",
    			'email' => "admin@neelima.com",
    			'password' => bcrypt('secret'),
    			'is_admin' => true,
    		],
    		[
    			'name' => "Neelima Bharti",
    			'email' => "neelima.bharti@mail.vinove.com",
    			'password' => bcrypt('Password*123'),
    			'is_admin' => false,
            ],
        ];

        foreach ($users as $user) {
    		User::create($user);
    	}

    }
}
