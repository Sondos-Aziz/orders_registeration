<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
       $permission1_id =  DB::table('permissions')->insertGetId(['name' =>'manage users', 'title'=> 'إدارة المستخدمين', 'parent_id' => '0','url' =>'','in_menu' =>true]);
       $permission2_id =  DB::table('permissions')->insertGetId(['name' => 'add user', 'title'=> 'إضافة','parent_id' => $permission1_id ,'url' =>'/users/create','in_menu' =>true]);
       $permission3_id =  DB::table('permissions')->insertGetId(['name' => 'show user', 'title'=> 'عرض','parent_id' => $permission1_id,'url' =>'/users','in_menu' =>true]);
       $permission4_id =  DB::table('permissions')->insertGetId(['name' => 'edit user', 'title'=> 'تعديل','parent_id' => $permission1_id,'url' =>'/users/edit','in_menu' =>false]);
       $permission5_id =  DB::table('permissions')->insertGetId(['name' => 'delete user', 'title'=> 'حذف','parent_id' => $permission1_id,'url' =>'/users/delete','in_menu' =>false]);
    //    Permission::create(['name' =>'manage users', 'title'=> 'إدارة المستخدمين', 'parent_id' => '0','url' =>'','in_menu' =>true]);
    //    Permission::create(['name' => 'add user', 'title'=> 'إضافة','parent_id' => '1','url' =>'/users/create','in_menu' =>true]);//parentid = permissionid
    //    Permission::create(['name' => 'show user', 'title'=> 'عرض','parent_id' => '1','url' =>'/users','in_menu' =>true]);
    //    Permission::create(['name' => 'edit user', 'title'=> 'تعديل','parent_id' => '1','url' =>'/users/edit','in_menu' =>false]);
    //    Permission::create(['name' => 'delete user', 'title'=> 'حذف','parent_id' => '1','url' =>'/users/delete','in_menu' =>false]);
   

     // create roles and assign existing permissions
    //  $role1 = Role::create(['name' => 'أدمن']);
    //  $role1->givePermissionTo(['إدارة المستخدمين','إضافة','عرض','تعديل','حذف']);
     
    // create  users
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
           'currentJob_id'=>'1',
           'specialization_id'=>'1',
           'Workplace'=>'همص',
           'mobile'=>'0599866341',
           'mobileAlternative'=>'0599866347',
           'familyType_id'=>'1',
           'neighborhoods_id'=>'1',
           'otherPlace'=>'أخرى',
           'nationality'=>'فلسطينية',
           'social_status_id'=>'1',
           'sex'=>'انثى',
           'individuals_no'=>'5',
           'placeOfBirth_id'=>'1',
            'is_super' => true,
       ]);

    //    $user->assignRole($role1);

         $user->givePermissionTo(['delete user','edit user','show user','add user','manage users']); 
    }
}

