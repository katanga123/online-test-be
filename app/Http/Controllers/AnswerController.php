<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $answer = Answer::create([
            'question_id' => $request->question_id,
            'answer' => $request->answer,
        ]);

        return response()->json(['created' => true], 201);
    }

    public function show($id)
    {
        $answer = Answer::findOrFail($id);

        return response()->json([
            'answer' => $answer
        ],200);
    }

    public function update(Request $request, $id)
    {
        $answer = Answer::findOrFail($id);

        $answer->update([
            'question_id' => $request->question_id,
            'answer' => $request->answer,
        ]);

        return response()->json(['updated' => true], 201);
    }

    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);

        $answer->delete();

        return response()->json(['deleted' => true], 201);
    }
}
