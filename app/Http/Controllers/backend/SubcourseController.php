<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subcourse;
use Illuminate\Http\Request;


class SubcourseController extends Controller
{
    public function index()
    {
        $subcourses = Subcourse::join('courses', 'subcourses.course_id', '=', 'courses.id')
            ->select('subcourses.*', 'courses.course_name')
            ->get();
        return view('backend.subcourses.index', compact('subcourses'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('backend.subcourses.create', ['courses' => $courses]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'subcourse_name' => 'required|string|max:255',
        ]);

        Subcourse::create($request->all());

        return redirect()->route('subcourses.index')->with('success', 'Subcourse created successfully.');
    }

    public function edit(Subcourse $subcourse)
    {
    }

    public function update(Request $request, Subcourse $subcourse)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'course_id' => 'required|exists:courses,id',
                'subcourse_name' => 'required|string|max:255',
            ]);

            $subcourse->update($request->all());

            return redirect()->route('subcourses.index')->with('success', 'Subcourse updated successfully.');
        }
        $courses = Course::all();
        return view(
            'backend.subcourses.update',
            [
                'subcourse' => $subcourse,
                'courses' => $courses
            ]
        );
    }

    public function destroy(Subcourse $subcourse)
    {
        $subcourse->delete();

        return redirect()->route('subcourses.index')->with('success', 'Subcourse deleted successfully.');
    }
}
