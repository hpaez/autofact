<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'id'         => 1,
                'role_id'    => 1,
                'name'       => 'Admin',
                'email'      => 'admin@autofact.cl',
                'password'   => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id'         => 2,
                'role_id'    => 2,
                'name'       => 'User',
                'email'      => 'user@autofact.cl',
                'password'   => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        ));
    }
}
