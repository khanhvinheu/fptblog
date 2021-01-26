<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\models\catalogys;
class catalogySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
		DB::table('catalogys')->truncate();

		$cate = array(
            array('id' => '1','title_cate' => 'Danh muc 1','id_parent'=>null,'created_at' => '2020-09-14 14:12:18','updated_at' => '2020-09-14 14:12:18'),
            array('id' => '2','title_cate' => 'Danh muc 2','id_parent'=>null,'created_at' => '2020-09-14 14:12:18','updated_at' => '2020-09-14 14:12:18'),
            array('id' => '3','title_cate' => 'Danh muc 3','id_parent'=>null,'created_at' => '2020-09-14 14:12:18','updated_at' => '2020-09-14 14:12:18'),
            array('id' => '4','title_cate' => 'Danh muc 4','id_parent'=>null,'created_at' => '2020-09-14 14:12:18','updated_at' => '2020-09-14 14:12:18'),
        );
		foreach ($cate as $item) {
			catalogys::create([
                'title_cate' => $item['title_cate'],
                'id_parent'  => $item['id_parent']
			]);
			}
		Schema::enableForeignKeyConstraints();
    }
}
