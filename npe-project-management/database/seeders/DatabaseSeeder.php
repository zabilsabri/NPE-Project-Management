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
            'credit' => 999,
            'isAdmin' => 1,
            'password' => Hash::make('password'),
        ]);

        /**
         * Divisi:
         * 0 -> web
         * 1 -> Mobile
         * 2 -> ui/ux
         *
         * Jabatan:
         * 0 -> senior
         * 1 -> junior
         * 2 -> trainee
         */
        DB::table('users')->insert([
            'nama' => 'user',
            'email' => 'user@gmail.com',
            'nomorTelpon' => '0123456789',
            'divisi' => 2,
            'jabatan' => 0,
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
            $project->employees()->attach($user->random(rand(1, 19)));
        });

        Milestone::factory()->count(30)->create();
    }
}
