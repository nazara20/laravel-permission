<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserAssignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //assign super admin
        $superAdmin = User::find(1);
        $superAdmin->assignRole('super admin');

        // assign karyawan
        $karyawan = User::find(2);
        $karyawan->assignRole('karyawan');
        // assign role karyawan to permission
        $roleKaryawan = Role::find(2);
        $roleKaryawan->givePermissionTo('show present', 'show salary');

        // assign HR
        $HR = User::find(3);
        $HR->assignRole('HR');
        // assign role HR to permission
        $roleHR = Role::find(3);
        $roleHR->givePermissionTo('show employee', 'show salary', 'show present', 'create employee', 'edit employee', 'delete employee', 'edit salary', 'print present');

        // assign keuangan
        $keuangan = User::find(4);
        $keuangan->assignRole('keuangan');
        // assign role keuangan to permission
        $roleKeuangan = Role::find(4);
        $roleKeuangan->givePermissionTo('show employee', 'show salary', 'print salary slip');

        // assign direktur
        $direktur = User::find(5);
        $direktur->assignRole('direktur');
        // assign role direktur to permission
        $roleDirektur = Role::find(5);
        $roleDirektur->givePermissionTo('show employee', 'show salary');

    }
}
