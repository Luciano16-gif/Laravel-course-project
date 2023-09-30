<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Post;
use resources\views\clase;

class CourseController extends Controller
{
    function informacion(Request $req){
        $course = new Course;
        $course->user_id=$req->user_id;
        $course->category_id=$req->category;
        $course->name=$req->name;
        $course->slug=$req->slug;
        $course->image=$req->image;
        $course->description=$req->description;
        $course->created_at=date('m/d/Y h:i:s a', time());
        $course->updated_at=date('m/d/Y h:i:s a', time());
        $course->save();
}
    public function destroy($id)
    {   
        $delete = Course::find($id);
        $delete->delete();
        return view('clase');
    }
}

