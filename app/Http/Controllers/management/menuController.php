<?php

namespace App\Http\Controllers\management;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\categoryModel;
use App\Models\menuModel;
class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $menus = menuModel::all();
        return view('management.menu')->with('menus', $menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = categoryModel::all();
        return view('management.CreateMenu')->with('categories', $categories);
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
            'name' => 'required',
            'description' => 'required',
            'cat_id' => 'required',
        ]);

      //  $imageName = 'noimgfound.jpg';

        if($request->image){
        $request->validate([
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $imageName = date('mdHYis').uniqid().'.'.$request->image->extension();
        $request->image->move(public_path('storage'),$imageName);
        }

        $mod_menu = new menuModel;
        $mod_menu->name = $request->name;
        $mod_menu->description = $request->description;
        $mod_menu->image = $imageName;
        $mod_menu->cat_id = $request->cat_id;
        $mod_menu->save();

        $request->session()->flash('status',$request->cat.' ajouter aux Menu !');

       // $categories = categoryModel::paginate(4);
        return redirect('/management/menu');
    
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
        $menus = menuModel::all();
        $categories = categoryModel::all();
        return view('management.editMenu')->with('categories', $categories)->with('menus', $menus);
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
        $mod_menu = menuModel::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'cat_id' => 'required',
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
                $imageName = 'noimgfound.jpg';
                $request->image->move(public_path('storage'),$imageName);
            }else {   
                $imageName = $mod_menu->image;
            }
    
        $mod_menu->name = $request->name;
        $mod_menu->description = $request->description;
        $mod_menu->image = $imageName;
        $mod_menu->cat_id = $request->cat_id;
        $mod_menu->save();

        $request->session()->flash('status',$request->name.' Menu mise a jour !');
       // $categories = categoryModel::paginate(4);
        return redirect('/management/menu');
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}