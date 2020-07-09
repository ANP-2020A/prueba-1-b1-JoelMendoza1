<?php

use App\Customers;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customers::truncate();
        $faker = \Faker\Factory::create();

        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 50; $i++) {
            Customers::create([
                'nameCustomers'=> $faker->name,
                'lastnameCustomers'=> $faker->lastName,
                'document'=>$faker->uuid,
            ]);
        }

    }
}
