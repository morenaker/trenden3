<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $currentDate = Carbon::now();
        $data = Training::where('user', Auth::user()->id)->orderBy('date','DESC')->where('date', '<', $currentDate)->get();

        return view('training.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('training.create');
    }

    public function createTraining(Request $request){
        $newTraining = new Training();

        $traintime=$request->input('to');

        $newTraining->user = Auth::user()->id;

        $newTraining->time = Carbon::parse($request->input('time'));
        $newTraining->date = $request->input('date');
        $newTraining->type = $request->input('type');
        $newTraining->desc = $request->input('desc');
        $newTraining->intens = $request->input('intens');

        $newTraining->kcal = 1;


        $newTraining->save();

        return view('training.create');


    }

    public function calendar()
    {
        $currentDate = Carbon::now();

        $data = Training::where('user', Auth::user()->id)->orderBy('date','DESC')->where('date', '>', $currentDate)->get();

        return view('training.calendar', ['data' => $data]);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
