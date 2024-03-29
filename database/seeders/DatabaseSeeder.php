<?php

namespace Database\Seeders;

use App\Models\Role;
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

        $this->call([ProgramSeeder::class, FacultySeeder::class, RoleSeeder::class, VoterSeeder::class,]);
    }
}
