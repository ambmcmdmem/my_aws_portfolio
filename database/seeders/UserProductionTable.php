<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Production;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserProductionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory(10)->create()->each(function($user) {
            Production::factory(10)->create([
                'user_id' => $user->id,
            ]);
        });

        $myName = 'TestDaiki';
        if(!User::whereName($myName)->exists()) {
            User::whereId(2)->update([
                'name' => $myName,
                'email' => 'ambmcmdmem@au.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Daiki931'),
                'remember_token' => Str::random(10)
            ]);
        }
    }
}
