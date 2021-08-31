<?php

namespace prueba_tecnica\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use prueba_tecnica\Customer;

class GetApiCustomersController extends Controller
{
    function GetCustomers(Client $client){
        
        try{
            
        $response = $client->request('GET'); 
        $customers = json_decode($response->getBody());
        
        
        foreach($customers as $customerApi){
            $customer = new Customer;
            $customer->name = $customerApi->name;
            $customer->userName = $customerApi->username;
            $customer->email = $customerApi->email;
            $customer->cell = $customerApi->phone;
            $customer->webSite = $customerApi->website;
            $customer->adressId = "PRIMARY";
            $customer->street = $customerApi->address->street;
            $customer->city = $customerApi->address->city;
            $customer->suite = $customerApi->address->suite;
            $customer->zipcode = $customerApi->address->zipcode;
             
            $customer->save();
        }
       
        }catch(Exception $ex){

        }
        $customers = Customer::all();
        return view('Customers.Index',compact('customers'));
    }

    
}
