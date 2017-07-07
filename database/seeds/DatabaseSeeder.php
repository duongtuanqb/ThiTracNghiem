<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(RolesTable::class);
        $this->call(UsersRolesTable::class);
    }
}