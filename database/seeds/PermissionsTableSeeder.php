<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Reset cached roles and permissions
       app()[PermissionRegistrar::class]->forgetCachedPermissions();

       // create permissions
       Permission::create(['name' =>'manage users', 'title'=> 'إدارة المستخدمين', 'parent_id' => '0','url' =>'','in_menu' =>true]);
       Permission::create(['name' => 'add user', 'title'=> 'إضافة','parent_id' => '1','url' =>'/users/create','in_menu' =>true]);//parentid = permissionid
       Permission::create(['name' => 'show user', 'title'=> 'عرض','parent_id' => '1','url' =>'/users','in_menu' =>true]);
       Permission::create(['name' => 'edit user', 'title'=> 'تعديل','parent_id' => '1','url' =>'/users/edit','in_menu' =>false]);
       Permission::create(['name' => 'delete user', 'title'=> 'حذف','parent_id' => '1','url' =>'/users/delete','in_menu' =>false]);
   

       // create  users
    //    $user = User::create([
    //        'name' => 'Example User',
    //        'email' => 'test@example.com',
    //        'password' =>bcrypt('admin'),
    //    ]);

    //    $user = User::create([
    //        'name' => 'Example Admin User',
    //        'email' => 'admin@example.com',
    //        'password' =>bcrypt('admin'),
    //    ]);

     // create roles and assign existing permissions
    //  $role1 = Role::create(['name' => 'أدمن']);
    //  $role1->givePermissionTo(['إدارة المستخدمين','إضافة','عرض','تعديل','حذف']);
     
       $user = User::create([
           'email' => 'superadmin@example.com',
           'password' =>bcrypt('admin'),
           'firstName_ar'=>'شيماء',
           'middleName_ar'=>'عزيز',
           'lastName_ar'=>'حرب',
           'firstName_en'=>'shaimaa',
           'middleName_en'=>'A',
           'lastName_en'=>'H',
           'slug_en' =>'shaimaa A Abu H',
           'slug_ar' =>'شيماء عزيز حرب',
           'identity'=>'012345678',
           'dateOfBirth'=>Carbon::parse('1998-01-01'),
           'qualification_id'=>'1',
           'currentJob_id'=>'1',
           'specialization_id'=>'1',
           'Workplace'=>'همص',
           'mobile'=>'0599866341',
           'mobileAlternative'=>'0599866347',
           'familyType_id'=>'1',
           'neighborhoods_id'=>'1',
           'otherPlace'=>'أخرى',
       ]);

    //    $user->assignRole($role1);

         $user->givePermissionTo(['delete user','edit user','show user','add user','manage users']); 
    }
}

