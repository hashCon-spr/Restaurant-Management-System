<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $abilities = [
        //     'read',
        //     'write',
        //     'create',
        // ];

        $Dashboard = ['Dashboard'];

        $Users = [
            'User-Management',
            'Roles',
            'Users',
            'Permissions'
        ];

        $Menu = [
            'Menu',
            'Menu-List',
            'Menu-Reviews',
        ];
        
        $Discount = [
            'Discounts',
            'Discount-Menu',
            'Event-Discount'
        ];

        $Wishlist = [
            'Wishlist'
        ];

        $Reservation = [
            'Reservation',
            'Tables',
            'Order'
        ];

        $Payment = [
            'Payment',
            'Payment-Method',
            'Payment-Tracking',
        ];

        $Chats = [
            'Chat'
        ];

        $Notification = ['Notification'];

        $Profile = ['Profile'];

        $permissions_by_role = [
            'Administrator' => [
                ...$Dashboard,
                ...$Users,
                ...$Menu,
                ...$Discount,
                ...$Wishlist,
                ...$Reservation,
                ...$Payment,
                ...$Chats,
                ...$Notification,
                ...$Profile
                
            ],
            'Cashier' => [
                ...$Dashboard,
                ...$Payment
            ],
        ];

        foreach ($permissions_by_role['Administrator'] as $permission) {
            Permission::create(['name' => $permission]);
        }

        foreach ($permissions_by_role as $role => $permissions) {
            $full_permissions_list = [];
            foreach ($permissions as $permission) {
                $full_permissions_list[] = $permission;
            }
            Role::create(['name' => $role])->syncPermissions($full_permissions_list);
        }

        User::find(1)->assignRole('administrator');
        User::find(2)->assignRole('Cashier');
    }
}
