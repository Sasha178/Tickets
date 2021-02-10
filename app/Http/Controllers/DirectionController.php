<?php

namespace App\Http\Controllers;

use App\FromAtoB;
use App\FromBtoA;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
       if ($id == 1) {
           $listItemTime = FromAtoB::all()->pluck('timetable');
           $listItemPrice = FromAtoB::all()->pluck('price');
           $travelTime = FromAtoB::all()->pluck('travelTime');
           return compact('listItemTime', 'listItemPrice', 'travelTime');
       }
        if ($id == 2) {
            $listItemTime = FromBtoA::all()->pluck('timetable');
            $listItemPrice = FromBtoA::all()->pluck('price');
            $travelTime = FromBtoA::all()->pluck('travelTime');
            return compact('listItemTime', 'listItemPrice', 'travelTime');
        }
        if ($id == 3) {

            $ArrayList = FromAtoB::all()->pluck('timetable');
            return json_encode($ArrayList);
        }
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
