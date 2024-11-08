<?php

namespace App\Http\Controllers;

use App\Models\Promises;
use Illuminate\Http\Request;

class PromisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $promises = Promises::orderBy('id','DESC')->paginate(10);

        return view('backend.promises.index')->with('promises',$promises);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('backend.promises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            'verse'=>'string|required|max:100',
            'words'=>'string|required',
        ]);


        $data = $request->all();

        $status = Promises::create($data);

        if($status){
            request()->session()->flash('success','Successfully added promise');
        }
        else{
            request()->session()->flash('error','Error occurred while adding promise');
        }

        return redirect()->route('promises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PromisesController $promisesController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PromisesController $promisesController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PromisesController $promisesController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promises $promisesController)
    {
        //
        $status=Promises::findOrFail($id)->delete();
        if($status){
            request()->session()->flash('success','Promise successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting Promise');
        }
        return redirect()->route('promises.index');

    }
}
