<?php

namespace Database\Seeders;

use App\Enums\ContactRole;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)
            ->hasJiris(5)
            ->hasContacts(10)
            ->hasProjects(5)
            ->create();

        User::factory()
            ->hasJiris(5)
            ->hasContacts(10)
            ->hasProjects(5)
            ->create([
                'name' => 'Loïc Delanoë',
                'email' => 'loic.del4127@gmail.com',
                "password" => '12345678'
            ]);

        // Seed Attendance
        User::all()->each(function ($user) {
            $user->jiris->each(function ($jiri) use ($user) {
                $jiri->evaluators()->attach(
                    $user->contacts->random(10), ['role' => random_int(0,1) ? ContactRole::Student->value : ContactRole::Evaluator->value]
                );
            });
        });
    }
}
