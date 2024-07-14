<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com ',
                'password' => bcrypt('password'),

                'client_mobile' => '9999999999',
                'client_gender' => 'male',
                'client_dob_ad' => '1979-12-22',
                'client_dob_bs' => '1979-12-22',
                'client_nationality' => 'nepalese',

                'client_ctzn_num' => '9999999999',
                'client_ctzn_district' => '9999999999',
                'client_ctn_bs' => '1979-12-22',
                'client_ctn_ad' => '1979-12-22',

                'role' => 'admin',
                'status' => 'active',
            ],
            // [
            //     'name' => 'User',
            //     'email' => 'user@gmail.com ',
            //     'phone' => '9999999998',

            //     'role' => 'user',
            //     'status' => 'active',
            //     'password' => bcrypt('password')
            // ],
        ]);
    }
}
