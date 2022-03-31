<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Quản lý sân']);
        Permission::create(['name' => 'Quản lý bài viết']);
        Permission::create(['name' => 'Quản lý thành viên']);
        Permission::create(['name' => 'Quản lý nhân sự']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Editor']);
        $role1->givePermissionTo('Quản lý bài viết');
        $role1->givePermissionTo('Quản lý sân');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('Quản lý sân');
        $role2->givePermissionTo('Quản lý bài viết');
        $role2->givePermissionTo('Quản lý thành viên');
        $role2->givePermissionTo('Quản lý nhân sự');



        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // $role4 = Role::create(['name' => 'Staff']);
        // $role4->givePermissionTo('edit articles');
        // $role4->givePermissionTo('delete articles');

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Editor',
            'email' => 'editor@test.dev',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.dev',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Super-Admin',
            'email' => 'superadmin@test.dev',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($role3);
    }
}
