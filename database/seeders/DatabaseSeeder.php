<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'name' => 'Ngô Quang Vinh',
            'username' => 'admin',
            'email' => 'vinhhp2620@gmail.com',
            'password' => bcrypt('admin'),
            'mobile' => '0962334135',
            'gender' => 1,
            'address' => 'Chiến Thắng, An Lão, Hải Phòng',
        ]);

        User::create([
            'name' => 'Username',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'mobile' => '0962334135',
            'gender' => 1,
            'address' => 'Chiến Thắng, An Lão, Hải Phòng',
        ]);

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Permission
        DB::table('permissions')->insert([
            // Account
            ['name' => 'acc.add', 'guard_name' => 'admin'],
            ['name' => 'acc.edit', 'guard_name' => 'admin'],
            ['name' => 'acc.delete', 'guard_name' => 'admin'],
            ['name' => 'acc.view', 'guard_name' => 'admin'],
            ['name' => 'acc.confirm', 'guard_name' => 'admin'],

            // Log system
            ['name' => 'log.delete', 'guard_name' => 'admin'],
            ['name' => 'log.view', 'guard_name' => 'admin'],

            /* Add here */
        ]);

        // Role
        $roleAdmin = Role::create(['name' => 'Administrator', 'guard_name' => 'admin']);

        // Give permission
        $roleAdmin->givePermissionTo(Permission::all());

        // Assign role
        $admin->assignRole($roleAdmin);
    }
}
