<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2020-01-29 17:21:31',
                'password' => '$2y$10$cY.5r3mpRD..fcB9zyYgM.XNJBsymYKflc8jnxoZmdcKzMmuozn.u',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jane Doe',
                'email' => 'jane@mail.com',
                'email_verified_at' => '2020-01-29 17:21:31',
                'password' => '$2y$10$cY.5r3mpRD..fcB9zyYgM.XNJBsymYKflc8jnxoZmdcKzMmuozn.u',
                'remember_token' => NULL,
                'created_at' => '2020-01-30 16:24:11',
                'updated_at' => '2020-01-30 16:24:11',
            ),
        ));
        
        
    }
}