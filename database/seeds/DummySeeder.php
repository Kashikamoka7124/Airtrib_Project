<?php

use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UsersTableSeeder::class);
        $this->call(AirportsTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);

        // $this->customers();
        // $this->users();
        // $this->travelers();
        // $this->bookings();
        // $this->payments();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected function users()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
            ],
        ];

        DB::table('users')->insert($users);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected function customers()
    {
        $customers = [
            [
                'name' => 'English',
                'code' => 'en',
                'active' => true,
            ],
        ];

        DB::table('customers')->insert($customers);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected function travelers()
    {
        $travelers = [
            [
                'name' => 'English',
                'code' => 'en',
                'active' => true,
            ],
        ];

        DB::table('travelers')->insert($travelers);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected function bookings()
    {
        $bookings = [
            [
                'name' => 'English',
                'code' => 'en',
                'active' => true,
            ],
        ];

        DB::table('bookings')->insert($bookings);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected function payments()
    {
        $payments = [
            [
                'name' => 'English',
                'code' => 'en',
                'active' => true,
            ],
        ];

        DB::table('payments')->insert($payments);
    }
}
