<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proverb;

class ProverbController extends Controller
{
    public function index()
    {
        $proverbs=Proverb::orderBy('id','DESC')->paginate(10);
        return view('backend.proverbs.index')->with('proverbs',$proverbs);
    }

    public function create()
    {
        return view('backend.proverbs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'verse'=>'string|required|max:100',
            'words'=>'string|required',
        ]);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        $status=Proverb::create($data);
        // dd($status);
        if($status){
            request()->session()->flash('success','Successfully added proverb');
        }
        else{
            request()->session()->flash('error','Error occurred while adding psalm');
        }
        return redirect()->route('proverbs.index');
    }   

    public function edit($id)
    {
        $verse=Verse::findOrFail($id);
        return view('backend.verses.edit')->with('verse',$verse);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'title'=>'string|required|max:100',
            'description'=>'string|required',
            'verse'=>'string|required',
            'reference'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        $verse=Verse::findOrFail($id);
        $status=$verse->fill($data)->save();
        // dd($status);
        if($status){
            request()->session()->flash('success','Verse successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating verse');
        }
        return redirect()->route('psalm.index');
    }

    public function destroy($id)
    {
        $status=Proverb::findOrFail($id)->delete();
        if($status){
            request()->session()->flash('success','Proverb successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting Proverb');
        }
        return redirect()->route('proverbs.index');
    }
}
