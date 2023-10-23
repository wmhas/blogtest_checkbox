<?php

use Illuminate\Database\Seeder;
use App\Customer;
class OrganizationSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Organization::class, 10)->create()->each(function ($org) {


            // Seed the relation with 5 purchases
            $customers = factory(Customer::class, 5)->make();
            $org->customers()->saveMany($customers);
        });
    }
}
