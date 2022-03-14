<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = ['show employee', 'create employee', 'edit employee', 'delete employee', 'show salary', 'edit salary', 'show present', 'print present', 'print salary slip'];

        foreach ($attr as $value) {
            Permission::create([
                'name' => $value,
            ]);
        }
    }
}
