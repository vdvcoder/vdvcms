<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                        => 1,
                'name'                      => 'Admin',
                'email'                     => 'admin@admin.com',
                'password'                  => bcrypt('password'),
                'remember_token'            => null,
                'approved'                  => 1,
                'verified'                  => 1,
                'verified_at'               => '2020-08-19 07:47:41',
                'verification_token'        => '',
                'mollie_customer'           => '',
                'mollie_mandate'            => '',
                'extra_billing_information' => '',
            ],
        ];

        User::insert($users);
    }
}
