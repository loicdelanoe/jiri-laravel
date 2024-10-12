<?php

namespace Database\Seeders;

use App\Enums\ContactRole;
use App\Models\Contact;
use App\Models\Jiri;
use App\Models\Project;
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
            ->has(
                Jiri::factory(5)
                    ->hasAttached(
                        Contact::factory(5)
                            ->state(function (array $attributes, Jiri $jiri) {
                                return ['user_id' => $jiri->user_id];
                            }),
                        fn() => [
                            'role' => random_int(0, 1) ? ContactRole::Evaluator->value : ContactRole::Student->value
                        ]
                    )
                    ->hasAttached(Project::factory(5)
                        ->state(function (array $attributes, Jiri $jiri) {
                            return ['user_id' => $jiri->user_id];
                        }))
            )
            ->hasContacts(5)
            ->create();

        User::factory()
            ->has(
                Jiri::factory(5)
                    ->hasAttached(
                        Contact::factory(5)
                            ->state(function (array $attributes, Jiri $jiri) {
                                return ['user_id' => $jiri->user_id];
                            }),
                        fn() => [
                            'role' => random_int(0, 1) ? ContactRole::Evaluator->value : ContactRole::Student->value
                        ]
                    )
                    ->hasAttached(Project::factory(5)
                        ->state(function (array $attributes, Jiri $jiri) {
                            return ['user_id' => $jiri->user_id];
                        }))
            )
            ->hasContacts(5)
            ->create([
                'name' => 'Loïc Delanoë',
                'email' => 'loic.del4127@gmail.com',
                "password" => '12345678'
            ]);

        // Seed Attendance
        User::all()->each(function ($user) {
            $user->jiris->each(function ($jiri) use ($user) {
                $jiri->evaluators()->attach(
                    $user->contacts->random(10),
                    ['role' => random_int(0, 1) ? ContactRole::Student->value : ContactRole::Evaluator->value]
                );
            });
        });
    }
}
