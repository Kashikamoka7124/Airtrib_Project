<?php

use Illuminate\Database\Seeder;

class CustomerOrganizationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_organization')->delete();
        
        \DB::table('customer_organization')->insert(array (
            0 => 
            array (
                'customer_id' => 1,
                'organization_id' => 6,
            ),
        ));
        
        
    }
}