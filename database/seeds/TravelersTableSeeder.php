<?php

use Illuminate\Database\Seeder;

class TravelersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('travelers')->delete();
        
        \DB::table('travelers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'booking_id' => 1,
                'gender' => 'male',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@mail.com',
                'birth_date' => '1950-03-04',
                'country_code' => '1',
                'phone' => '12345',
                'passport' => NULL,
                'passport_expire' => NULL,
                'created_at' => '2020-01-30 16:24:15',
                'updated_at' => '2020-01-30 16:24:15',
            ),
        ));
        
        
    }
}