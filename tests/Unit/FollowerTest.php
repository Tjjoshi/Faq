<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFollowers()
    {
        $user = $user = factory(\App\User::class)->make();
        $user->save();
        $follows = factory(\App\Follower::class)->make();
        $follows->user()->associate($user);
        $this->assertTrue($follows->save());

    }
}
