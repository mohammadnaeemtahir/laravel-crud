<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('customers.index');
    }

    public function store(Request $request){
        $request->validate(
            [
                'full_name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'age' => 'required',
                'address' => 'required',
                'password' => 'required',
                'confirm_password' => 'required|same:password', 
            ]
        );
        $customer = new Customer;
        $customer->full_name = $request['full_name'];
        $customer->email = $request['email'];
        $customer->phone_number = $request['phone_number'];
        $customer->age = $request['age'];
        $customer->address = $request['address'];
        $customer->password = md5($request['password']);
        $customer->save();
        return redirect()->route('customer.view');
    }

    public function view(){
        $customers = Customer::all();
        $data = compact('customers');
        return view('customers.view')->with($data);
    }
    
    public function delete($id){
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect()->back();
    }
    
    public function edit($id){
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $data = compact('customer');
            return view('customers.edit')->with($data);
        }
        return redirect()->back();
    }

    public function update($id, Request $request){
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $request->validate(
                [
                    'full_name' => 'required',
                    'email' => 'required|email',
                    'phone_number' => 'required',
                    'age' => 'required',
                    'address' => 'required',
                ]
            );
            $customer->full_name = $request['full_name'];
            $customer->email = $request['email'];
            $customer->phone_number = $request['phone_number'];
            $customer->age = $request['age'];
            $customer->address = $request['address'];
            $customer->save();
        }
        return redirect()->route('customer.view');
    }
}
