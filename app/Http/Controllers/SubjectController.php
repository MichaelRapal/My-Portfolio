<?php

namespace App\Http\Controllers;


use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\User;
class SubjectController extends Controller
{
    /**
     * Display a listing of the subjects.
     */
    public function index()
    {
        $subjects = Subject::all();
        return response()->json($subjects);
    }

    /**
     * Show the form for creating a new subject.
     */
    public function create()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('subject.create',compact('users'));
    }

    /**
     * Store a newly created subject in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'receiver_id' => 'required|exists:users,id',
        'name' => 'required|string|max:255',
        'code' => 'required|string|max:255|unique:subjects',
        'instructor' => 'required|string|max:255',
        'day' => 'required|string|max:255',
        'time' => 'required|string|max:255',
    ]);

    // Create the new subject entry
    Subject::create([
        'sender_id' => auth()->id(), 
        'receiver_id' => $request->receiver_id, 
        'name' => $request->name,
        'code' => $request->code,
        'instructor' => $request->instructor, 
        'day' => $request->day,
        'time' => $request->time,
    ]);

    return redirect('/dashboard')->with('success', 'Subject added successfully!');
}

   
    public function show(Subject $subject)
    {
        return response()->json($subject);
    }

   
    public function edit(Subject $subject)
    {
        return view('subject.edit', compact('subject'));
    }

   
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:subjects,code,' . $subject->id,
            'instructor' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'time' => 'required|string|max:255',
        ]);

        $subject->update($request->all());

        return redirect('/dashboard')->with('success', 'Subject edit successfully!');

    }

   
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect('/dashboard')->with('success', 'Subject delted successfully!');
    }
}
