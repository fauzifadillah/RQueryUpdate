<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use DB;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // $dat = Data::take(4)->get();
      $dat = DB::table('data')->latest('waktu')->take(5)->get();
      // dd($dat);
      if ($request->ajax()) {
            // return "ajax";
            return view('loop',['dat' => $dat])->render();
        }
        // return "bukan ajax"
      return view('data',['dat' => $dat]);
    }

    public function json()
    {
      // $dat = Data::all();
      $dat = DB::table('data')->latest('waktu')->take(6)->get();
      // dd($dat);
      return response()->json(['data'=>$dat]);
    }

    public function load(){
      $dat = DB::table('data')->latest('waktu')->take(6)->get();
      // dd($dat);
      return view('loop',['data'=>$dat]);
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
