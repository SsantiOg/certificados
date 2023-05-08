<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Document;
use App\Models\Contract;
use App\Models\User;

class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'id_documents' => $faker->randomElement(Document::all()->pluck('id')),
            'doc' => $faker->numberBetween(10000,99999),
            'salary' => $faker->numberBetween(10000,99999),
            'pay_per_hour' => $faker->numberBetween(10000,99999),
            'id_contracts' => $faker->randomElement(Contract::all()->pluck('id')),
            'id_users' => $faker->randomElement(User::all()->pluck('id')),
        ];
    }
}
