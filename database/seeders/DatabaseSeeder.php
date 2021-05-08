<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        function permission_role($permissions) 
        {
            $associations = [];
            array_push($associations, $permissions[0], $permissions[rand(0,count($permissions)-1)]);
            return $associations;
        }
        $permissions = \App\Models\Permission::factory(10)->create();
        $roles = \App\Models\Role::factory(3)
        ->hasAttached(
            permission_role($permissions)
        )
        ->create();

    }
}


