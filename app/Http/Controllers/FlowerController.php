<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFlowerRequest;
use App\Models\Flower;

class FlowerController extends Controller
{
    public function index()
    {
        //return "this is a flower page ";

        $flowers = Flower::all();

        return view('all-flowers', ['flowers' => $flowers]);
    }

    public function show($id)
    {
        $flower = Flower::find($id);


        return view('flower-detail', ['flower' => $flower]);
    }

    // display the form
    public function create()
    {

        return view('new-flower');
    }

    public function insert(StoreFlowerRequest $request)
    {
        // First: validations
        $validated = $request->validated();

        // Then : insert
        $flower = new Flower;
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->save();



        if ($flower->save())
            return redirect('/flowers')->with('message', 'Successfully insert in the DB !');
        else
            echo "problem inserting";
    }

    public function edit($id)
    {

        $flower = Flower::find($id);
        
        // $flower = DB::table('flowers')->where('id', $id)->first();

        return view('edit-flower', ['flower' => $flower]);
    }

    public function update(Request $request, $id)
    {
        $flower = Flower::find($id);
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->save();

        if ($flower->save())
            return  redirect('/flowers')->with('message', $request->name . ' Successfully updated');
        else
            echo "problem in updating";
    }
    public function destroy($id)
    {
        $flower = Flower::destroy($id);


        if ($flower)
            return redirect('/flowers')->with('message', 'Successfully deleted from the DB !');
        else
            return redirect('/flowers')->with('error', 'problem in deleting the flower');
            
    }
}
