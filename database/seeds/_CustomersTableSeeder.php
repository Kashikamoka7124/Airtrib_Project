<?php

use Illuminate\Database\Seeder;

class _CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'gender' => 'male',
                'name' => 'Admin',
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'country_id' => 1,
                'country_code' => '92',
                'phone' => '03217973885',
            ],
        ];

        DB::table('customers')->insert($customers);
    }
}
