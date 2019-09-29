<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        for($i=0;$i<20;$i++){

    	$post= new Post();
    	$post->title='heading';
    	$post->content ='A new to Laravel. I am inserting a User_ID into another table as a foreign key. I have set up my model RecordedBooks and the controller to create the table. It is actually inserting the User_ID into the table but I do get the following error:
    	A new to Laravel. I am inserting a User_ID into another table as a foreign key. I have set up my model RecordedBooks and the controller to create the table. It is actually inserting the User_ID into the table but I do get the following error:
    	A new to Laravel. I am inserting a User_ID into another table as a foreign key. I have set up my model RecordedBooks and the controller to create the table. It is actually inserting the User_ID into the table but I do get the following error:
    	A new to Laravel. I am inserting a User_ID into another table as a foreign key. I have set up my model RecordedBooks and the controller to create the table. It is actually inserting the User_ID into the table but I do get the following error:
    	A new to Laravel. I am inserting a User_ID into another table as a foreign key. I have set up my model RecordedBooks and the controller to create the table. It is actually inserting the User_ID into the table but I do get the following error:';
    	$post->category_id=rand(1,4);
    	$post->user_id=1;
    	$post->save();
    	}
    }
}
