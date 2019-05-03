<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Woodland;

class WoodlandsController extends Controller
{
  function __construct(Request $request)
  {
    //ensures this controller and all corresponding routes are behind
    //the auth meaning login is required to access them
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the woodlands and make them available to use in the view
        $woodlands = Woodland::all();
        //return the admin woodlands view
        return view('/admin/woodlands/index', ['woodlands' => $woodlands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //returns the admin woodlands create view if the create controller
      //is activated
        return view('admin.woodlands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*ensures that all data created by the user is stored
      in the woodland database*/
        $woodland = Woodland::create($request->all());

        return redirect('admin/woodlands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*This shows the details of a woodland when selected and loads
      the show view if there is a woodland matching the selected woodland
      id*/
        $woodland = Woodland::where('id', $id)->first();

        if(!$woodland) {
          return redirect('/admin/woodlands');
        }
        return view('/admin/woodlands/show')->withWoodland($woodland);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /*allows the editing of a woodland database record if the woodland
      id exists. Loads the edit view*/
      $woodland = Woodland::findOrFail($id);

      return view('admin.woodlands.edit', compact('woodland'));
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
      /*allows the updating of the database record and returns the
      admin wooldnad view*/
      $woodland = Woodland::findOrFail($id);

      $woodland->update($request->all());

      return redirect('admin/woodlands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*allows the deletion of a woodland record*/
      $woodland = Woodland::find($id);

      $woodland->delete();

      return redirect('admin/woodlands');
    }
}
