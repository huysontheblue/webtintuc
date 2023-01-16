<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Create roles and user
        \App\Models\Role::factory(1)->create();
        \App\Models\Role::factory(1)->create(['name' => 'admin']);

        $permission_ids = [];
        $blog_route = Route::getRoutes();
        foreach($blog_route as $route){
            if(strpos($route->getName(), 'admin') !== false){
                $permission = \App\Models\Permission::create(['name' => $route->getName()]);
                $permission_ids[] = $permission->id;
            }
        }
        \App\Models\Role::where('name', 'admin')->first()->permissions()->sync($permission_ids);

        $users = \App\Models\User::factory(10)->create();
        \App\Models\User::Factory()->create([
            'name' => 'Hà Huy Sơn',
            'email' => 'sonchat2k@gmail.com',
            'role_id' => 2
        ]);
        \App\Models\User::Factory()->create([
            'name' => 'Nguyễn Hải Dương',
            'email' => 'nguyenhaiduong@gmail.com',
            'role_id' => 2
        ]);
        \App\Models\User::Factory()->create([
            'name' => 'Võ Anh Quân',
            'email' => 'voanhquan@gmail.com',
            'role_id' => 2
        ]);
  
        foreach($users as $user){
            $user -> image()->save( \App\Models\Image::factory()->make() );
        }

        // \App\Models\Category::factory(10)->create();
        //\App\Models\Category::factory()->create(['name' => 'Chưa phân loại']);
        $Category_defaules = ['Chưa phân loại','Thế giới','Xã hội','Kinh tế','Văn hóa','Giáo dục','Thể thao','Giải trí','Pháp luật','Công nghệ','Khoa học','Đời sống','Xe cộ','Nhà đất']; 
        foreach($Category_defaules as $Category_defaule) {
            \App\Models\Category::factory()->create(['name' => $Category_defaule]);
        }

        $posts = \App\Models\Post::factory(200)->create();

        \App\Models\Comment::factory(100)->create();

        \App\Models\Tag::factory(20)->create();

        foreach($posts as $post){
            $tag_ids = [];

            $tag_ids = \App\Models\Tag::all()->random()->id;
            $tag_ids = \App\Models\Tag::all()->random()->id;
            $tag_ids = \App\Models\Tag::all()->random()->id;

            $post->tags()->sync($tag_ids);
            $post -> image()->save( \App\Models\Image::factory()->make() );
        }

        \App\Models\Setting::factory(1)->create();

    }
}
