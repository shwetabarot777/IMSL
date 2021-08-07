<?php

namespace Database\Seeders;


use Hash;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  $record = [
            //ADmin
       [
        'full_name'=>'Shweta Barot',
       'username'=>'Admin',
       'email'=>'barot.shweta93@gmail.com',
       'password'=>Hash::make('111'),
       'role'=>'admin',
       'status'=>'active'],
       //Vendor 
       [
        'full_name'=>'vendor Barot',
       'username'=>'Vendor',
       'email'=>'vendor@gmail.com',
       'password'=>Hash::make('111'),
       'role'=>'vendor',
       'status'=>'active'],
       //managers
       [
        'full_name'=>'manager Barot',
       'username'=>'sadmin',
       'email'=>'manager@gmail.com',
       'password'=>Hash::make('111'),
       'role'=>'manager',
       'status'=>'active'],
       //Customer
       [
        'full_name'=>'cus Barot',
       'username'=>'Customer',
       'email'=>'customer@gmail.com',
       'password'=>Hash::make('111'),
       'role'=>'customer',
       'status'=>'active'],
        ];
        //DB::table('users')->insert([]);*/

      /*  User::create($record);*/
         User::create( 
         //Customer
          [
        'full_name'=>'cus Barot',
       'username'=>'Customer',
       'email'=>'customer@gmail.com',
       'password'=>Hash::make('111'),
       'role'=>'customer',
       'status'=>'active'],
       [
        'full_name'=>'Shweta Barot',
       'username'=>'Admin',
       'email'=>'barot.shweta93@gmail.com',
       'password'=>Hash::make('111'),
       'role'=>'admin',
       'status'=>'active'], 
       //Vendor 
       [
        'full_name'=>'vendor Barot',
       'username'=>'Vendor',
       'email'=>'vendor@gmail.com',
       'password'=>Hash::make('111'),
       'role'=>'vendor',
       'status'=>'active'],
       //managers
       [
        'full_name'=>'manager Barot',
       'username'=>'sadmin',
       'email'=>'manager@gmail.com',
       'password'=>Hash::make('111'),
       'role'=>'manager',
       'status'=>'active'],
       
        );

    }
}
