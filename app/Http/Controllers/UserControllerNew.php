<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerNew extends Controller
{
   public function adduserdata(Request $showRequestData){
  //  return "User data added successfully";
    //return $showRequestData;

    echo $showRequestData->input('city');
    echo "</br>";
    echo $showRequestData->age;
    echo "</br>";
    echo $showRequestData->gender;
    ##because Skill is arrary that why we use print_r
    echo "</br>";
    print_r($showRequestData->skill);
   }

}
