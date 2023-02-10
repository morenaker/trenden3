<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InjuryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('injury.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('injury.create');

    }
    public function ill()
    {
        $data = Body::where('user_id', Auth::user()->id)->where('name', 'ill')->orderBy('problemDate','DESC')->get();

        return view('injury.ill',['data' => $data]);

    }
    public function broken()
    {
        $data = Body::where('user_id', Auth::user()->id)->where('name', 'injury')->orderBy('problemDate','DESC')->get();


        return view('injury.broken', ['data' => $data]);

    }
    public function createHealth(Request $request){
        $newStats= new Body();

        $newStats->user_id = Auth::id();
        $newStats->length = $request->input('length');
        $newStats->name =$request->input('problem');
        $newStats->problemName =$request->input('problemName');
        $newStats->desc =$request->input('desc');
        $newStats->problemDate =$request->input('problemDate');


        $newStats->save();

        return view('injury.index');


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
