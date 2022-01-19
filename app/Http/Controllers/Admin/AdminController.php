<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;

class AdminController extends Controller
{

    public function create()
    {
        return view('admin.create');
    }

    public function create_post(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'brand' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required',
            'powerful' => 'required',
            'years' => 'required',
            'finishing' => 'required',
            'desc' => 'required',
        ]);

        $cars = Cars::create([
            "model" => $request["model"],
            "brand" => $request["brand"],
            "img_ext" => $request->image->extension(),
            "price" => $request["price"],
            "powerful" => $request["powerful"],
            "years" => $request["years"],
            "finishing" => $request["finishing"],
            "desc" => $request["desc"],
        ]);

        $imageName = $cars->id.'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        return redirect()->route('index');
    }

    public function delete($car)
    {
        Cars::where('id', $car)->delete();
        return redirect()->route('index');
    }
}
