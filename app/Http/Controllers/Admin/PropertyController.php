<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Property;
use App\Http\Requests\PropertyFormRequest;
use Illuminate\Support\Facades\File;

class PropertyController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('admin.property.index',compact('properties'));
    }

    public function create(){
        $cities = City::all();
        return view('admin.property.create',compact('cities'));
    }

    public function store(PropertyFormRequest $request){
        $validatedData = $request->validated();

        $city = City::findOrFail($validatedData['city_id']);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/property',$filename);
            $validatedData['image'] = "$filename";
        }

        $property = $city->properties()->create([
            'city_id' => $validatedData['city_id'],
            'name' => $validatedData['name'],
            'location' => $validatedData['location'],
            'image' => $validatedData['image'],
        ]);
        return redirect('/admin/property')->with('message','Property Added Successfully');

    }

    public function edit(int $property_id){

        $cities = City::all();
        $property = Property::findOrFail($property_id);
        return view('admin.property.edit', compact('property','cities'));
    }

    public function update(PropertyFormRequest $request, $property){

        $validatedData = $request->validated();

        $property = Property::findOrFail($property);

        $property->name = $validatedData['name'];
        $property->location = $validatedData['location'];

        if($request->hasFile('image')){

            $path = 'uploads/property'.$property->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/property',$filename);

            $property->image = $filename;
        }

        $property->update();

        return redirect('admin/property')->with('message','Property Updated Successfully');
    }

    public function delete($property_id){

        Property::findOrFail($property_id)->delete();
        return redirect('admin/property')->with('message', 'Property Deleted Successfully');
    }

}
