<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

use App\Thread;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view( 'subject.index' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Subject $subject )
    {
        $subject = Subject::find( $subject->id );

        return view( 'subject.create', compact( 'subject' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd( $request );
        $subject = Subject::find( $request[ 'subject_id' ] );

        $new_thread = Thread::create([
            '' => $subject->id,
            '' => $request[ 'thread_title' ],
            '' => $request[ 'thread_description' ],
            '' => $request[ 'thread_author' ]
        ]);

        $new_thread->save();

        return redirect()->route();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }

    // Get threads associated with subject
    public function myThreads( Subject $subject )
    {
        $subject = Subject::find( $subject->id );
        $threads = Thread::where( 'subject_id', '=', $subject->id )->get();

        return view( 'subject.index', compact( 'subject', 'threads' ) );
    }
}
