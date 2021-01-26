<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\models\blogs;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
		DB::table('blogs')->truncate();

		$blog = array(
            array('id' => '1','id_catalogy' => '1','title'=>'Title 1','content'=>'content 1','img'=>null,'created_at' => '2020-09-14 14:12:18','updated_at' => '2020-09-14 14:12:18'),
            array('id' => '2','id_catalogy' => '2','title'=>'Title 2','content'=>'content 2','img'=>null,'created_at' => '2020-09-14 14:12:18','updated_at' => '2020-09-14 14:12:18'),
            array('id' => '3','id_catalogy' => '3','title'=>'Title 3','content'=>'content 3','img'=>null,'created_at' => '2020-09-14 14:12:18','updated_at' => '2020-09-14 14:12:18'),
            array('id' => '4','id_catalogy' => '4','title'=>'Title 4','content'=>'content 4','img'=>null,'created_at' => '2020-09-14 14:12:18','updated_at' => '2020-09-14 14:12:18'),
        );
		foreach ($blog as $item) {
			blogs::create([
                'id_catalogy' => $item['id_catalogy'],
                'title'  => $item['title'],
                'content'  => $item['content'],
                'img'  => $item['img'],
			]);
			}
		Schema::enableForeignKeyConstraints();
    }
}
