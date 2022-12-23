<?php

namespace App\Http\Controllers;

use App\Models\Pool;
use App\Models\Fencer;
use Illuminate\Http\Request;

class PoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pools = Pool::all();
        return view('pools.index', ['pools' => $pools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fencers= Fencer::all();
        $pools = [];
        $min_size = 5;
        $min_number = 3;
        $max_number = 5;
        $fencer_size = sizeof($fencers);
        if (($min_number*$min_size) %  $fencer_size> 0) {
            $pool_number = $fencer_size/$max_number;

        }
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
     * @param  \App\Models\Pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function show(Pool $pool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function edit(Pool $pool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pool $pool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pool $pool)
    {
        //
    }
}
