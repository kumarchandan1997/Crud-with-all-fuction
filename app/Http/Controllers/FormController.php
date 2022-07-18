<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use File;

class FormController extends Controller
{

    public function index(Request $request)
    {
        $search= $request['search'] ?? "";
        if($search !="")
        {
            $customer=Form::where('name', 'LIKE', "%$search%")->orwhere('email' ,'LIKE' , "%$search%")->get();
        }
        else{
        $customer = Form::paginate(15);
        }
        $data=compact('customer','search');
        return view('index')->with($data);
    }
    public function create()
    {
        $customer=new Form();
        $url=url('store');
        $title="Customer Registration";
        $data=compact('url','title','customer');
        return view('create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | max:50',
            'email'  => 'required',
            'password' => 'required',
            'mobile' => 'required',
            'country'  => 'required',
            'state' => 'required',
            'address'   => 'required',
            'dob'       => 'required'
          ],[
            'name.required'   =>'Please enter name',
            'email.required'  =>'Please enter email',
            'password.required' =>'please enter password',
            'mobile.required'  =>'please enter mobile',
            'country.required' =>'please enter country',
            'state.required'   =>'please enter state',
            'address.required' =>'please enter address',
            'dob.required'    =>'please enter dob'
          ]);

        $form= new Form;
        $form->name                 =     $request['name'];
        $form->email                =     $request['email'];
        $form->password             =     $request['password'];
        $form->mobile               =     $request['mobile'];
        $form->country              =     $request['country'];
        $form->state                =     $request['state'];
        $form->address              =     $request['address'];
        $form->dob                  =     $request['dob'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/image/', $filename);
            $form->image = $filename;
        }
        $form->save();
        return redirect('/');
    }
   

    public function edit($id)
    {
        $customer= Form::find($id);
        if(is_null($customer))
        {
            return redirect('/');
        }
        else{
            $title="Update Customer";
            $url=url('/update') . "/" . $id;
            $data=compact('customer','url','title');
        }
        return view('create')->with($data);
    }

    public function update($id , Request $request)
    {
        $form=Form::find($id);
        $form->name=$request['name'];
        $form->email=$request['email'];
        $form->password=$request['password'];
        $form->mobile=$request['mobile'];
        $form->country=$request['country'];
        $form->state=$request['state'];
        $form->address=$request['address'];
        $form->dob=$request['dob'];
        if($request->hasfile('image'))
        {
            $destination = 'storage/image/'.$form->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/image/', $filename);
            $form->image = $filename;
        }
        $form->save();
        return redirect('/');


    }
    public function show($id)
    {
        $customer=Form::find($id);
        $data=compact('customer');
        //dd($customer);
        return view('show')->with($data);
    }

    public function delete($id)
    {

        $customer = Form::find($id);
       
        $customer->delete();
        return redirect()->back()->with('status','Customer Deleted Successfully');
    }
}
