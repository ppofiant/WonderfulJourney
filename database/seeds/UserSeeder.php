<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user = new User;
        $user->fill([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'phone' => '0811245698',
            'password' => '$2y$10$6DZhjqIjblXFz70adSdzjusJXIBbpGbrVvODAAj/ICvCqgENam8fO'
        ]);
        $user->save();
        
        $user->fill([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'phone' => '0811245698',
            'password' => '$2y$10$X1W.A5FklEHEDnqCP8yTqe7amn8jQSe2glHSFLOi1ucRyx4v9zZM6'
        ]);
        $user->save();
    }
}