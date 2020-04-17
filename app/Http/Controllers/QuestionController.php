<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    
    public function store(Request $request)
    {
        $question = Question::create([
            'subject_id' => $request->subject_id,
            'question'   => $request->question,
            'time_limit' => $request->time_limit,
            'answer_id'  => $request->answer_id,
        ]);

        return response()->json(['created' => true], 201);
    }

    public function show($id)
    {
        $question = Question::findOrFail($id);

        return response()->json([
            "question" => $question
        ],200);
    }

    public function update(Request $request, $id)
    {
        $question = Question::findOrFail($id);

        $question->update([
            'subject_id' => $request->subject_id,
            'question'   => $request->question,
            'time_limit' => $request->time_limit,
            'answer_id'  => $request->answer_id,
        ]);

        return response()->json(['updated' => true], 201);
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);

        $question->delete();

        return response()->json(['deleted' => true], 201);
    }
}
