<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $subjects = Subject::get();
        $subjects = Subject::paginate(25);
//        dd($subjects);
        return view('admin.subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'label' => 'required|string',
            'slug' => 'required|string',
            'class' => 'required|numeric',
            'type' => 'required|numeric',
            'status' => 'required|boolean',
            'images' => 'nullable|file'
        ]);

        try {
            $image = $request->file('image');
            $now = Carbon::now();
            $filePath = '/uploads/img/' . Str::random(5) . '-' . $now->year . '-' . $now->month . '-' . $now->day . '.png';
            $img = Image::make($image)->stream();
            Storage::disk('public')->put($filePath, $img);
        } catch (\Exception $error) {
            $filePath = null;
        }
        $data['images'] = '/storage' . $filePath;
        if (Subject::create($data)) {
            return redirect(route('subjects.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('admin.subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $data = $request->validate([
            'label' => 'required|string',
            'slug' => 'required|string',
            'class' => 'required|numeric',
            'type' => 'required|numeric',
            'status' => 'required|boolean',
        ]);

        try {
            $image = $request->file('image');
            $now = Carbon::now();
            $filePath = '/uploads/img/' . Str::random(5) . '-' . $now->year . '-' . $now->month . '-' . $now->day . '.png';
            $img = Image::make($image)->stream();
            Storage::disk('public')->put($filePath, $img);
            $data['images'] = '/storage' . $filePath;
            Storage::disk('public')->delete(str_replace('/storage', "", $subject->images));
        } catch (\Exception $error) {
            $data['images'] = $subject->images;
        }

        if ($subject->update($data)) {
            return redirect(route('subjects.index'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        try {
            $subject->delete();
            return response()->json([
                'status' => 'ok',
                'message' => 'subject deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'error : ' . $e->getMessage()
            ], 401);
        }


//        if ($subject->delete()) {
//            return response()->json([
//                'status' => 'ok',
//                'message' => 'subject deleted successfully'
//            ], 200);
//        } else {
//            return response()->json([
//                'status' => 'error',
//                'message' => 'something error'
//            ], 401);
//        }
    }

    public function makePdf()
    {
        $subjects = Subject::all();
        $data = [
            'title' => '?????????????? ??????????',
            'subjects' => $subjects
        ];

        $pdf = PDF::loadView('admin.subjects.pdf', $data);
        return $pdf->download('??????????.pdf');
    }
}
