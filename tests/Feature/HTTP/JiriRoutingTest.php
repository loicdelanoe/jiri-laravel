<?php

use App\Models\Jiri;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

beforeEach(function () {
    $this->user = User::factory()->create();
});

it('routes the request to an index of jiris', function () {
    $response = get(route('jiri.index'));

    $response->assertStatus(200);
});

it('routes with model binding the request to a page that shows a specific jiri according to its ID', function () {
    $jiri = Jiri::factory()->create();

    $response = get(route('jiri.show', compact('jiri')));

    $response->assertStatus(200);
});

it('routes the request to a save in database action when providing datas describing a jiri', function () {
    $jiri_data = [
        'name' => 'Projets Web 2025',
        "starting_at" => now()->format("Y-m-d H:i"),
    ];

    $response = post(route('jiri.store'), $jiri_data);

    $response->assertStatus(302);

    assertDatabaseHas('jiris', $jiri_data);
});

it('routes the request to a page that displays a form to create a jiri', function () {
    actingAs($this->user);

    $response = get(route('jiri.create'));

    $response->assertStatus(200);
});
