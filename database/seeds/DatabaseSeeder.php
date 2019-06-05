<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('lock');
    }
}


class key extends Seeder
{
    public function run()
    {
        DB::table('keys')->insert([
            array('name'=>'Key 1'),
            array('name'=>'Key 2'),
            array('name'=>'Key 3'),
            array('name'=>'Key 4'),
            array('name'=>'Key 5'),
            array('name'=>'Key 6'),
            array('name'=>'Key 7'),
        ]);
    }
}

class lock extends Seeder
{
    public function run()
    {
        DB::table('locks')->insert([
            array('name'=>'Lock 1', 'key_id'=>1),
            array('name'=>'Lock 2', 'key_id'=>2),
            array('name'=>'Lock 3', 'key_id'=>3),
            array('name'=>'Lock 4', 'key_id'=>4),
            array('name'=>'Lock 5', 'key_id'=>5),
            array('name'=>'Lock 6', 'key_id'=>6),
            array('name'=>'Lock 7', 'key_id'=>7),
        ]);
    }
}