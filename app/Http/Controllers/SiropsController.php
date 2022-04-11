<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sirops;

class siropsController extends Controller
{
    public function index()
    {
        $sirops = Sirops::all();
        return view('siropss.index', compact('sirops'));
    }

    public function create()
    {
        return view('siropss.create');
    }

    public function stockage(Request $request)
    {
        $sirops = new Sirops;
        $sirops->name = $request->input('name');

        $sirops->save();
        return redirect()->back()->with('status','Successfully added');
    }

    public function destroy($id)
    {
        $sirops = Sirops::find($id);
        $sirops->delete();
        return redirect()->back()->with('status','Successfully Added');
    }
}
        // dd('index Acétomel');
        // dd('index Sirop dagave');
        // dd('index Attar');
        // dd('index Malt dorge sirop');
        // dd('index Le sirop de bouleau');
        // dd('index Bludwine');
        // dd('index Sirop de riz brun');
        // dd('index Chashni');
        // dd('index Cheong');
        // dd('index Cherry Smash');
        // dd('index Sirop au chocolat');
        // dd('index Sirop de cidre');
        // dd('index Sirop de maïs');
        // dd('index Miel de datte');
        // dd('index Jus de canne évaporé');
        // dd('index Falernum');
        // dd('index Sirop aromatisé');
        // dd('index Sirop de siropss');
        // dd('index Le sirop de glucose');
        // dd('index Le sirop doré');
        // dd('index Sirop de raisin');
        // dd('index Grenadine');
        // dd('index Sirop de miel');
        // dd('index Le sirop de sucre inversé');
        // dd('index Kuromitsu');
        // dd('index Le sirop dérable');
        // dd('index Mizuame');
        // dd('index Mélasse');
        // dd('index Sirop dorgeat');
        // dd('index Sirop de palme');
        // dd('index Pekmez');
        // dd('index Sirop de rose');
        // dd('index Courge');
        // dd('index Sirop de canne de Steen');
        // dd('index Sirop de betterave à sucre');
        // dd('index Sorgho doux');
        // dd('index Sirop de Maidenhair');
        // dd('index Vincotto');
        // dd('index Sirop de Yacón');
        // dd('index Yeot');