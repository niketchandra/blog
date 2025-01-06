<?php

## Databasse Query Builder

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataDbController extends Controller
{
    public function showdata(){
      $show = DB::table('data')->get();
      return $show;
    }
    public function insertdata(){
        $data = DB::table('data')->insert([
            'name' => 'Ankit',
            'details' => '1234'
        ]);
      
        if ($data) {
            return "Data successfully Inserted in DB";
        } else {
            return "Data not Inserted";
        }
    }

    public function updatedata(){
        $data = DB::table('data')->where('id', 6)->update([
                   'details' => '12345',
                   'name' => 'Jhon'
        ]);
      
        if ($data) {
            return "Data successfully Updated in DB";
        } else {
            return "Data not Updated";
        }
    }

    public function deletedata(){
        $data = DB::table('data')->where('id', 3)->delete();
      
        if ($data) {
            return "Data successfully Deleted from DB";
        } else {
            return "Data not Deleted";
        }
    }
}
