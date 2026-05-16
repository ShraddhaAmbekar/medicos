<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('backend.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('backend.courses.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'course_name' => 'required|string|max:255',
            'image' => 'nullable|max:2048',
        ]);

        $imagename = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('course'), $imagename);
        }
        $country = new Course();
        $country->course_name = $request->course_name;
        $country->image = $imagename ?? null;
        $country->save();

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function update(Request $request, Course $course)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'course_name' => 'required|string|max:255',
                'image' => 'nullable|max:2048',
            ]);
    
            $imagename = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('course'), $imagename);
            }

            $course->update([
                'course_name' => $request->input('course_name'),
                'image' => $imagename,
            ]);

            return redirect()->route('courses.index')->with('success', 'course updated successfully.');
        }
        return view('backend.courses.update', ['course' => $course]);
    }

    public function delete(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'course deleted successfully.');
    }
}
