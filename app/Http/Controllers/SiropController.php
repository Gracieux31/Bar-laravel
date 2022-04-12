<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sirop;
use Illuminate\Support\Facades\File;

class SiropController extends Controller
{
    public function index() 
    {
        $sirop = Sirop::all();
        return view('sirops.index', compact('sirop'));
    }

    public function create() 
    {
        return view('sirops.create');
    }

    public function stockage(Request $request)
    {
        $sirop = new Sirop;
        $sirop->name = $request->input('name');
        $sirop->save();
        return redirect()->back()->with('status','Sirop successfully added');
    }
    public function edit($id)
    {
        $sirop = Sirop::find($id);
        return view('sirops.edit', compact('sirop'));
    }

    public function update(Request $request, $id)
    {
        $sirop = Sirop::find($id);
        $sirop->name = $request->input('name');
        $sirop->update();
        return redirect()->back()->with('status','Sirop Updated Successfully');
    }

    public function destroy($id)
    {
        $sirop = Sirop::find($id);
        $sirop->delete();
        return redirect()->back()->with('status','Sirop Deleted Successfully');
    }

}
