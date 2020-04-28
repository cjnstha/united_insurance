<?php

use Illuminate\Database\Seeder;

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
            ['id' => 1, 'name' => 'Admin', 'type' => 'admin', 'mobile' => '9860490637', 'email' => 'admin@admin.com', 'password' => '$2y$10$5W/Y/V7931GsMRhsQuYEVu53pNKVtpQa19jvE6a4YOJx.qjVZyg2y', 'image' => '', 'status' => 1],
        ];

//        foreach ($adminRecords as $key=>$record){
//            \App\Admin::create($record);
//        }
        DB::table('admins')->insert($adminRecords);
    }
}
