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
         $this->call('city');
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

class type extends Seeder
{
    public function run()
    {
        DB::table('type_posts')->insert([
            array('type'=>'type1', 'display_type'=>'Type 1'),
            array('type'=>'type2', 'display_type'=>'Type 2'),
            array('type'=>'type3', 'display_type'=>'Type 3'),
            array('type'=>'type4', 'display_type'=>'Type 4'),
            array('type'=>'type5', 'display_type'=>'Type 5'),
            array('type'=>'type6', 'display_type'=>'Type 6'),
            array('type'=>'type7', 'display_type'=>'Type 7'),
        ]);
    }
}

class post extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            array('title'=>'Post 1', 'type_id'=>1),
            array('title'=>'Post 2', 'type_id'=>1),
            array('title'=>'Post 3', 'type_id'=>2),
            array('title'=>'Post 4', 'type_id'=>2),
            array('title'=>'Post 5', 'type_id'=>3),
            array('title'=>'Post 6', 'type_id'=>3),
            array('title'=>'Post 7', 'type_id'=>4),
        ]);
    }
}

class tag extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            array('tag'=>'tag1', 'display_tag'=>'Tag 1'),
            array('tag'=>'tag2', 'display_tag'=>'Tag 2'),
            array('tag'=>'tag3', 'display_tag'=>'Tag 3'),
            array('tag'=>'tag4', 'display_tag'=>'Tag 4'),
            array('tag'=>'tag5', 'display_tag'=>'Tag 5'),
            array('tag'=>'tag6', 'display_tag'=>'Tag 6'),
            array('tag'=>'tag7', 'display_tag'=>'Tag 7'),
        ]);
    }
}

class post_tag extends Seeder
{
    public function run()
    {
        DB::table('post_tags')->insert([
            array('post_id'=>1, 'tag_id'=>1),
            array('post_id'=>1, 'tag_id'=>2),
            array('post_id'=>2, 'tag_id'=>3),
            array('post_id'=>2, 'tag_id'=>4),
            array('post_id'=>3, 'tag_id'=>5),
            array('post_id'=>3, 'tag_id'=>6),
            array('post_id'=>4, 'tag_id'=>7),
            array('post_id'=>4, 'tag_id'=>1),
            array('post_id'=>5, 'tag_id'=>6),
            array('post_id'=>5, 'tag_id'=>5),
            array('post_id'=>6, 'tag_id'=>4),
            array('post_id'=>6, 'tag_id'=>3),
            array('post_id'=>7, 'tag_id'=>2),
            array('post_id'=>7, 'tag_id'=>1),
        ]);
    }
}

class country extends Seeder
{
    public function run()
    {
        DB::table('countries')->insert([
            array('name'=>'Viet Nam'),
            array('name'=>'China'),
            array('name'=>'United States'),
            array('name'=>'United Kingdom'),
            array('name'=>'Indonesia'),
            array('name'=>'Germany'),
            array('name'=>'Russia'),
        ]);
    }
}

class member extends Seeder
{
    public function run()
    {
        DB::table('members')->insert([
            array('country_id'=>1,'name'=>'A'),
            array('country_id'=>1,'name'=>'B'),
            array('country_id'=>2,'name'=>'C'),
            array('country_id'=>2,'name'=>'D'),
            array('country_id'=>3,'name'=>'E'),
            array('country_id'=>3,'name'=>'F'),
            array('country_id'=>4,'name'=>'G'),
            array('country_id'=>5,'name'=>'H'),

        ]);
    }
}

class city extends Seeder
{
    public function run()
    {
        DB::table('cities')->insert([
            array('member_id'=>1,'city'=>'City 1'),
            array('member_id'=>2,'city'=>'City 2'),
            array('member_id'=>3,'city'=>'City 3'),
            array('member_id'=>4,'city'=>'City 4'),
            array('member_id'=>5,'city'=>'City 5'),
            array('member_id'=>6,'city'=>'City 6'),
            array('member_id'=>7,'city'=>'City 7'),

        ]);
    }
}
