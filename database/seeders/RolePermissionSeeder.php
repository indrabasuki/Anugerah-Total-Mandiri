<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            [
                'group_name' => 'Dashboard',
                'permissions' => [
                    'dashboard.view',
                ]
            ],
            [
                'group_name' => 'Master Data',
                'permissions' => [
                    'master.access',
                ]
            ],
            [
                'group_name' => 'Quotation',
                'permissions' => [
                    'Quotation.view',
                    'Quotation.create',
                    'Quotation.edit',
                    'Quotation.update',
                    'Quotation.delete',
                ]
            ],
            [
                'group_name' => 'Sales Order',
                'permissions' => [
                    'Sales Order.view',
                    'Sales Order.create',
                    'Sales Order.edit',
                    'Sales Order.update',
                    'Sales Order.delete',
                ]
            ],

            [
                'group_name' => 'Purchase Order',
                'permissions' => [
                    'Purchase Order.view',
                    'Purchase Order.create',
                    'Purchase Order.edit',
                    'Purchase Order.update',
                    'Purchase Order.delete',
                ]
            ],

            [
                'group_name' => 'Purchase Invoice',
                'permissions' => [
                    'Purchase Invoice.view',
                    'Purchase Invoice.create',
                    'Purchase Invoice.edit',
                    'Purchase Invoice.update',
                    'Purchase Invoice.delete',
                ]
            ],

            [
                'group_name' => 'Purchase Adjustment',
                'permissions' => [
                    'Purchase Adjustment.view',
                    'Purchase Adjustment.create',
                    'Purchase Adjustment.edit',
                    'Purchase Adjustment.update',
                    'Purchase Adjustment.delete',
                ]
            ],

            [
                'group_name' => 'Request PO',
                'permissions' => [
                    'Request PO.view',
                    'Request PO.create',
                    'Request PO.edit',
                    'Request PO.update',
                    'Request PO.delete',
                ]
            ],

            [
                'group_name' => 'Inventory IN',
                'permissions' => [
                    'Inventory IN.view',
                    'Inventory IN.create',
                    'Inventory IN.edit',
                    'Inventory IN.update',
                    'Inventory IN.delete',
                ]
            ],

            [
                'group_name' => 'Inventory Out',
                'permissions' => [
                    'Inventory Out.view',
                    'Inventory Out.create',
                    'Inventory Out.edit',
                    'Inventory Out.update',
                    'Inventory Out.delete',
                ]
            ],

            [
                'group_name' => 'Transaction Book',
                'permissions' => [
                    'Transaction Book.view',
                    'Transaction Book.create',
                    'Transaction Book.edit',
                    'Transaction Book.update',
                    'Transaction Book.delete',
                ]
            ],

            [
                'group_name' => 'Inventory Closing',
                'permissions' => [
                    'Inventory Closing.view',
                    'Inventory Closing.create',
                    'Inventory Closing.edit',
                    'Inventory Closing.update',
                    'Inventory Closing.delete',
                ]
            ],

            [
                'group_name' => 'Sales Invoice',
                'permissions' => [
                    'Sales Invoice.view',
                    'Sales Invoice.create',
                    'Sales Invoice.edit',
                    'Sales Invoice.update',
                    'Sales Invoice.delete',
                ]
            ],

            [
                'group_name' => 'Balance Of Customer',
                'permissions' => [
                    'Balance Of Customer.view',
                    'Balance Of Customer.create',
                    'Balance Of Customer.edit',
                    'Balance Of Customer.update',
                    'Balance Of Customer.delete',
                ]
            ],

            [
                'group_name' => 'Balance Of Detail',
                'permissions' => [
                    'Balance Of Detail.view',
                    'Balance Of Detail.create',
                    'Balance Of Detail.edit',
                    'Balance Of Detail.update',
                    'Balance Of Detail.delete',
                ]
            ],

            [
                'group_name' => 'Sales Adjustment',
                'permissions' => [
                    'Sales Adjustment.view',
                    'Sales Adjustment.create',
                    'Sales Adjustment.edit',
                    'Sales Adjustment.update',
                    'Sales Adjustment.delete',
                ]
            ],

        ];

        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
            }
        }

        // Create Roles Superadmin
        $superadmin         = Role::create(['name' => 'superadmin']);
        $admin              = Role::create(['name' => 'admin']);

    }
}
