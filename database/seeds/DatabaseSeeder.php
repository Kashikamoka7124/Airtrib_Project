<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RequireSeeder::class);

        $this->call(AirportsTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(DonationsTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(TravelersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CustomerOrganizationTableSeeder::class);

        // \App\Customer::find(1)->update([
        //     'stripe_customer' => Cache::get('test_stripe_customer')
        // ]);
    }
}
