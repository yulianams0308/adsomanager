<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Apprentice;
use App\Models\Competence;
use App\Models\Datasheet;
use App\Models\Instructor;
use App\Models\Result;
use App\Models\Role;
use App\Models\Room;
use App\Models\Session;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Role::factory(10)->create();
        User::factory(10)->create();
       //Image::factory(10)->create();
        Competence::factory(10)->create();
        Result::factory(10)->create();
        Datasheet::factory(10)->create();
        Apprentice::factory(10)->create();
        Instructor::factory(10)->create();
        // Room::factory(10)->create();
        // Session::factory(10)->create();
    }
}