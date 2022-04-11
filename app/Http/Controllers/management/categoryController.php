<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoryModel;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    /**b
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
        
        //$categories = categoryModel :: all();
        $categories = categoryModel::paginate(4);
       // $categories = DB::table('category_models')->paginate(6);
        return view('management.createCategory') -> with('categories', $categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.createNewCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'cat' => 'required',
        ]);
       
        $mod_cat = new categoryModel;
        $mod_cat->name = $request->cat;
        $mod_cat->save();

        $request->session()->flash('status',$request->cat.' ajouter aux catégories !');

       // $categories = categoryModel::paginate(4);
        return redirect('/management/category');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_edit = categoryModel::find($id);
        return view('management.editCategory') -> with('category_edit', $category_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cat' => 'required',
        ]);
       
        $mod_cat = categoryModel::find($id);
        $mod_cat->name = $request->cat;
        $mod_cat->save();

        $request->session()->flash('status',$request->cat.' Catégories mise a jour !');

       // $categories = categoryModel::paginate(4);
        return redirect('/management/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $c = categoryModel::find($id);
       // $c = DB::table('category_models')->find($id);
       session()->flash('status',' Catégories Supprimer !');

        $c -> delete();
       // $categories = categoryModel::paginate(4);
        return redirect('/management/category');
       // return view('management.createCategory') -> with('categories', $categories);
    }
}