<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;


class FruitController extends Controller
{
    public function index()
    {
        $fruit = Fruit::all();
        return view('fruits.index', compact('fruit'));
    }

    public function create()
    {
        return view('fruits.create');
    }

    public function stockage(Request $request)
    {
        $fruit = new Fruit;
        $fruit->name = $request->input('name');

        if($request->hasfile('fruit_image'))
        {
            $file = $request->file('fruit_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/fruits/', $filename);
            $fruit->fruit_image = $filename;
        }

        $fruit->save();
        return redirect()->back()->with('status','Successfully added');
    }

    public function destroy($id)
    {
        $fruit = Fruit::find($id);
        $destination = 'uploads/fruits/'.$fruit->fruit_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $fruit->delete();
        return redirect()->back()->with('status','Successfully Added');
    }
}

