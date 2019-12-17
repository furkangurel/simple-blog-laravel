<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->insert([
          'title'=>'Codeigniter Hocası',
          'created_at'=>now(),
          'updated_at'=>now(),
        ]);
    }
}
