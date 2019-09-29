<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Category;



class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas=[
            'PHP',
            'Java',
            'Python',
            'SQL'

        ];
        foreach($datas as $data){

        $cat= new Category();
        $cat->name= $data;
        $cat->save();
    }
    // 	$courses = ['Html & CSS','MySQL','SCSS', 'Laravel', 'OOP', 'Java SE','Java EE','Spring','Figma'];
    // 	$count = count($courses);
    // 	for($i = 0; $i < $count; $i++) {
    //         DB::table('categories')->insert([
    //             'name' => $courses[$i],
                
    //         ]);
    //     }
     }
}
