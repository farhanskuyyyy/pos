<?php

namespace Database\Seeders;

use App\Models\RolePermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        // set all menu to super admin
        for ($i=1; $i <= 7; $i++) {
            $data[] = [
                    "role_id" => 1,
                    "menu_id" => $i,
                    "status" => 1,
                    "create" => 1,
                    "read" => 1,
                    "update" => 1,
                    "delete" => 1,
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s')
                ];
        }

        // set all menu to admin
        for ($i=1; $i <= 7; $i++) {
            $data[] = [
                    "role_id" => 2,
                    "menu_id" => $i,
                    "status" => 1,
                    "create" => 1,
                    "read" => 1,
                    "update" => 1,
                    "delete" => 1,
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s')
                ];
        }

        // set menu to user
        $data[] = [
                    "role_id" => 3,
                    "menu_id" => 1,
                    "status" => 1,
                    "create" => 1,
                    "read" => 1,
                    "update" => 0,
                    "delete" => 0,
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s')
                ];
        RolePermission::insert($data);
    }

}
