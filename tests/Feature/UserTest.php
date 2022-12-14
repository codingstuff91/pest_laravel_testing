<?php

use App\Models\User;

it('fetchs a list of 10 users', function(){
    $users = User::factory(10)->create();

    expect($users->count())->toBe(10);
});

it('creates a new user', function(){
    $user = User::factory()->create();

    expect($user->count())->toBeOne();
});

it('has an email', function(){
    $user = User::factory()->create();

    expect($user->email)->not->toBeNull();
});

test('The name is a string', function(){
    $user = User::factory()->create();

    expect($user->name)->toBeString();
});

it('has a name of Chuck NORRIS', function(){
    $user = User::factory()->create(["name" => "Chuck NORRIS"]);
    expect($user->name)->toStartWith('Chuck');
    expect($user->name)->toEndWith('NORRIS');
    expect($user->name)->toContain('Chuck');
    expect($user->name)->toContain('NORRIS');
    expect($user->name)->toContain('Chuck', 'NORRIS');
    expect($user->name)->toEqual('Chuck NORRIS');
});
