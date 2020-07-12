<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id' => 1, 'name' => 'Admin', 'type' => 'admin', 'mobile' => '9860490637', 'email' => 'united@admin.com', 'password' => Hash::make('Password'), 'image' => '', 'status' => 1],
        ];

//        foreach ($adminRecords as $key=>$record){
//            \App\Admin::create($record);
//        }
        DB::table('admins')->insert($adminRecords);
    }
}
