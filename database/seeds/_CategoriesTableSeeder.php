<?php

use Illuminate\Database\Seeder;

class _CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Corporate Type',
                'key' => 'Corporate Type'
            ],
        ];

        DB::table('categories')->insert($categories);

        $corporateTypes = [
            [
                'parent_id' => 1,
                'name' => 'Company',
                'slug' => 'company'
            ],
            [
                'parent_id' => 1,
                'name' => 'Institution',
                'slug' => 'institution'
            ],
            [
                'parent_id' => 1,
                'name' => 'Association',
                'slug' => 'association'
            ],
            [
                'parent_id' => 1,
                'name' => 'Foundation',
                'slug' => 'foundation'
            ],
        ];

        DB::table('categories')->insert($corporateTypes);
    }
}
