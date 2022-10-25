<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Subject;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $chapter = Chapter::getC();
//        dd($chapter);
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allSubject()
    {

        $subjects = Subject::all();
//        dd($subjects);
        return view('pages.all_subject', ['subjects' => $subjects]);

    }

    public function subject($class, $id)
    {
        $subject = Subject::where('id', $id)->where('class', $class)->firstOrFail();
        $chapters = Chapter::where('subject_id', $subject->id)->get();
//        dd($chapters);
        return view('pages.subject', ['subject' => $subject, 'chapters' => $chapters]);
    }

    public function theme($class, $book, $theme)
    {

        $subject = Subject::where('id', $book)->where('class', $class)->firstOrFail();
        $chapter = Chapter::where('subject_id', $book)->where('id', $theme)->firstOrFail();



        $test = null;
        if (!empty($chapter['exercise'])) {
            $test = json_decode($chapter['exercise']);
        }
//        dd($test);
        return view('pages.theme', ['subject' => $subject, 'chapter' => $chapter, 'test'=>$test]);
    }

}
