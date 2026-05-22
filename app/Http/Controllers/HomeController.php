<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subcourse;
use App\Models\University;
use Illuminate\Http\Request;
use App\Models\Country;

class HomeController extends Controller
{
    public function index()
    {
        $ids = [600, 10, 599];

        $universities = University::whereIn('id', $ids)
            ->with('country', 'studyAreas.course', 'availableCourses.subcourse')
            ->orderBy('id', 'desc')
            ->get();

        return view('frontend.index', [
            'universities' => $universities
        ]);
    }

    public function subcourselist(Request $request, Course $course)
    {
        $subcourses = Subcourse::join('courses', 'subcourses.course_id', '=', 'courses.id')
            ->select('subcourses.*', 'courses.course_name')
            ->where('courses.id', $course->id)
            ->get();

        if (!empty($subcourses)) {
            return view('frontend.subcourses', [
                'subcourses' => $subcourses
            ]);
        }

        return view('frontend.index');
    }

    public function filteruniversities(Request $request, $subcoursecourse)
    {
        $courseid = '';
        $countryid = '';

        if ($request->isMethod('post')) {

            $query = University::query();

            if (!empty($request->coursename)) {
                $courseid = $request->coursename;
            }

            if (!empty($request->countryname)) {
                $countryid = $request->countryname;
                $query->where('country_id', $countryid);
            }

            if (!empty($request->studyarea)) {
                $studyareaid = $request->studyarea;

                $query->whereHas('studyAreas', function ($q) use ($studyareaid) {
                    $q->where('id', $studyareaid);
                });
            }

            $universities = $query->with('country', 'studyAreas.course', 'availableCourses.subcourse')
                ->orderBy('id', 'desc')
                ->get();
        } else {

            $ids = [600, 10, 599];

            $universities = University::whereHas('availableCourses', function ($query) use ($subcoursecourse) {
                $query->where('subcourse_id', $subcoursecourse);
            })
                ->with('country', 'studyAreas.course', 'availableCourses.subcourse')
                ->orderByRaw("CASE WHEN id IN (" . implode(',', $ids) . ") THEN 0 ELSE 1 END, FIELD(id, " . implode(',', $ids) . "), id DESC")
                ->get();
        }

        $courses = Course::orderBy('course_name', 'DESC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();

        return view('frontend.filter-universities', [
            'universities' => $universities,
            'courses' => $courses,
            'countries' => $countries,
            'courseid' => $courseid,
            'countryid' => $countryid
        ]);
    }

    public function filteruniversitiesbycountry(Request $request, $country)
    {
        $courseid = '';
        $countryid = '';

        if ($request->isMethod('post')) {

            $query = University::query();

            if (!empty($request->coursename)) {
                $courseid = $request->coursename;
            }

            if (!empty($request->countryname)) {
                $countryid = $request->countryname;
                $query->where('country_id', $countryid);
            }

            if (!empty($request->studyarea)) {
                $studyareaid = $request->studyarea;

                $query->whereHas('studyAreas', function ($q) use ($studyareaid) {
                    $q->where('id', $studyareaid);
                });
            }

            $universities = $query->with('country', 'studyAreas.course', 'availableCourses.subcourse')
                ->orderBy('id', 'desc')
                ->get();
        } else {

            $universities = University::where('country_id', $country)
                ->with('country', 'studyAreas.course', 'availableCourses.subcourse')
                ->orderBy('id', 'desc')
                ->get();
        }

        $courses = Course::orderBy('course_name', 'DESC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();

        return view('frontend.filter-universities', [
            'universities' => $universities,
            'courses' => $courses,
            'countries' => $countries,
            'courseid' => $courseid,
            'countryid' => $countryid
        ]);
    }

    // ✅ FIXED (MAIN ERROR WAS HERE)
    public function universitydetauls(Request $request, $course, $university)
    {
        $university = University::where('university_slug', $university)
            ->with('country', 'studyAreas.course', 'availableCourses.subcourse')
            ->firstOrFail();

        return view('frontend.about-university', [
            'university' => $university
        ]);
    }

    public function appynow()
    {
        return view('frontend.applynow');
    }

    public function privacypolicy()
    {
        return view('frontend.privacypolicy');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function aboutus()
    {
        return view('frontend.about-us');
    }
}
