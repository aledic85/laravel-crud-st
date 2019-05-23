<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Smartphone_request;
use App\Smartphone;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smartphones = Smartphone::all();
        return view('pages.smartphone', compact('smartphones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.smartphone-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Smartphone_request $request)
    {
      $validateData = $request->validated();
      $smartphone = Smartphone::create($validateData);
      return redirect('smartphones')
      ->with('success', 'New smartphone was saved');
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
        $smartphone = Smartphone::findOrFail($id);
        return view('pages.smartphone-update', compact('smartphone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Smartphone_request $request, $id)
    {
      $validateData = $request->validated();
      $smartphone = Smartphone::whereId($id)->update($validateData);
      return redirect('smartphones')
      ->with('success', 'New smartphone was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Smartphone::whereId($id)->delete();
        return redirect('smartphones');
    }
}
