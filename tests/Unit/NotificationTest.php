<?php

namespace Tests\Unit;

use App\Notifications\FollowNotified;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;



class NotificationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testNotifications()
{
    Notification::fake();
    $user = $user = factory(\App\User::class)->make();
    $user->notify(new FollowNotified($user));
    Notification::assertSentTo($user, FollowNotified::class);
}

}
