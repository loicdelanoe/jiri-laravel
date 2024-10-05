<?php

use App\Enums\ContactRole;
use App\Models\User;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

beforeEach(function () {
    $this->user = User::factory()
        ->hasJiris()
        ->hasContacts()
        ->create();

    $this->user->each(function ($user) {
        $user->jiris->each(function ($jiri) use ($user) {
            $jiri->evaluators()->attach(
                $user->contacts->random(1), ['role' => ContactRole::Student->value]
            );
        });
    });
});

it('updates the role of a contact in a jiri', function () {
    $attendance_data = [
        'id' => 1,
        'jiri_id' => '1',
        'contact_id' => '1',
        'role' => ContactRole::Evaluator->value,
    ];

    $response = post(route('attendances.update'), $attendance_data);

    $response->assertStatus(200);
});
