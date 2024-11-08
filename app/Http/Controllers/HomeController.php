<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return view('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeModel $homeController)
    {
        //

        return view('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeModel $homeController)
    {
        //

        return view('welcome');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeModel $homeController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeModel $homeController)
    {
        //
    }

    public function verseoftheday()
    {

        return view('verseoftheday');
        // return HomeModel::verseoftheday();
    }

    public function psalmoftheday()
    {

        return view('psalmoftheday');
        // return HomeModel::psalmoftheday();
    }

    public function proverboftheday()
    {

        return view('proverboftheday');
        // return HomeModel::proverboftheday();
    }

    public function promiseoftheday()
    {
        return view('promiseoftheday');
        // return HomeModel::promiseoftheday();
    }


}
