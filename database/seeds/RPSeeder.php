<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\PermissionAlreadyExists;

class RPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app(Permission::class)->create(['name' => 'view-admin', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'manage-users', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'manage-properties', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'manage-settings', 'guard_name' => 'web']);


        $admin = app(Role::class)->create(['name' => 'admin', 'guard_name' => 'web']);
        $agent = app(Role::class)->create(['name' => 'agent', 'guard_name' => 'web']);


        $admin->givePermissionTo('view-admin');
        $admin->givePermissionTo('manage-users');
        $admin->givePermissionTo('manage-properties');
        $admin->givePermissionTo('manage-settings');
        
        $agent->givePermissionTo('view-admin');
        

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id'  =>  1,
        ]);

         DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id'  =>  2,
        ]);

    }
}
