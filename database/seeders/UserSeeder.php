<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records =
            [
                [
                    'name' => fake()->userName(),
                    'score' => fake()->numberBetween(1, 10),
                ],
                [
                    'name' => fake()->userName(),
                    'score' => fake()->numberBetween(1, 10),
                ],
                [
                    'name' => fake()->userName(),
                    'score' => fake()->numberBetween(1, 10),
                ],
            ];
        foreach ($records as $record) {
            $user = new User();
            $user->fill($record);
            $user->save();
        }
    }
}
