<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weapon;

class WeaponController extends Controller
{

    public function index()
    {
        $weapon = Weapon::all();
        return view('allWeapons',['weapons'=>$weapon]);
    }

    public function store(Request $request)
    {
        $weapon = new Weapon();
        $weapon->name= $request->input('name');
        $weapon->type= $request->input('type');
        $weapon->licenseNo = $request->input('licenseNo');
        $weapon->date_bought=$request->input('date_bought');
        $weapon->save();

        return redirect('allWeapons');

    }

    public function create()
    {
        return view('addWeapons');
    }




    public function show($id)
    {

    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
