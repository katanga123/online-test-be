<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Auth;
class SubjectController extends Controller
{

    public function store(Request $request)
    {
        $subject = Subject::create([
            // 'user_id' => $request->user_id,
            'subject' => $request->subject
        ]);

        return response()->json(['created' => true], 201);
    }

    public function show($id)
    {

        $subject = Subject::findOrFail($id);

        return response()->json([
            'subject' => $subject
        ], 200);

    }
    
    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);

        $subject->update([
            'subject' => $request->subject
        ]);

        return response()->json(['updated' => true], 201);
    }


    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);

        $subject->delete();

        return response()->json(['deleted' => true], 201);
    }
}
