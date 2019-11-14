<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pos;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function pos()
    {
        $data = Pos::all();
        return view('pos',compact('data'));
    }

    public function poshitung(Request $request, $id)
    {
        $data = Pos::find($id);
        $data->qty = $ambil = $data->qty - $request->ambil ;
        $hasil = $request->ambil * $data->cost;
        $pages_array[] = (object) array('id_brg' => $data->id, 'brg_ambil' => $request->ambil, 'hasil' => $hasil,'sisa_brg' => $ambil);

        $data->save();
        
        return view('checkout',compact('data','pages_array'));
        // return redirect()->back();
    }

    public function data_pos()
    {
        $data = Pos::all();
        return $data;
    }

    public function posadd(Request $request)
    {
        $data = new Pos;
        $data->name = $request->name;
        $data->qty = $request->qty;
        $data->cost = $request->cost;
        $data->save();
        return redirect()->back();
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
