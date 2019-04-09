<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create two roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        
        // Assign admin to both initialized users (Kiel, Doms)
        foreach(User::all() as $user) {
            $user->assignRole('admin');
        }
    }
}
