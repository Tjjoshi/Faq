<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        for ($i = 1; $i <= 5; $i++) {
            $users->each(function ($user) {
                $follows = factory(\App\Follower::class)->make();
                $follows->user()->associate($user);
                $follows->save();
            });
        }
    }
}
