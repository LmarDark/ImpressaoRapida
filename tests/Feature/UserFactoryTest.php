<?php
use App\Models\User;

it('creates a user using the factory', function () {
    $user = User::factory()->create();

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'email' => $user->email,
    ]);
});