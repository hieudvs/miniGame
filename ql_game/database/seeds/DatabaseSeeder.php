<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'Hải',
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('secret'),
            ]);
        DB::table('users')->insert([
                'name' => 'Nam',
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('secret'),
            ]);
        DB::table('users')->insert([
            'name' => 'Tiến',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => 'Khánh',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('Games')->insert([
            'name' => 'Bắn máy bay',
            'image' => 'http://www.abc.net.au/reslib/201405/r1279447_24580749.jpg',
            'describe' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maxime reiciendis ab itaque quam. Veniam error voluptate '
        ]);
       
        DB::table('Games')->insert([
            'name' => 'Chiếc nón kỳ diệu',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY1x_U9Fi78ERxNvbrxXTpU-ZJn8sxf9axErUDN8FSJXEgYEX_3A',
            'describe' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maxime reiciendis ab itaque quam. Veniam error voluptate '
        ]);
    
        DB::table('Games')->insert([
            'name' => 'Xe tăng đại chiến',
            'image' => 'https://znews-photo.zadn.vn/w1024/Uploaded/ofh_huqfztmf/2019_03_07/1.jpg',
            'describe' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maxime reiciendis ab itaque quam. Veniam error voluptate '
        ]);

        DB::table('Games')->insert([
            'name' => 'Đại chiến xích bích',
            'image' => 'https://znews-photo.zadn.vn/w1024/Uploaded/ofh_huqfztmf/2019_03_07/5.jpg',
            'describe' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maxime reiciendis ab itaque quam. Veniam error voluptate '
        ]);
        DB::table('Games')->insert([
            'name' => 'Ngọa hổ tàng long',
            'image' => 'https://znews-photo.zadn.vn/w1024/Uploaded/ofh_huqfztmf/2019_03_07/3.jpg',
            'describe' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maxime reiciendis ab itaque quam. Veniam error voluptate '
        ]);
        DB::table('Games')->insert([
            'name' => 'Super Mario',
            'image' => 'https://znews-photo.zadn.vn/w1024/Uploaded/ofh_huqfztmf/2019_03_07/2.jpg',
            'describe' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maxime reiciendis ab itaque quam. Veniam error voluptate '
        ]);

        DB::table('Purchase_packages')->insert([
            'name' => 'Gói Vàng',
            'price' => 20.000
        ]);
        DB::table('Purchase_packages')->insert([
            'name' => 'Gói Bạc',
            'price' => 100.000
        ]);
        DB::table('Purchase_packages')->insert([
            'name' => 'Gói Đồng',
            'price' => 200.000
        ]);

        DB::table('Purchase_package_details')->insert([
            'id_purchase_package' => 1,
            'id_game' => 1
        ]);
        DB::table('Purchase_package_details')->insert([
            'id_purchase_package' => 1,
            'id_game' => 4
        ]);
        DB::table('Purchase_package_details')->insert([
            'id_purchase_package' => 1,
            'id_game' => 3
        ]);

        DB::table('Purchase_package_details')->insert([
            'id_purchase_package' => 2,
            'id_game' => 2
        ]);
        DB::table('Purchase_package_details')->insert([
            'id_purchase_package' => 2,
            'id_game' => 5
        ]);
        DB::table('Purchase_package_details')->insert([
            'id_purchase_package' => 3,
            'id_game' => 3
        ]);





    }
}
