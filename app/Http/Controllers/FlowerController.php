<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlowerController extends Controller
{
    public function index()
    {
        //return "this is a flower page ";

        $flowers = DB::table('flowers')->get();
        //dd($flowers);
        return view('all-flowers', ['flowers' => $flowers]);
    }

    public function show($id)
    {
        $flower = DB::table('flowers')->where('id', $id)->first();

        return view('flower-detail', ['flower' => $flower]);
    }

    // display the form
    public function create()
    {

        return view('new-flower');
    }

    public function insert(Request $request)
    {

        $result =  DB::table('flowers')->insert([
            'name' => $request->name,
            'price' => $request->price,

        ]);

        if ($result)
            return redirect('/flowers')->with('message', 'Successfully inserted in the DB !');
        else
            echo "problem inserting";
    }

    public function edit($id)
    {

        $flower = DB::table('flowers')->where('id', $id)->first();

        return view('edit-flower', ['flower' => $flower]);
    }

    public function update(Request $request, $id)
    {

        $result = DB::table('flowers')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'price' => $request->price
            ]);

        if ($result)
            return  redirect('/flowers')->with('message', $request->name . ' Successfully updated');
        else
            echo "problem in updating";
    }
    public function destroy($id)
    {

        $result = DB::table('flowers')->where('id', '=', $id)->delete();

        //return view('delete-flower');

        if ($result)
            return redirect('/flowers')->with('message', 'Successfully deleted from the DB !');
        else
            return redirect('/flowers')->with('error', 'problem in deleting the flower');
    }
}
