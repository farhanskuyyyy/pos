<?php

namespace Database\Seeders;

use App\Models\MenuManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuManagement::insert([
            [
                "code" => "dashboard.index",
                "title" => "Dashboard",
                "url" => "dashboard",
                "icon" => "si-speedometer",
                "parent" => null,
                "sort" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "code" => null,
                "title" => "User Management",
                "url" => "#",
                "icon" => "si-lock",
                "parent" => null,
                "sort" => 2,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "code" => null,
                "title" => "Menu Management",
                "url" => "#",
                "icon" => "si-grid",
                "parent" => null,
                "sort" => 3,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "code" => "user.index",
                "title" => "User",
                "url" => "user",
                "icon" => null,
                "parent" => 2,
                "sort" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "code" => "menu.index",
                "title" => "Menu",
                "url" => "menu",
                "icon" => null,
                "parent" => 3,
                "sort" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "code" => "role.index",
                "title" => "Role",
                "url" => "role",
                "icon" => null,
                "parent" => 3,
                "sort" => 2,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "code" => "role.permission",
                "title" => "Role Permission",
                "url" => "role/permission",
                "icon" => null,
                "parent" => 3,
                "sort" => 3,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
