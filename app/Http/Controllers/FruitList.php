<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitList extends Controller
{
    public function fruitlist()
	{
		return view('fruit.index');
	}

	public function creation()
	{
		return view('fruit.creation');
	}

	// public function stockage(Request $request)
	// {
	// 	$fruit = new FruitTable;
	// 	$fruit->name = $request->input('name');

	// 	if($request->hasfile('fruit_image')) {
	// 		$file = $request->file('fruit_image');
	// 		$extension = $file->getClientOriginalExtension();
	// 		$filename = time().'.'.$extension;
	// 		// $file->move('uploads/FruitTable/', $filename);
	// 		$fruit->fruit_image = $filename;
	// 	}

		// $fruit->fruit_image = $request->input('fruit_image');
		// return view('fruit.stockage');

	// 	$fruit->save();
	// 	return redirect()->back()->with('status','Fruit Image added done');

	// }
}
