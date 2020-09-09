<?php

use Illuminate\Database\Seeder;

class AirportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('airports')->delete();
        
        \DB::table('airports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Paris',
                'iata' => 'PAR',
                'city' => 'Paris',
                'city_iata' => 'PAR',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Charles de Gaulle',
                'iata' => 'CDG',
                'city' => 'Paris',
                'city_iata' => 'PAR',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Orly',
                'iata' => 'ORY',
                'city' => 'Paris',
                'city_iata' => 'PAR',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Le Bourget',
                'iata' => 'LBG',
                'city' => 'Paris',
                'city_iata' => 'PAR',
                'country' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'London',
                'iata' => 'LON',
                'city' => 'London',
                'city_iata' => 'LON',
                'country' => 'England',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Heathrow',
                'iata' => 'LHR',
                'city' => 'London',
                'city_iata' => 'LON',
                'country' => 'England',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'City Airport',
                'iata' => 'LCY',
                'city' => 'London',
                'city_iata' => 'LON',
                'country' => 'England',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'San Francisco',
                'iata' => 'SFO',
                'city' => 'San Francisco',
                'city_iata' => 'SFO',
                'country' => 'United States',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Metropolitan Area',
                'iata' => 'LAX',
                'city' => 'Los Angeles',
                'city_iata' => 'LAX',
                'country' => 'United States',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'John F Kennedy Intl',
                'iata' => 'JFK',
                'city' => 'New York',
                'city_iata' => 'NYC',
                'country' => 'United States',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Zurich Airport',
                'iata' => 'ZRH',
                'city' => 'Zurich',
                'city_iata' => 'ZRH',
                'country' => 'Switzerland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Adolfo Suarez-Barajas',
                'iata' => 'MAD',
                'city' => 'Madrid',
                'city_iata' => 'MAD',
                'country' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Frankfurt',
                'iata' => 'FRA',
                'city' => 'Frankfurt',
                'city_iata' => 'FRA',
                'country' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Fiumicino',
                'iata' => 'FCO',
                'city' => 'Rome',
                'city_iata' => 'ROM',
                'country' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Istanbul Airport',
                'iata' => 'IST',
                'city' => 'Istanbul',
                'city_iata' => 'IST',
                'country' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}