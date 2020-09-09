<?php

use Illuminate\Database\Seeder;

class RequireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(_UsersTableSeeder::class);
        $this->call(_AirportsTableSeeder::class);
        $this->call(_OrganizationsTableSeeder::class);
        $this->call(_CountriesTableSeeder::class);
        $this->call(_CategoriesTableSeeder::class);
        $this->call(_LanguagesTableSeeder::class);
    }
}
