<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback()
    {
        return view('feedback');
    }

    public function feedbackAdd(FeedbackRequest $request)
    {
        $feedback = new Feedback();
        $feedback->user_id = auth()->id();
        $feedback->name = $request->get('name');
        $feedback->email = $request->get('email');
        $feedback->phone = $request->get('phone');
        $feedback->text = $request->get('text');
        $feedback->save();

        return redirect()->route('feedback')->with('success', 'Ваше обращение успешно отправлено');
    }

    public function myFeedback()
    {
        $feedback = Feedback::where('user_id', auth()->id())
            ->get();

        return view('myfeedback', compact('feedback'));
    }
}
