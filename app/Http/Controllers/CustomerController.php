<?php

namespace prueba_tecnica\Http\Controllers;

use Illuminate\Http\Request;
use prueba_tecnica\Adresse;
use prueba_tecnica\Customer;
use prueba_tecnica\Http\Controllers\FullCustomer;
use prueba_tecnica\Http\Requests\StoreCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

         $customers = Customer::all();
         

        return view("Customers.Index",compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Customers.Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        

        $customer = new Customer();
        $adress = new Adresse();

        //Guardo la informacion del cliente
        $customer->name = $request->input('name');
        $customer->userName = $request->input('userName');
        $customer->email = $request->input('email');
        $customer->cell = $request->input('cell');
        $customer->webSite = $request->input('webSite');
        $customer->adressId = $request->input('adressId');
        $customer->street = $request->input('street');
        $customer->suite = $request->input('suite');
        $customer->city = $request->input('city');
        $customer->zipcode = $request->input('zipcode');
            
        $customer->save();
        $customers = Customer::all();
        return view('Customers.index', compact('customers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userName)
    {
        $customer = Customer::where('userName','=',$userName)->firstOrFail();
        $adresses = Adresse::where('customerID',$userName)->get();
        
        return view('Customers.Show',compact('customer','adresses'));

        
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
    public function update(Request $request, $userName)
    {
        $customer = Customer::where('userName','=',$userName)->firstOrFail();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->cell = $request->input('cell');
        $customer->webSite = $request->input('webSite');
        $customer->street = $request->input('street');
        $customer->suite = $request->input('suite');
        $customer->city = $request->input('city');
        $customer->zipcode = $request->input('zipcode');
        $customer->save();

        return 'uppdated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userName)
    {
        $customer = Customer::where('userName','=',$userName)->firstOrFail();
        $customer->delete();

        $customer = Customer::all();
        return view('Customers.Index', compact('customer'));
    }
}
