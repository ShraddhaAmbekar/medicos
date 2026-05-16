<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AvailableCourse;
use App\Models\Country;
use App\Models\Course;
use App\Models\StudyArea;
use App\Models\Subcourse;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::with(['country', 'studyAreas.course', 'availableCourses.subcourse'])->get();
        return view('backend.universities.index', compact('universities'));
    }

    public function create()
    {
        $countries = Country::all();
        $courses = Course::all();
        return view('backend.universities.create', [
            'countries' => $countries,
            'courses' => $courses

        ]);
    }

    public function store(Request $request)
    {
        $logoname = '';
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $logoname = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('universities'), $logoname);
        }


        $imagename = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('universities'), $imagename);
        }

        $university = new University();
        $university->name = $request->name;
        $university->country_id = $request->country_id;
        $university->type = $request->university_type;
        // $university->grade = $request->grade;
        $university->established_year = $request->established_year;
        $university->medium_of_instruction = $request->medium_of_instruction;
        // $university->ecfmg_status = $request->ecfmg_status;
        // $university->total_course_fees = $request->total_course_fees;
        $university->duration_of_course = $request->duration_of_course;
        $university->eligibility = $request->eligibility;
        // $university->intake = $request->intake;
        // $university->location = $request->location;
        $university->logo = $logoname;
        $university->email = $request->email;
        $university->contact_no = $request->contact_no;
        $university->image = $imagename;
        $university->slug = $request->slug;
        $university->save();
        $id = $university->id;
        // Save study areas
        if (!empty($request->study_areas)) {
            $studyAreaData = [];
            foreach ($request->study_areas as $courseId) {
                $studyAreaData[] = [
                    'university_id' => $id,
                    'course_id' => $courseId,
                ];
            }
            StudyArea::insert($studyAreaData);
        }

        // Save available courses
        if (!empty($request->available_courses)) {
            $availableCourseData = [];
            foreach ($request->available_courses as $subCourseId) {
                $availableCourseData[] = [
                    'university_id' => $id,
                    'subcourse_id' => $subCourseId,
                ];
            }
            AvailableCourse::insert($availableCourseData);
        }

        return redirect()->route('universities.index')->with('success', 'University created successfully.');
    }

    public function edit(University $university)
    {
        $countries = Country::all();
        $courses = Course::all();
        return view('backend.universities.edit', [
            'university' => $university,
            'countries' => $countries,
            'courses' => $courses
        ]);
    }

    public function getSubcourses(Request $request)
    {
        $courseIds = is_array($request->courseid) ? $request->courseid : explode(',', $request->courseid);
        $subcourses = Subcourse::whereIn('course_id', $courseIds)->get();
        return response()->json($subcourses);
    }

    public function destroy(University $university)
    {
        $university->delete();
        return redirect()->route('universities.index')->with('success', 'University deleted successfully.');
    }
}
