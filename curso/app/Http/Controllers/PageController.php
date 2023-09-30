<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Editar;

class PageController extends Controller
{
    public function clases()
    {
        return view('clase');
    }

    public function agregar_blog()
    {
        return view('agregar-blog');
    }

    public function course(Course $course)
    {
        return view('course', compact('course'));
    }


    public function edit($id)
    {
        $course = Course::find($id);
        return view('editar', compact("course"));
    }

    public function update(Request $req, $id)
    {
        $course = Course::find($id);

        $course->user_id = $req->user_id;       
        $course->category_id = $req->category;
        $course->name = $req->name;
        $course->slug = $req->slug;
        $course->image = $req->image;
        $course->description = $req->description;
        $course->save();
    }
}
