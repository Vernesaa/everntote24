<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listuser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ListsTableSeeder::class);
        $this->call(NotesTableSeeder::class);
        $this->call(ListuserTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TodosTableSeeder::class);

    }
}
