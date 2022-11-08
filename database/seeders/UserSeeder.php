<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory(10)->create();
        // collect([
        //   [
        //     'name' => 'Nanda Hermawansyah',
        //     'email' => 'nanda@gmail.com',
        //     // 'password' => Hash::make('password'),
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => Carbon::now(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //   ],
        //   [
        //     'name' => 'Hesti Sukmawati',
        //     'email' => 'hesti@gmail.com',
        //     // 'password' => Hash::make('password'),
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => Carbon::now(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //   ]
        // ])->each(function ($user) {
        //   DB::table('users')->insert($user);
        // });
    }
}
