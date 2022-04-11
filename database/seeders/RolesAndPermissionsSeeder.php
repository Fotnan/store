<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

        // create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'delete product']);
        Permission::create(['name' => 'publish product']);
        Permission::create(['name' => 'unpublish product']);
        Permission::create(['name' => 'edit price']);
        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'delete category']);
        Permission::create(['name' => 'publish category']);
        Permission::create(['name' => 'unpublish category']);
        Permission::create(['name' => 'edit order']);
        Permission::create(['name' => 'edit customer']);
        Permission::create(['name' => 'delete customer']);
        Permission::create(['name' => 'make excell']);
        Permission::create(['name' => 'view report']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'writer']);
        $role->givePermissionTo('edit articles', 'edit category');

        $role = Role::create(['name' => 'manager']);
        $role->givePermissionTo('edit order');

        // or may be done by chaining
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo('publish articles', 'unpublish articles', 'edit product', 'delete product',
                'delete category', 'publish category', 'unpublish category', 'edit customer', 'edit articles', 'edit category',
                'edit order');

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
