<?php

use App\RoleHasPermission;
use Illuminate\Database\Seeder;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=8; $i++) {
            RoleHasPermission::insert([
                ['permission_id' => $i,
                    'role_id' => '1'],

            ]);
        }
    }
}
