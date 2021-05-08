<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
private  $teachers =[
[
'id'=> 1,
'name'=>'habib',
'family'=>'seif'
],
[
 'id'=> 2,
'name'=>'ali',
'family'=>'alian'
],
[
'id'=> 3,
'name'=>'akbar',
'family'=>'Akbari'
],
];



    public function index(){
        return $this->teachers;
    }

    public function store(Request $request)
    {
     $teacher=[
       'id'=>$request->id,
       'name'=>$request->name,
       'family'=>$request->family
      ];

      $this->teachers[]=$teacher;

      return 'Teacher Count:'. count($this->teachers);

    }
}
