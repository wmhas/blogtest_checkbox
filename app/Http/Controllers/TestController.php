<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Log;
class TestController extends Controller
{
    public function add_customer_form()
    {
        return view('customer.create');

    }

    public function submit_customer_data(Request $request)
    {
      $rules = [
          'name' => 'required|min:6',
          'email' => 'required|email|unique:customers'
      ];

      $errorMessage = [
          'required' => 'Enter your :attribute first.'
      ];

      $this->validate($request, $rules, $errorMessage);

      //$input['category'] = $request->input('category');

      Customer::create([
          'name' => $request->name,
          'slug' => \Str::slug($request->name),
          'category' => json_encode($request->input('category')),
          'email' => strtolower($request->email)
      ]);

      Log::info('This is an informational message.- create customer ');

      $this->meesage('message','Customer created successfully!');
      return redirect()->back();

    }

    public function fetch_all_customer()
    {
       $customers = Customer::toBase()->get();
       return view('customer.index',compact('customers'));
    }

    public function edit_customer_form(Customer $customer)
    {
       return view('customer.edit',compact('customer'));
    }

    public function edit_customer_form_submit(Request $request, Customer $customer)
    {
      $rules = [
          'name' => 'required|min:6',
          'email' => 'required|email'
      ];

      $errorMessage = [
          'required' => 'Enter your :attribute first.'
      ];

      $this->validate($request, $rules, $errorMessage);

      $customer->update([
                    'name' => $request->name,
                    'category' => json_encode($request->input('category')),
                    'email' => strtolower($request->email)
                ]);

      $this->meesage('message','Customer updated successfully!');
      return redirect()->back();
    }

    public function view_single_customer(Customer $customer)
    {
      return view('customer.view',compact('customer'));
    }

    public function delete_customer(Customer $customer)
    {
      $customer->delete();
      $this->meesage('message','Customer deleted successfully!');
      return redirect()->back();
    }

    public function meesage(string $name = null, string $message = null)
    {
        return session()->flash($name,$message);
    }

}
