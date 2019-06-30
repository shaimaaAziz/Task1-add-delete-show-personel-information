<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationFamily extends Model
{



    protected $fillable =['FirstName','SecondName','ThirdName','FourthName','relative_relation','Date_of_Birth','Social_status',
        'Study','work','image'];
}
