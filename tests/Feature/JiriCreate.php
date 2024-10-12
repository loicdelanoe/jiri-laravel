<?php

use App\Enums\ContactRole;
use App\Models\Contact;
use App\Models\Jiri;
use App\Models\Project;
use App\Models\User;
use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = User::factory()
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

    $this->user2 = User::factory()
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
});

it("check if the user id of a contact from the request is associated to the auth user", function () {
    actingAs($this->user);

//    $response = $this->user->contacts()->findOrFail(50);

    dd($this->user2->contacts);
});
