<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Requests\PaymentFormRequest;
use Illuminate\Support\Facades\File;

class PaymentController extends Controller
{
    public function index(){
        $payments = Payment::all();
        return view('admin.payment.index',compact('payments'));
    }

    public function create(){
        return view('admin.payment.create');
    }

    public function store(PaymentFormRequest $request){

        $validatedData = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/payment',$filename);
            $validatedData['image'] = "$filename";
        }

        Payment::create([
            'name' => $validatedData['name'],
            'image' => $validatedData['image'],
        ]);

        return redirect('admin/payment')->with('message','Payment Added Successfully');
    }

    public function edit(int $payment_id){

        $payment = Payment::findOrFail($payment_id);
        return view('admin.payment.edit', compact('payment',));
    }

    public function update(PaymentFormRequest $request, $payment){

        $validatedData = $request->validated();

        $payment = Payment::findOrFail($payment);

        $payment->name = $validatedData['name'];

        if($request->hasFile('image')){

            $path = 'uploads/payment'.$payment->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/payment',$filename);

            $payment->image = $filename;
        }

        $payment->update();

        return redirect('admin/payment')->with('message','Payment Updated Successfully');
    }

    public function delete($payment_id){

        Payment::findOrFail($payment_id)->delete();
        return redirect('admin/payment')->with('message', 'Payment Deleted Successfully');
    }
}
