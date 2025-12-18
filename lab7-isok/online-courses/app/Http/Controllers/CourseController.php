<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $courses = Course::when($search, function ($q) use ($search) {
            $q->where('title', 'like', "%$search%")
                ->orWhere('category', 'like', "%$search%");
        })->get();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'difficulty_level' => 'in:beginner,intermediate,advanced',
            'price' => 'numeric|min:0'
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Course $course)
    {
        $feedbacks = $course->feedbacks()
            ->when($request->status, function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->get();

        return view('courses.show', compact('course', 'feedbacks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'difficulty_level' => 'in:beginner,intermediate,advanced',
            'price' => 'numeric|min:0'
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
