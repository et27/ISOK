<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'exists:courses,id',
            'author_name' => 'required',
            'comment' => 'required',
            'score' => 'integer|min:1|max:10'
        ]);

        Feedback::create($request->all());

        return back();
    }

    public function show(Feedback $feedback)
    {
        return view('feedback.show', compact('feedback'));
    }

    public function changeStatus(Feedback $feedback, $status)
    {
        if (in_array($status, ['published', 'rejected'])) {
            $feedback->update(['status' => $status]);
        }

        return back();
    }
}
