<?php

use Illuminate\Database\Seeder;

class relativeRelation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('relative_relation')->insert([

            ['name' => 'father'],
            ['name' =>'mother'],
            ['name' =>'Grandpa'],
            ['name' =>'Grandma'],
            ['name' =>'brother'],
            ['name' =>'Sister'],
            ['name' =>'Aunt'],
            ['name' =>'uncle']

        ]);
    }
}
