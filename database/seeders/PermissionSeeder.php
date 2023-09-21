<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        //
        $role = Permission::create(['name' => 'university-view']);
        $role = Permission::create(['name' => 'university-add']);
        $role = Permission::create(['name' => 'university-update']);
        $role = Permission::create(['name' => 'university-delete']);

        $role = Permission::create(['name' => 'student-view']);
        $role = Permission::create(['name' => 'student-add']);
        $role = Permission::create(['name' => 'student-update']);
        $role = Permission::create(['name' => 'student-delete']);

        $role = Permission::create(['name' => 'student-payment-view']);
        $role = Permission::create(['name' => 'student-payment-add']);
        $role = Permission::create(['name' => 'student-payment-update']);
        $role = Permission::create(['name' => 'student-payment-delete']);

        $role = Permission::create(['name' => 'university-student-payment-view']);
        $role = Permission::create(['name' => 'university-student-payment-add']);
        $role = Permission::create(['name' => 'university-student-payment-update']);
        $role = Permission::create(['name' => 'university-student-payment-delete']);

        $role = Permission::create(['name' => 'university-student-commission-view']);
        $role = Permission::create(['name' => 'university-student-commission-add']);
        $role = Permission::create(['name' => 'university-student-commission-update']);
        $role = Permission::create(['name' => 'university-student-commission-delete']);

        $role = Permission::create(['name' => 'course-view']);
        $role = Permission::create(['name' => 'course-add']);
        $role = Permission::create(['name' => 'course-update']);
        $role = Permission::create(['name' => 'course-delete']);
        $role = Permission::create(['name' => 'course-pdf']);

        $role = Permission::create(['name' => 'reports-view']);
        $role = Permission::create(['name' => 'applicants-view']);
        $role = Permission::create(['name' => 'applicants-process-change']);

        $role = Permission::create(['name' => 'course-category-view']);
        $role = Permission::create(['name' => 'course-category-add']);
        $role = Permission::create(['name' => 'course-category-update']);
        $role = Permission::create(['name' => 'course-category-delete']);

        $role = Permission::create(['name' => 'company-profile-view']);
        $role = Permission::create(['name' => 'company-profile-update']);

        $role = Permission::create(['name' => 'payment-types-view']);
        $role = Permission::create(['name' => 'payment-types-add']);
        $role = Permission::create(['name' => 'payment-types-update']);
        $role = Permission::create(['name' => 'payment-types-delete']);

        // $role = Permission::create(['name' => 'user-view']);
        // $role = Permission::create(['name' => 'user-add']);
        // $role = Permission::create(['name' => 'user-update']);


        $roles = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'Stuff']);
        $role = Role::create(['name' => 'Agent']);
        $roles->givePermissionTo(Permission::all());
    }
}
