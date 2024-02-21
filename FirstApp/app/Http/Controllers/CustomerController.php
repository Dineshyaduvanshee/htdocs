<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index(){
        $customer = Customer :: all();
        $data = compact('customer');
        echo "<pre>"; 
        print_r($data);
        echo "</spre>"; 
        die;
        return view('Customer')->with($data)->toArray();
    }
    public function store(Request $request){
        // p($request->all());
        // die;
        
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
      //  $customer->status = $request['status'];
      //  $customer->points = $request['points'];       
        $customer->save();
        echo "<pre>";
        print_r($request->all());
        return redirect()->route('customer/view')->with('success', 'Customer created successfully.'); 
    }
    public function view(){
        $customer = Customer :: all();
        // echo "<pre>"; 
        // print_r($customer);
        // echo "</spre>"; 
        // die;
        $data = compact('customer');
        return view('customer-view')->with($data);
    }
    public function create()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url', 'title');
     return view('customer')->with($data);
      //  return redirect()->route('customer/view')->with('success', 'Customer updated successfully.');

    }
    public function delete($id){
      // $customer = customer::find($id)->delete();
        $customer = customer::find($id);
       if(!is_null($customer)){
        $customer->delete();
       }
       echo "<pre>"; 
       print_r($customer);
       return redirect('customer/view')->with($data);
      // return view('customer/view')->with($data);
      
    }
    // public function delete($id) {
    //     $customer = Customer::find($id);
    
    //     if (!is_null($customer)) {
    //         $customer->delete();
    //     }
    
    //     return redirect()->back();
    // }
    
  
    public function update($id,Request $request){
         $customer = customer::find($id);
         $customer->name = $request['name']; 
         $customer->email = $request['email'];
         $customer->gender = $request['gender'];
         $customer->address = $request['address'];
         $customer->state = $request['state'];
         $customer->country = $request['country'];
         $customer->dob = $request['dob'];
         $customer->password = md5($request['password']);
         $customer->status = $request['status'];
         $customer->points = $request['points'];  
         $customer->save();
         return redirect()->route('customer')->with('success', 'Customer updated successfully.');

        
        // if(is_null($customer)){
        //     //not found
        //     return redirect('customer');
        //    }
        //    else{
        //     //found
        //     $title = "update Customer";
        //     $url = url('/customer/edit')."/".$id;
        //     $data = compact('customer','url','title');
        //     return view('customer/view')->with($data);
        //    }
    }
    public function trash(){
        $customer = customer::onlyTrashed()->get();
        return view('customer-trash')->with($customer);
    }
    public function edit($id){
        $customer = Customer::find($id);
        
            if(is_null($customer)){
                //not found
             $customer->delete();
            }else{
                $url = url('/customer/update')."/".$id;
                $title="update Customer";
                $data = compact('customer','url','title');
                return view('customer')->with($data);
            }
        
        
        // $customer->name = $request['name'];
        // $customer->email = $request['email'];
        // $customer->gender = $request['gender'];
        // $customer->address = $request['address'];
        // $customer->state = $request['state'];
        // $customer->country = $request['country'];
        // $customer->dob = $request['dob'];
        // $customer->password = md5($request['password']);
        // $customer->status = $request['status'];
        // $customer->points = $request['points'];  
        // $customer->save();
        // return redirect()->route('customer')->with('success', 'Customer updated successfully.');

    }
}
?>

<!-- namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // ... (your existing methods)

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers|max:255',
            'gender' => 'required|in:M,F,O',
            'address' => 'required|string',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'dob' => 'required|date',
            'password' => 'required|string|min:6',
            'status' => 'nullable|boolean',
            'points' => 'required|integer',
        ]);

        Customer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            'state' => $request['state'],
            'country' => $request['country'],
            'dob' => $request['dob'],
            'password' => bcrypt($request['password']),
            'status' => $request['status'],
            'points' => $request['points'],
        ]);

        return redirect()->route('customer.index')->with('success', 'Customer created successfully.');
    }
} -->
