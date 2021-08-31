<?php

namespace prueba_tecnica\Http\Controllers;

use Illuminate\Http\Request;
use prueba_tecnica\Adresse;
use prueba_tecnica\Http\Requests\StoreAdressRequest;

class AdressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adress = Adresse::all();
        return view('Adresses.Index', compact('adress'));
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
    public function store(StoreAdressRequest $request)
    {
        $adress = new Adresse();

        $adress->adressID = $request->input('adressID');
        $adress->customerID = $request->input('userName');
        $adress->street = $request->input('street');
        $adress->suite = $request->input('suite');
        $adress->city = $request->input('city');
        $adress->zipcode = $request->input('zipcode');

        $adress->save();

        $adress = Adresse::all();
        return view('Adresses.Index', compact('adress'));

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
        $adress = Adresse::where('id',$id)->firstOrFail();
        $adress->delete();

        $adress = Adresse::all();

        return view('Adresses.Index', compact('adress'));
    }
}
