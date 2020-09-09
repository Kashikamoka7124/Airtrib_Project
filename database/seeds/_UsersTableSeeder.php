<?php

use Illuminate\Database\Seeder;

class _UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'email_verified_at' => '2020-01-29 17:21:31',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
