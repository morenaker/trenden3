<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class BodyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('body.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('body.create');
    }

    public function weight()
    {
        $data=Stats::where('user_id', Auth::user()->id)->orderBy('mesureDate','ASC')->get();
        //$data = Stats::where('user_id', Auth::user()->id)->select(Stats::raw("DATE_FORMAT(created_at, '%Y-%m') as month"), Stats::raw('MAX(created_at) as last_value'))->groupBy('month')->get();

        return view('body.weight',['data' => $data]);


    }
    public function body()
    {
        $data=Stats::where('user_id', Auth::user()->id)->orderBy('mesureDate','DESC')->get();

        return view('body.body',['data' => $data]);

    }
    public function createStats(Request $request){
        $newStats = new Stats();

        $traintime=$request->input('to');

        $newStats->user_id = Auth::id();

        $newStats->height =$request->input('height');
        $newStats->weight =$request->input('weight');
        $newStats->bodyfat =$request->input('bodyfat');
        $newStats->biceps_r =$request->input('biceps_r');
        $newStats->biceps_l =$request->input('biceps_l');
        $newStats->thigh_r =$request->input('thigh_r');
        $newStats->thigh_l =$request->input('thigh_l');
        $newStats->calf_r =$request->input('calf_r');
        $newStats->calf_l =$request->input('calf_l');
        $newStats->hip =$request->input('hip');
        $newStats->chest =$request->input('chest');
        $newStats->neck =$request->input('neck');
        $newStats->mesureDate =$request->input('mesureDate');


        $newStats->save();

        return view('body.index');


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
