<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Milestone;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'nomorTelpon' => '0123456789',
            'divisi' => 'admin',
            'jabatan' => 'admin',
            'credit' => 999,
            'isAdmin' => 1,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'nama' => 'user',
            'email' => 'user@gmail.com',
            'nomorTelpon' => '0123456789',
            'divisi' => 'Mobile',
            'jabatan' => 'Junior Developer',
            'credit' => 23,
            'isAdmin' => 0,
            'password' => Hash::make('password'),
        ]);
        User::factory()->count(20)->create();
        /*  */
        /* Project::factory()->count(5)->has(User::factory()->count(5), 'users', function ($attributes, $project) { */
        /*     $user = User::find(rand(1, 20));  */
        /*     return [ */
        /*         'employee_id' => $user->id, */
        /*     ]; */
        /* })->create(); */

        $user = User::all()->pluck('id');

        Project::factory(10)->create()->each(function ($project) use ($user) {
            $project->users()->attach($user->random(rand(1, 19)));
        });

        Milestone::factory()->count(30)->create();
    }
}
