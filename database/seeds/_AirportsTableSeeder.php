<?php

use Illuminate\Database\Seeder;

class _AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->insert([
            [
                'name' => 'Paris',
                'iata' => 'PAR',
                'city' => 'Paris',
                'city_iata' => 'PAR',
                'country' => 'France',
            ],
            [
                'name' => 'Charles de Gaulle',
                'iata' => 'CDG',
                'city' => 'Paris',
                'city_iata' => 'PAR',
                'country' => 'France',
            ],
            [
                'name' => 'Orly',
                'iata' => 'ORY',
                'city' => 'Paris',
                'city_iata' => 'PAR',
                'country' => 'France',
            ],
            [
                'name' => 'Le Bourget',
                'iata' => 'LBG',
                'city' => 'Paris',
                'city_iata' => 'PAR',
                'country' => 'France',
            ],
            [
                'name' => 'London',
                'iata' => 'LON',
                'city' => 'London',
                'city_iata' => 'LON',
                'country' => 'England',
            ],
            [
                'name' => 'Heathrow',
                'iata' => 'LHR',
                'city' => 'London',
                'city_iata' => 'LON',
                'country' => 'England',
            ],
            [
                'name' => 'City Airport',
                'iata' => 'LCY',
                'city' => 'London',
                'city_iata' => 'LON',
                'country' => 'England',
            ],
            [
                'name' => 'San Francisco',
                'iata' => 'SFO',
                'city' => 'San Francisco',
                'city_iata' => 'SFO',
                'country' => 'United States',
            ],
            [
                'name' => 'Metropolitan Area',
                'iata' => 'LAX',
                'city' => 'Los Angeles',
                'city_iata' => 'LAX',
                'country' => 'United States',
            ],
            [
                'name' => 'John F Kennedy Intl',
                'iata' => 'JFK',
                'city' => 'New York',
                'city_iata' => 'NYC',
                'country' => 'United States',
            ],
            [
                'name' => 'Zurich Airport',
                'iata' => 'ZRH',
                'city' => 'Zurich',
                'city_iata' => 'ZRH',
                'country' => 'Switzerland',
            ],
            [
                'name' => 'Adolfo Suarez-Barajas',
                'iata' => 'MAD',
                'city' => 'Madrid',
                'city_iata' => 'MAD',
                'country' => 'Spain',
            ],
            [
                'name' => 'Frankfurt',
                'iata' => 'FRA',
                'city' => 'Frankfurt',
                'city_iata' => 'FRA',
                'country' => 'Germany',
            ],
            [
                'name' => 'Fiumicino',
                'iata' => 'FCO',
                'city' => 'Rome',
                'city_iata' => 'ROM',
                'country' => 'Italy',
            ],
            [
                'name' => 'Istanbul Airport',
                'iata' => 'IST',
                'city' => 'Istanbul',
                'city_iata' => 'IST',
                'country' => 'Turkey',
            ],
        ]);
    }
}
