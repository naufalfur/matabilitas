<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.cities.index')->with('cities', City::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);

        $city = new City;

        $city->name = $request->name;
        $city->slug = str_slug($request->name);
        $city->save();

        Session::flash('success', 'You successfully created cities');

        return redirect()->route('cities', []);
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
        //
        $city = City::find($id);

        return view('admin.cities.edit')->with('city', $city);
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
        //
        $city = City::find($id);

        $city->name = $request->name;
        $city->slug = str_slug($request->name);

        $city->save();

        Session::flash('success', 'You successfully updated the category');

        return redirect()->route('cities', []);
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
        $city = City::find($id);

        foreach($city->posts as $post){
            $post->forceDelete();
        }

        $city->delete();

        Session::flash('success', 'You successfully deleted the category');

        return redirect()->route('cities', []);
    }
}
