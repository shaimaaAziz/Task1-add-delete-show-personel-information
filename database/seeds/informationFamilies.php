<?php

use App\InformationFamily;
use Illuminate\Database\Seeder;

class informationFamilies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = informationFamily::create([
            'FirstName' => 'shaimaa',
            'SecondName' => 'abdelAziz',
            'ThirdName' => 'mohamud',
            'FourthName' => 'harb',
            'relative_relation' => 'sis',
            'Date_of_Birth' => '1998-05-17',
            'Social_status' => 'single',
            'Study' => 'true',
            'work' => 'false',

            'image' => 'sh.jpg'
        ]);
    }
}
