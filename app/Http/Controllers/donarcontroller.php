<?php

namespace App\Http\Controllers;

use App\Models\Donar;
use Illuminate\Http\Request;

class donarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = Donar::all();
        return view('donars.view', compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donars.create');
    }

    public function createdonation()
    {
        return view('donars.donation');
    }

    public function donate()
    {
        return view('Donation');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = new Donar([
            'donarfullname' => $request->input('dfullname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'Country' => $request->input('country'),
        ]);
        $donor->save();
        $donors = Donar::all();
        return view('donars.view', compact('donors'));
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
        $donar = Donar::find($id);
        return view('donars.edit', compact('donar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $donar = Donar::find($request->input('did'));
        $donar->donarfullname = $request->input('dfullname');
        $donar->email = $request->input('email');
        $donar->phone = $request->input('phone');
        $donar->Country = $request->input('country');
        $donar->save();
        $donors = Donar::all();
        return view('donars.view', compact('donors'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor = Donar::findOrFail($id);
        $donor->delete();
        return redirect()->back()->with('message', 'Donar deleted successfully');
    }
}
