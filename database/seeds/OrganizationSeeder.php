<?php

use Illuminate\Database\Seeder;
use App\Organization;

class OrganizationSeeder extends Seeder
{
    public function run()
    {
        // Create 10 organization records using the factory
        factory(Organization::class, 100)->create();
    }
}
