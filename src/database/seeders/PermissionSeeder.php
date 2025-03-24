<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            // Permission::create(['name' => 'List User']);
            // Permission::create(['name' => 'Create User']);
            // Permission::create(['name' => 'Update User']);
            // Permission::create(['name' => 'Delete User']);
            // Permission::create(['name' => 'List Role']);
            // Permission::create(['name' => 'Create Role']);
            // Permission::create(['name' => 'Update Role']);
            // Permission::create(['name' => 'Delete Role']);
            // Permission::create(['name' => 'List Feedback']);
            // Permission::create(['name' => 'Create Feedback']);
            // Permission::create(['name' => 'Update Feedback']);
            // Permission::create(['name' => 'Delete Feedback']);
            // Permission::create(['name' => 'List Report']);
            // Permission::create(['name' => 'Create Report']);
            // Permission::create(['name' => 'Update Report']);
            // Permission::create(['name' => 'Delete Report']);
            // Permission::create(['name' => 'List Comment']);
            // Permission::create(['name' => 'Create Comment']);
            // Permission::create(['name' => 'Checked']);
            // Permission::create(['name' => 'Verified']);
            // $role =Role::Where('name', 'Administator');
            // $role->syncPermissions(Permission::all());
            // Create permissions
$permissions = [
    'List User', 'Create User', 'Update User', 'Delete User',
    'List Role', 'Create Role', 'Update Role', 'Delete Role',
    'List Feedback', 'Create Feedback', 'Update Feedback', 'Delete Feedback',
    'List Report', 'Create Report', 'Update Report', 'Delete Report',
    'List Comment', 'Create Comment', 'Checked', 'Verified'
];

foreach ($permissions as $permission) {
    Permission::firstOrCreate(['name' => $permission]);
}

// Retrieve the role correctly
$role = Role::where('name', 'Administrator')->first(); // Fix typo in 'Administrator'

if ($role) {
    $role->syncPermissions(Permission::all());
} else {
    echo "Role 'Administrator' not found.";
}
        }
    }
}
