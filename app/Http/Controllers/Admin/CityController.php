<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CityFormRequest;
use App\Models\City;
use Illuminate\Support\Facades\File;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('admin.city.index',compact('cities'));
    }

    public function create(){
        return view('admin.city.create');
    }

    public function store(CityFormRequest $request){

        $validatedData = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/city',$filename);
            $validatedData['image'] = "$filename";
        }

        City::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
        ]);

        return redirect('admin/city')->with('message','City Added Successfully');
    }

    public function edit(int $city_id){

        $city = City::findOrFail($city_id);
        return view('admin.city.edit', compact('city'));
    }

    public function update(CityFormRequest $request, $city){

        $validatedData = $request->validated();

        $city = City::findOrFail($city);

        $city->name = $validatedData['name'];
        $city->description = $validatedData['description'];

        if($request->hasFile('image')){

            $path = 'uploads/city'.$city->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/city',$filename);

            $city->image = $filename;
        }

        $city->update();

        return redirect('admin/city')->with('message','City Updated Successfully');
    }

    public function delete($city_id){

        City::findOrFail($city_id)->delete();
        return redirect('admin/city')->with('message', 'City Deleted Successfully');
    }

}
