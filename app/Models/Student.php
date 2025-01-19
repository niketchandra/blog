<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //in case another table name
    //protected $table = 'students-details';

        // Introducing Accessors --> which is use to modify data only on UI, without change in database

        function getNameAttribute($value){
            return ucfirst($value);
        }


        function getPhoneAttribute($value){
            return "+91-".$value;
        }

        function getBatchAttribute($value){
            return "Year ".$value;
        }

}
